<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Category;
use App\Models\User;
use App\Models\Enquiry;
use App\Models\LoanRequest;
use App\Models\ApprovedLeads;
use App\Models\SanctionAmount;
use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\UserPlan;
use App\Models\Wallet\Wallet;
use App\Service\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Exports\LeadExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;



class DasboardController extends Controller
{
    public function index()
    {
      
       $loan_requests=LoanRequest::get()->count();
       $loan_amount= LoanRequest::sum('loan_amount');
       $a_amount= ApprovedLeads::sum('sanctionamt');
       $per=($a_amount/$loan_amount )*100;
       
        return view('admin.dashboard.index',compact('loan_requests','loan_amount','a_amount','per'));
    }
    
   
    public function check_status(Request $request) {
         $data     = $request->appno;
        //  dd($data);
         if(LoanRequest::where('lead_token',$data)->count()==0) return response()->json(['status' => false,'error' => true,'message' => 'Application number not exist'],200);
         $approved = LoanRequest::leftjoin('approved_leads','loan_requests.id','=','approved_leads.loan_request_id')
                    ->where('loan_requests.lead_token',$data)
                    ->select('loan_requests.*','approved_leads.*','loan_requests.status as loan_status')
                    ->first();
       
       
       
     
       if($approved)
       return response()->json
       (
       ['name' => $approved->name,
       'email' => $approved->name,
       'phone' => $approved->email,
       'loan_amount' => $approved->loan_amount,
       'loan_type' => $approved->loan_type,
       'loan_status'    => $approved->status,
       'status'  => true
       ],200);
       
       else return response()->json(['status' => false],500);
        
       
        
    }
    
    public function sanctio_letter_page(Request $request){
        $res=$request->all();
        $data=   LoanRequest::leftjoin('approved_leads','loan_requests.id','=','approved_leads.loan_request_id')
                     ->where('approved_leads.appno',$res['leadId'])
                     ->select('loan_requests.*','approved_leads.*')
                     ->orderBy('approved_leads.created_at', 'desc')
                     ->first();
         
        // $data=ApprovedLeads::where('appno',$data['leadId'])->first();
        //   dd($data);
     
        return view('admin.sancation_form',compact('data'));
     
        
    }
    
    public function edit_sanctio_letter_page(Request $request){
        $data=$request->all();
       
        $data=SanctionAmount::where('id',$data['SanctionletterId'])->first();
        //   dd($data);
        
        return view('admin.edit_sanction',compact('data'));
     
    }
    public function print_sanction_pdf(){
        $data=request()->all();
        $obj=SanctionAmount::where('id',$data['sanction_letter_id'])->first();
        $newformat= Carbon::parse($obj['created_at'])->format('d-m-Y');
        $obj['new_format'] = $newformat;
      
     
       
        return view('sanction_pdf',compact('obj'));
    }
    public function create_sanction_letter(Request $request){
        $data=$request->all();
        // dd($data);
        $res=SanctionAmount::create($data);
        // dd($res);
        return redirect()->back()->with(['success' =>'Sanction Letter Created😊 ']);
        
    }
    public function get_lead_details($id)
    {
        $obj=LoanRequest::where('id',$id)->first();
       
       
        if($obj)
        return response()->json(['status'=>true,
        'name'=>$obj->name,
        'email'=>$obj->email,
        'phone'=>$obj->phone,
        'state'=>$obj->state,
        'lead_token'=>$obj->lead_token,
        'loan_type'=>$obj->loan_type,
        'loan_amount'=>$obj->loan_amount,
        'message'=>$obj->message,
        'adhaar'=>$obj->aadhar_number	
        ]);
        else return response()->json(['status'=>false],500);
        
    }
    
    public function lead_edit(Request $request){
        $data= $request->all();
        if($data){
        $lonrequest=LoanRequest::findorfail($data['leadId']);
        $lonrequest->name=$data['leadName'];
        $lonrequest->email=$data['leadEmail'];
        $lonrequest->phone= $data['phone'];
        $lonrequest->loan_type= $data['loan_type'];
        $lonrequest->loan_amount= $data['loan_amount'];
        $lonrequest->state= $data['state'];
        $lonrequest->message= $data['message'];
        $lonrequest->save();
       return response()->json(['status' => true],200);
        }
        else   return response()->json(['status' => false],500);
        
       
    }
    
   
   public function lead_delete(Request $request){
       $id= $request->all();
       
      
       $delete=LoanRequest::findorfail($id['lead_id']);
       $delete->delete();
       if($delete) return redirect()->route('admin.loan_request')->with('delete_success', 'Lead deleted successfully');
       else return redirect()->route('admin.loan_request')->with('delete_fail', 'Lead Cant be deleted' );
       
   }
   
  public function lead_approve(Request $request){
      
      $data=$request->all();
      $lead=LoanRequest::findorfail($data['leadhidden']);
      $lead->status=1;
      $lead->name=$data['leadName'];
      $lead->email=$data['leadEmail'];
      $lead->phone=$data['phone'];
      $lead->loan_type=$data['loan_type'];
      $lead->loan_amount=$data['loan_amount'];
      $lead->state=$data['state'];
      $lead->message=$data['message'];
      $lead->save();
      
      $data['loan_request_id'] =$data['leadhidden'];
      $data['dummy']=Carbon::parse( $data['dummy'])->format('Y-m-d');
    
      unset($data['leadhidden']);
      unset($data['leadName']);
      unset($data['leadEmail']);
      unset($data['phone']);
      unset($data['loan_type']);
      unset($data['loan_amount']);
      unset($data['state']);
      unset($data['message']);
     
    
      $res=ApprovedLeads::create($data);
     
     
      return response()->json(['status' =>true],200);
      
      
  }
  public function edit_approved_submit(Request $request){
      $data=$request->all();
   
     $loandetails=['name'=>$data['name'],'email'=>$data['email'],'phone'=>$data['phone'],'loan_type'=>$data['loan_type'],'loan_amount'=>$data['loan_amount'],'state'=>$data['state'],'lead_token'=>$data['UTOKEN'],'message' =>$data['message']];
     $approvedetails=['sanctionamt'=>$data['sanctionamt'],'emiamt'=>$data['emiamt'],'loant'=>$data['loant'],'roi'=>$data['roi'],'pf'=>$data['pf'],'gst' =>$data['gst'],'totalv'=>$data['totalv'],'security' =>$data['security'],'dummy'=>$data['dummy'],'adhaar_number' => $data['adhaar_number']];
      $obj=LoanRequest::where('id',$data['lead_id'])->update($loandetails);
      $lead=ApprovedLeads::where('loan_request_id',$data['lead_id'])->update($approvedetails);
     
      if($lead)
      return redirect()->route('admin.loan_request_approved');
      
      
  }
  public function all_approved_leads(){
      
      $approved = LoanRequest::join('approved_leads','loan_requests.id','=','approved_leads.loan_request_id')
                 ->leftjoin('sanction_letter','loan_requests.lead_token','=','sanction_letter.lead_token')
               ->where('loan_requests.status',1)
               ->select('loan_requests.*','approved_leads.*','sanction_letter.id as sanction_letter_id')
               ->orderBy('approved_leads.created_at', 'desc')
               ->get();
    // dd($approved[100]);
      
       return view('admin.approved.index',compact('approved'));
  }
    
    public function export_excel(){
        return Excel::download(new LeadExport(), 'leads.xlsx');
        
    }
    
    public function view_pdf(Request $request)
{
     
     $data=$request->leadId;
    
    
     $res=(int)$data;
    
    $approved=ApprovedLeads::where('loan_request_id',$res)->first();
    
    $id=$approved['loan_request_id'];
     
    $details=LoanRequest::where('id',$id)->first();
    $approved->dummy=Carbon::parse($approved->dummy)->format('d-m-Y');
    Carbon::now()->format('d-m-Y');
    return view('pdf',compact('details','approved'));
  
    
   }
    
    public function enquiry()
    {
        $enquiries=Enquiry::with('category')->get()->toarray();
        $categories=Category::all();
        return view('admin.enquiry.index',compact('enquiries','categories'));
        
    }
    public function loan_request(Request $request)
    {
        $requests=  LoanRequest::orderBy('created_at', 'desc')->get();
        return view('admin.enquiry.index',compact('requests'));
        
    }
    
    public function approval_pdf(){
        return view('pdf');
    }
    public function update_enquiry(Request $request)
    {
       
        $enquiry=Enquiry::where('id',$request->enquiry_id)->first();
        if($enquiry)
        {
        $enquiry->status=$request->enquiry_status;
        $enquiry->save();
        return response()->json(['status'=>'success',
        'updated_status'=>$enquiry->status],200);
        }
        return response()->json(['status'=>'false'],500);
        
    }

    public function users()
    {
        $users = User::with('with_wallet')->get();
        return view('admin.users.index', compact('users'));
    }


    public function profile()
    {
        $user = User::with('with_wallet')->first();

        return view('admin.dashboard.profile', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        if (!empty($request->password) && !empty($request->confirm_password))
            if ($request->password == $request->confirm_password) {
                $password = $request->password;
            } else {
                return redirect()->back()->with('error', "Password do not match");
            }

        $user = User::where('id', Auth::user()->id)->first();
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if (!empty($password)) $user->password = Hash::make($password);
        $user->save();

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    

    

    public function userNetwork($user_id)
    {
        $user   = User::where('id', $user_id)->first();
        $wallet = Wallet::where('user_id', $user_id)->first();

        $level_1_users = User::with('with_wallet')->where('referred_by', $user_id)->get();
        $level_2_users = User::with('with_wallet')->whereIn('referred_by', self::getIDs($level_1_users))->get();
        $level_3_users = User::with('with_wallet')->whereIn('referred_by', self::getIDs($level_2_users))->get();

        return view('admin.users.network.index', compact( 'user', 'wallet', 'level_1_users', 'level_2_users', 'level_3_users'));
    }

    public function userPlans($user_id)
    {
        $user       = User::where('id', $user_id)->first();
        $wallet     = Wallet::where('user_id', $user_id)->first();
        $userPlans  = UserPlan::where('user_id', $user->id)->where('status', UserPlan::PLAN_ACTIVE)->get()->groupBy(['plan_id'])->toArray();
        $plans      = Plan::whereIn('id', array_keys($userPlans))->get();

        foreach ($plans as $key => $plan)
            $plans[$key]->userPlans = !empty($userPlans[$plan->id]) ? count($userPlans[$plan->id]) : 0;

        return view('admin.users.plan.index', compact( 'user', 'wallet', 'plans'));
    }
    
    public function approve_lead_details(Request $request)
    {
        $data= $request->all();
     
        $approved = LoanRequest::leftjoin('approved_leads','loan_requests.id','=','approved_leads.loan_request_id')
               ->where('loan_requests.status',1)
               ->where('loan_requests.id',$data['leadId'])
               ->select('loan_requests.*','approved_leads.*')
               ->first();
      
     
        
       return response()->json($approved,200);
        
        // else   return response()->json(['status' => false],500);
        
    }
    
    public function send_message(){
        return view('admin.message.create');
    }
  
  
   public function send_message_user(Request $request)
{
    $message    = trim($request->message ?? '');
    $mobile     = trim($request->input('mobile') ?? '');
    $templateId = trim($request->input('template_id') ?? '');

    // Basic validation
    if (empty($message)) {
        return response()->json(['status' => false, 'message' => 'Please enter a message'], 200);
    }
    if (empty($mobile) || !is_numeric($mobile) || strlen($mobile) < 10) {
        return response()->json(['status' => false, 'message' => 'Please enter a valid 10-digit mobile number'], 200);
    }

    // === HIVE MSG V2 CREDENTIALS ===
    $userId     = 'pvbl6krfog';
    $userToken  = 'bHGlpXGKzZBLufCF3SKxsghe';
    $senderId   = 'ACPITL';
    $entityId   = '1701178236662745524';

    $apiUrl = "https://console.hivemsg.com/sms-api/v2/broadcasting";

    $apiParams = [
        'userId'              => $userId,
        'userToken'           => $userToken,
        'route'               => 'transactional',
        'language'            => 'EN',
        'includesCountryCode' => 'N',
        'campaignReschedule'  => 'N',
        'countryCodeName'     => 'IN',
        'senderId'            => $senderId,
        'entityId'            => $entityId,
        'template'            => $message,
        'contacts'            => json_encode([["mobile" => $mobile]]),
        'plan_id'             => 2
    ];

    // Add template ID if selected
    if (!empty($templateId)) {
        $apiParams['templateId'] = $templateId;
    }

    try {
        $response = \Illuminate\Support\Facades\Http::get($apiUrl, $apiParams);

        // === DEBUG LOGGING ===
        \Log::info('HiveMsg SMS Attempt', [
            'mobile'      => $mobile,
            'message'     => substr($message, 0, 100),
            'template_id' => $templateId,
            'status'      => $response->status(),
            'response'    => $response->body(),
            'successful'  => $response->successful()
        ]);

        if ($response->successful()) {
            $responseData = $response->json();
            // Check if HiveMsg returned success in response body
            if (isset($responseData['status']) && $responseData['status'] == 'error') {
                return response()->json(['status' => false, 'message' => $responseData['message'] ?? 'SMS delivery failed from HiveMsg'], 200);
            }
            return response()->json(['status' => true, 'message' => 'SMS Sent Successfully!'], 200);
        } else {
            $errorMsg = $response->body() ?: 'Unknown error from HiveMsg';
            return response()->json(['status' => false, 'message' => 'SMS Failed: ' . $errorMsg], 200);
        }
    } catch (\Exception $e) {
        \Log::error('HiveMsg Exception: ' . $e->getMessage());
        return response()->json(['status' => false, 'message' => 'Something went wrong: ' . $e->getMessage()], 200);
    }
}
    

    public static function getIDs($users)
    {
        $ids    = [];
        foreach ($users as  $user) $ids[] = $user->id;
        return $ids;
    }


    
}
