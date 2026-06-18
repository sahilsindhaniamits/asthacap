<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;
use App\Models\Plan;
use App\Models\User;
use App\Models\LoanRequest;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Order;
use App\Models\UserLevel;
use App\Models\UserPlan;
use App\Models\Wallet\Transaction;
use App\Models\Wallet\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function check_username(Request $request){
         $username=$request->username;
         if(User::where('username',$username)->get()->count()>1){
             return response()->json(['status'=>'success'],200);
         }
     }
     public function check_code(Request $request){
         $parent_code=$request->parent;
         if(User::where('referral_code',$parent_code)->get()->count()==0){
             return response()->json(['status'=>'success'],200);
         }
     }
     
     public function loan_request(Request $request){
         
        
         $data=$request->all();
        
         if(!empty(LoanRequest::where('phone',$data['phone'])->first()))    return redirect()->back()->with('error', 'Number already exists.');;
         if(!empty(LoanRequest::where('aadhar_number',$data['aadhar_number'])->first()))    return redirect()->back()->with('error', 'Aadhar already exists.');;
     
         $ipAddress = $request->getClientIp();
         $data['ip_address']=$ipAddress;
         $data['lead_token']='PFI'.rand(1000000000, 9999999999);
         $res=LoanRequest::create($data);
        
        if ($res) return redirect()->back()->with('success', 'Loan request submitted successfully.');
       else return redirect()->back()->with('error', 'Failed to submit the loan request. Please try again.');

     }
     
     public function submit_enquiry(Request $request)
     {
         $data=$request->all();
         Enquiry::create($data);
         return response()->json(['status'=>true],200);
         
     }
     public function register(Request $request)
    {
    
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6'
        ]);

        // Create a new user with the validated data
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'mode'=>$request->mode
           
        ]);
        
         // Log in the new user
        Auth::login($user);
        return response()->json([
            'status'=>'success'],200);
       
    }
    
    
    protected function validateRegistration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    
     protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    //  public function create_user(Request $request){
    //       $username=$request->input('username');
           
    //     $password=$request->input('password');
    //     $phone=$request->input('phone');
    //     $invitatiob_code=$request->input('invitatiob_code');
    //     // $user = User::where('username',$username)->first();
    //     // if($user) 
    //     // {
    //     //     echo"hello";
    //     //      $alertMessage = 'The username is already taken. Please try again.';
    //     //      session()->flash('taken','The username is already taken. Please try again.');
    //     //      return view('register');
    //     // }
       
    //     $plans   = Plan::where('status', 1)->orderBy('created_at', 'desc')->get();
    //     $banners = Banner::where('status', 1)->get();
      
    //     $user               =  [
    //         'username'          => $username,
    //         'phone'         =>  $phone,
    //         'password'      => Hash::make($password),
    //     ];
       
    //     if (!empty($invitatiob_code)) {
    //          if(User::where('referral_code',$invitatiob_code)->count()){
    //         $referred_by = User::where('referral_code',$invitatiob_code)->first();
    //         $user['referred_by'] = $referred_by->id;
    //          }
    //     else{
    //          dd($user);
    //         return redirect()->route('user.register')->with('invalid_code',1);
    //         }
     
       
    //     $user['referral_code'] = \Illuminate\Support\Str::random(8);
    //     echo"hello";
    //     DB::table('users')->insertt($user);
        
       
        
       
    //     return redirect()->route('home');
    // }
    //  }
     
    public function index()
    {
       $categories=Category::where('status',1)->get();
        return view('home', compact('categories'));
    }
  public function select_address()
  {
      return view('user.wallet.select_address');
  }
  public function address_check(){
            if(DB::table('withdrawal_address')->where('user_id',Auth::user()->id)->get()->count()>=1){
                return Response::json(['status'=>'success'],200);
            }
  }
    public function withdraw_method(){
        if(DB::table('withdrawal_address')->where('user_id',Auth::user()->id)->get()->count()>=1){
        $res = DB::table('withdrawal_address')
            ->leftJoin('Address_type', 'withdrawal_address.address_type_id', '=', 'Address_type.id')
            ->where('withdrawal_address.user_id', Auth::user()->id)
            ->select('withdrawal_address.address', 'Address_type.type','withdrawal_address.id')
            ->get()->Toarray();
           
            $tmp=[];
       foreach($res as $index=>$data)
       {
           $tmp[]=array(
               'address'=>$data->address,
               'type'   =>$data->type,
               'id'     =>$data->id);
           
       }
     
      return view('user.profile.Withdrawal_cards',compact('tmp'));
        }
        
        return view('user.profile.add_withdraw');
    }
  public function all_orders()
  {
        if(empty(Auth::user()->id))return redirect()->route('login')->with('not_logged_in','Login To Access this page');
      $pending=[];
      $completed=[];
      $orders=Order::where('user_id',Auth::user()->id)
                    ->whereIn('status',[1,0])
                    ->limit(5)
                    ->get();
    foreach($orders as $index=>$data){
       
        if($data->status==1)$completed[]=$data;
        else $pending[]=$data;
     }
   
      return view('user.profile.all_orders',compact('pending','completed','orders'));
  }
  
  public function withdraw_cards()
  {
      
     $res = DB::table('withdrawal_address')
            ->rightJoin('Address_type', 'withdrawal_address.address_type_id', '=', 'Address_type.id')
            ->where('withdrawal_address.user_id', Auth::user()->id)
            ->select('withdrawal_address.address', 'Address_type.type','withdrawal_address.id')
            ->get()
            ->Toarray();
            $tmp=[];
       foreach($res as $index=>$data)
       {
           $tmp[]=array(
               'address'=>$data->address,
               'type'   =>$data->type,
               'id'     =>$data->id);
           
       }
     
      return view('user.profile.Withdrawal_cards',compact('tmp'));
  
      
  }
  
        public function add_withdraw(Request $request)
       {
      $user=DB::table('withdrawal_address')->where('user_id',Auth::user()->id)->get(['address_type_id','address']);
      if(empty($user)){
          return redirect()->route('user.withdraw-method');
         }
       else{
        return redirect()->route('');
       }
      
      }
      
      public function add_withdraw_details(Request $request){
          $data=request()->all();
          User::where('id',Auth::user()->id)->update
          ([
              'name'=>$data['real_name'],
              'real_address'=>$data['real_address'],
              'phone'=>$data['phone']
           ]);
              
          DB::table('withdrawal_address')->where('user_id',Auth::user()->id)->insert([
                  'address_type_id'=>$data['network'],
                  'address'=>$data['network_address'],
                  'user_id'=>Auth::user()->id
                  ]);
         return redirect()->route('user.withdraw-method')->with('form_submit',1);
              
      }
      public function delete_card(Request $request){
          $id=$request->id;

       
          DB::table('withdrawal_address')->where('id',$id)->delete();
          return Response::json(['status'=>'success'],200);
      }
      
      
        public function invite()
        {
            if(empty(Auth::user()->id))
            return redirect()->route('login')->with('not_logged_in','Login To Access this page');
            $code=User::where('id',Auth::user()->id)->first('referral_code');
            $i_code=$code->referral_code;
            
            return view('user.profile.invite',compact('i_code'));
        }
        
        public function reset_password(Request $request){
            $password=$request->input('password');
            User::where('id',Auth::user()->id)->update(['password'=>Hash::make($password)]);
            return Response::json(array(
                'status'=>true,
                'message'=>'Password Updated Successfully'
                ));
            
        }
        
        public function info()
        {
            if(empty(Auth::user()->id))
            return redirect()->route('login')->with('not_logged_in','Login To Access this page');
            $u_name=User::where('id',Auth::user()->id)->first(['username','email']);
            $username=$u_name->username;
            $email=$u_name->email;
            return view('user.profile.info',compact('username','email'));
        }
  
  
  public function user_order()
  {   
       if(empty(Auth::user()->id))
         return redirect()->route('login')->with('not_logged_in','Login To Access this page');
         return view('user.order');
  }
     
     public function dashboard(){
          if(empty(Auth::user()->id))
         return redirect()->route('login')->with('not_logged_in','Login To Access this page');
         $refer=User::where('id',Auth::user()->id)->first('referral_code','username');
         $code=$refer['referral_code'];
         $user_name=User::where('id',Auth::user()->id)->first('username');
         $u_name=$user_name->username;
         $balance=Wallet::where('user_id',Auth::user()->id)->first('balance');
        
         
         $ubalance=$balance->balance ?? floatval(0.00);
        
         return view('user.profile.dashboard',compact('code','u_name','ubalance'));
     }
     
     
     public function showloginform()
     {
        return view('login');
    }
    public function team_page()
    {

        $user_id       = Auth::user()->id;
        $level_1_users = User::where('referred_by', $user_id)->get();
        //  $level_1_users = User::leftjoin('wallet_transactions','users.id','=','wallet_transactions.user_id')
        // ->where('referred_by', $user_id)
        // ->where('type', Transaction::DEPOSIT_PAYMENT)
        // ->where('type', Transaction::WITHDRAWL_PAYMENT)
        // ->where('status', Transaction::STATUS_COMPLETE)
        // ->select('users.*',DB::raw('SUM(CASE WHEN wallet_transactions.type = 1 THEN transactions.balance ELSE 0 END) as status_1_balance_sum'))
        // ->get();
        $level_1_ids   = self::getIDs($level_1_users);

        $level_2_users = User::whereIn('referred_by', $level_1_ids)->get();
        $level_2_ids   = self::getIDs($level_2_users);

        $level_3_users = User::whereIn('referred_by', $level_2_ids)->get();
        $level_3_ids   = self::getIDs($level_3_users);


        $network = [...[$user_id], ...$level_1_ids, ...$level_2_ids, ...$level_3_ids];
        $totalTransaction = Transaction::where('type', Transaction::DEPOSIT_PAYMENT)
            ->where('status', Transaction::STATUS_COMPLETE)
            ->whereIn('user_id', $network)->sum('amount');

        $todaysTransaction = Transaction::where('type', Transaction::DEPOSIT_PAYMENT)
            ->where('status', Transaction::STATUS_COMPLETE)
            ->whereIn('user_id', $network)->sum('amount');   
        
        $teamwithdrawal=Transaction::where('type', Transaction::WITHDRAWL_PAYMENT)
            ->where('status', Transaction::STATUS_COMPLETE)
            ->whereIn('user_id', $network)->sum('amount');   


        $totalNetwork = count($network);

        // dd($network, (int) $totalTransaction, (int) $todaysTransaction);

        return view('user.profile.team_report', compact('totalTransaction', 'todaysTransaction', 'totalNetwork', 'level_1_users', 'level_2_users', 'level_3_users','teamwithdrawal'));
    }
    
    
    public static function user_level($id)
    {
        $user_balance=Wallet::where('user_id',Auth::user()->id)->first('balance');
        $user_id       = Auth::user()->id;
        $level_1_users = User::where('referred_by', $user_id)->get();
        $level_1_ids   = self::getIDs($level_1_users);

        $level_2_users = User::whereIn('referred_by', $level_1_ids)->get();
        $level_2_ids   = self::getIDs($level_2_users);

        $level_3_users = User::whereIn('referred_by', $level_2_ids)->get();
        $level_3_ids   = self::getIDs($level_3_users);
        
        $network = [...[$user_id], ...$level_1_ids, ...$level_2_ids, ...$level_3_ids];
        if(count($network)>10 && $user_balance>int(200))
        {
            UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>1]);
        }
         if(count($network)>20 && $user_balance>int(300))
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        }
        if(count($network)>30 && $user_balance>int(400))
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        }
        if(count($network)>40 && $user_balance>int(500))
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        }
        if(count($network)>50 && $user_balance>int(600))
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        }
        if(count($network)>70 && $user_balance>int(700))
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        }
        
    }
    public function generate_order()
    {
       
      $user_balance=Wallet::where('user_id',Auth::user()->id)->first('balance');
      $last_balance=Wallet::where('user_id',Auth::user()->id)->where('updated_at','>=',Carbon::now()->subday(10))->first('balance');
    
      $user_parent=User::where('id',Auth::user()->id)->first('referred_by');
       
       
        $user_id       = Auth::user()->id;
        $level_1_users = User::where('referred_by', $user_id)->get();
        $level_1_ids   = self::getIDs($level_1_users);

        $level_2_users = User::whereIn('referred_by', $level_1_ids)->get();
        $level_2_ids   = self::getIDs($level_2_users);

        $level_3_users = User::whereIn('referred_by', $level_2_ids)->get();
        $level_3_ids   = self::getIDs($level_3_users);
        
        $network = [...[$user_id], ...$level_1_ids, ...$level_2_ids, ...$level_3_ids];
        if(count($level_1_users)>0 && $user_balance['balance']>100)
        {
           $user_level=  UserLevel:: where('user_id',Auth::user()->id)->update(
          ['level'=>1,
          'user_id'=>Auth::user()->id]);
         
        }
         
         if(count($level_1_users)>5 && $user_balance['balance']> 599)
        {
             UserLevel:: where('user_id',Auth::user()->id)->update(['level'=>2,
             'user_id'=>Auth::user()->id]);
            
        }
        if(count( $level_1_users)>12 && $user_balance['balance']>1999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>3,
             'user_id'=>Auth::user()->id]);
        }
        if(count($level_1_users)>20 && $user_balance['balance']>4999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>4]);
        }
        if(count($level_1_users)>50 && $user_balance['balance']>29999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>5]);
        }
        if(count($level_1_users)>80 && $user_balance['balance']>79999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>6]);
        }
        $level=UserLevel::where('user_id',Auth::user()->id)->first('level');
      
        
       
       if($level['level']==1){
           $commision_rate=intval(4);
           $order=45;
           $nt_commision=intval(4);
           }   
       if($level['level']==2){
           $commision_rate=floatval(4.5);
           $order=50;
           
       }
       if($level['level']==3){
           $commision_rate=intval(5);
           $order=55;
           
       }
       if($level['level']==4){
           $commision_rate=floatval(5.5);
           $order=60;
       }
       if($level['level']==5){
           $commision_rate=floatval(6.5);
           $order=70;
       }
       if($level['level']==6){
           $commision_rate=floatval(7.5);
           $order=70;
       }
      
      $count=intval(Order::where('user_id',Auth::user()->id)->where('created_at','>=',Carbon::now()->subday())->get()->count());
      $sum45Terms=$last_balance->balance*0.04;
      $firstTerm=0.3;
      $d = (2 * $sum45Terms - 45 * $firstTerm) / (45 * 44);
      
   
    //formula ends
      $total_grab_value=(Wallet::where('user_id',Auth::user()->id)->first('balance')->balance)*($commision_rate);
    //   if(intval((Order::where('user_id',Auth::user()->id)->latest()->first('status'))->status)==intval(1))
    //   {
    //   $per_grab_value=(Order::where('user_id',Auth::user()->id)->latest()->first('order_value'))->order_value;
    //   }
      if($count==intval(0)){
      $count=1;
      $per_grab_value= $firstTerm + (($count-1)*$d);
      }
      else  
      {
          $per_grab_value= $firstTerm + (($count-1)*$d);
          $per_grab_value=round($per_grab_value,2);
    }
    //   for($i=1;$i<45;$i++){
    //       $per_grab_value= $firstTerm + (($i-1)*$d);
    //       $user_balance->balance+=$per_grab_value;
        
    //   }
    //     dd($user_balance);
      $user_balance->balance+=$per_grab_value;
      $product=Product::where('id',rand(1,2))->first('id');
        Order::create([
                      'user_id'=>Auth::user()->id,
                      'order_value'=>$per_grab_value,
                      'product_id'=>$product->id
                    ]);
        $product_title=Product::where('id',$product->id)->first('name');
        $title=$product_title->name;
        $order_id=Order::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')
                    ->first('id');
        $o_id=$order_id->id;
        return Response::json([
          'status'=>'success',
          'order_id'=>$o_id,
          'user_id'=>$user_id,
          'order_value'=>$per_grab_value
          ],200);
        
    
}
     
     public function grabpage()
     {
          if(empty(Auth::user()->id))
         return redirect()->route('login')->with('not_logged_in','Login To Access this page');
        $user_balance=Wallet::where('user_id',Auth::user()->id)->first('balance');
        $user_id       = Auth::user()->id;
        $parent_1=User::where('id',Auth::user()->id)->first('referred_by');
        $parent_1_id=$parent_1->id ?? []; //id of first parent
        
        $parent_2=User::where('id',$parent_1_id)->first('id');
        $parent_2_id=$parent_2->id ?? [];//2nd parent id
        
        $parent_3=User::where('id',$parent_2_id)->first('id');
        $parent_3_id=$parent_3->id ?? [];//3rd parent id
        // if(Carbon::now()->adddays(1)>(Wallet::where('user_id',Auth::user()->id)->first('updated_at'))->updated_at){
        //       $last_balance=Wallet::whereIn('user_id',[$parent_1_id,$parent_2_id,$parent_3_id])->count('balance');
        // }
        // $last_balance=
        // $after_grab_balance=
        $user_id       = Auth::user()->id;
        $level_1_users = User::where('referred_by', $user_id)->get();
        $level_1_ids   = self::getIDs($level_1_users);

        $level_2_users = User::whereIn('referred_by', $level_1_ids)->get();
        $level_2_ids   = self::getIDs($level_2_users);

        $level_3_users = User::whereIn('referred_by', $level_2_ids)->get();
        $level_3_ids   = self::getIDs($level_3_users);
        
        $network = [...[$user_id], ...$level_1_ids, ...$level_2_ids, ...$level_3_ids];
        if(intval($user_balance->balance ?? '')  >intval(200))
        {
            UserLevel:: insert(['level'=>1,
            'user_id'=>Auth::user()->id]);
        }
         if(intval(count($network))>intval(20) && intval($user_balance->balance)>intval(300))
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        }
        // if(count($network)>30 && $user_balance>int(400))
        // {
        //      UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        // }
        // if(count($network)>40 && $user_balance>int(500))
        // {
        //      UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        // }
        // if(count($network)>50 && $user_balance>int(600))
        // {
        //      UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        // }
        // if(count($network)>70 && $user_balance>int(700))
        // {
        //      UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>2]);
        // }
       
         if(empty(UserLevel::where('user_id',Auth::user()->id)->first('level')))
            return redirect()->route('home')->with('not_allowed',1);
         if(empty(Auth::user()->id))
         return redirect()->route('login')->with('not_logged_in','Login To Access this page');
         $commision=Order::where('user_id',Auth::user()->id)->where('created_at','<=',Carbon::now())->where('status',1)->sum('order_value');
         $yseterday_commision= Order::where('user_id',Auth::user()->id)->where('created_at','<=',Carbon::now()->subday())->sum('order_value');
         $userbalance=Wallet::where('user_id',Auth::user()->id)->first('balance');  
         $balance=$userbalance->balance ?? '';
         $order_completed=Order::where('user_id',Auth::user()->id)->where('status',1)->count();
         $order_cancelled=Order::where('user_id',Auth::user()->id)->where('status',0)->count();
         
       
      
        $user_id       = Auth::user()->id;
        $level_1_users = User::where('referred_by', $user_id)->get();
        $level_1_ids   = self::getIDs($level_1_users);

        $level_2_users = User::whereIn('referred_by', $level_1_ids)->get();
        $level_2_ids   = self::getIDs($level_2_users);

        $level_3_users = User::whereIn('referred_by', $level_2_ids)->get();
        $level_3_ids   = self::getIDs($level_3_users);


        $network = [...[$user_id], ...$level_1_ids, ...$level_2_ids, ...$level_3_ids];
       
      return view('user.Commision',compact('commision','yseterday_commision','balance','order_completed','order_cancelled'));
       }
       
       public function grab_value(Request $request)
       {
    
        $user_balance=Wallet::where('user_id',Auth::user()->id)->first('balance');
     
      
        $order_id=$request->input('order_id');
        $order_value=$request->input('order_value');
        $user_id=$request->input('user_id');
        $button_value=$request->input('submit');
        if(intval($button_value)==1)
        Order::where('id',$order_id)->update(['status'=>1]);
        else 
         return redirect()->route('user.grab.page')->with('order_cancel','You cancelled your last order');
        $user_id       = Auth::user()->id;
        $parent_1=User::where('id',Auth::user()->id)->first('referred_by');
        $parent_1_id=$parent_1->id ?? []; //id of first parent
        
        $parent_2=User::where('id',$parent_1_id)->first('id');
        $parent_2_id=$parent_2->id ?? [];//2nd parent id
        
        $parent_3=User::where('id',$parent_2_id)->first('id');
        $parent_3_id=$parent_3->id ?? [];//3rd parent id
        
        $level_1_users = User::where('referred_by', $user_id)->get();
        $level_1_ids   = self::getIDs($level_1_users);

        $level_2_users = User::whereIn('referred_by', $level_1_ids)->get();
        $level_2_ids   = self::getIDs($level_2_users);

        $level_3_users = User::whereIn('referred_by', $level_2_ids)->get();
        $level_3_ids   = self::getIDs($level_3_users);


        $network = [...[$user_id], ...$level_1_ids, ...$level_2_ids, ...$level_3_ids];
        if(count($level_1_users)>0 && $user_balance['balance']>100)
        {
           $user_level=  UserLevel:: where('user_id',Auth::user()->id)->update(
          ['level'=>1,
          'user_id'=>Auth::user()->id]);
         
        }
         
        
         if(count($level_1_users)>5 && $user_balance['balance']> 599)
        {
             UserLevel:: where('user_id',Auth::user()->id)->update(['level'=>2,
             'user_id'=>Auth::user()->id]);
            
        }
        if(count( $level_1_users)>12 && $user_balance['balance']>1999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>3,
             'user_id'=>Auth::user()->id]);
        }
        if(count($level_1_users)>20 && $user_balance['balance']>4999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>4]);
        }
        if(count($level_1_users)>50 && $user_balance['balance']>29999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>5]);
        }
        if(count($level_1_users)>80 && $user_balance['balance']>79999)
        {
             UserLevel:: where('user_id',Auth::user()->id)->insert(['level'=>6]);
        }
        $level=UserLevel::where('user_id',Auth::user()->id)->first('level');
       
       if($level['level']==1){
           $commision_rate=intval(4);
           $order=45;
           $nt_commision=intval(4);
           $l1_user_com=intval(18);
           $l2_user_com=intval(9);
           $l3_user_com=intval(4);
           }   
       if($level['level']==2){
           $commision_rate=floatval(4.5);
           $order=50;
           $l1_user_com=intval(18);
           $l2_user_com=intval(9);
           $l3_user_com=intval(4);
           
       }
       if($level['level']==3){
           $commision_rate=intval(5);
           $order=55;
           $l1_user_com=intval(18);
           $l2_user_com=intval(9);
           $l3_user_com=intval(4);
           
           
       }
       if($level['level']==4){
           $commision_rate=floatval(5.5);
           $order=60;
       }
       if($level['level']==5){
           $commision_rate=floatval(6.5);
           $order=70;
       }
       if($level['level']==6){
           $commision_rate=floatval(7.5);
           $order=70;
       }
      
      
     
     
      $order_status=Order::where('id',$order_id)->first('status');
      $status=$order_status->status;
      $user_balance->balance+=$order_value;
     
          if(intval(count(Order::where('user_id',Auth::user()->id)->where('created_at','>=',Carbon::now()->subday())->get()))<=intval($order))
          {     if($status==1)
                 {
                Wallet::where('user_id',Auth::user()->id)->update(['balance'=>$user_balance->balance]);
                Wallet::whereIn('user_id',$parent_1_id)->increment('balance',$order_value*($l1_user_com/100) ?? '');
                Wallet::whereIn('user_id',$parent_2_id)->increment('balance',$order_value*($l2_user_com/100) ?? '')  ;
                Wallet::whereIn('user_id',$parent_3_id)->increment('balance',$order_value*($l3_user_com/100) ?? '');
                return redirect()->route('user.grab.page')->with('hide_popup',1);
                }
                
                
          }
          else{
              return redirect()->route('user.grab.page')->with('order_limit',1);
              
          }
    
      
     }

    public static function getIDs($users)
    {
        $ids    = [];
        foreach ($users as  $user) $ids[] = $user->id;
        return $ids;
    }



    public function plans()
    {
        $list = UserPlan::where('user_id', Auth::user()->id)->get()->groupBy('plan_id')->toArray();
        $plans = Plan::where('status', Plan::ACTIVE)->whereIn('id', array_keys($list))->get();
        foreach ($plans as $key => $plan)
            $plans[$key]->total = count($list[$plan->id] ?? []);

        return view('user.plan.index', compact('plans'));
    }

    public function profile()
    {
        $user   = Auth::user();
        $wallet = Auth::user()->wallet();
        $user_balance=Wallet::where('user_id',Auth::user()->id)->select('balance')->get();
       $balance=$user_balance[0]->balance;
       $phone=User::where('id',Auth::user()->id)->select('phone')->first();
       $uphone=$phone[0];
       $uphone=$phone->phone;
       $income=0;
       $assets=$balance + $income;
       
      

        return view('user.profile.index', compact('user', 'wallet','balance','assets','uphone'));
    }

 public function login(Request $request)
{
    $credentials = $request->only('email', 'password');
  
  
    
    
    if (Auth::attempt($credentials)) {
        // Authentication passed
        
       return redirect()->route('admin.dashboard');
    }
    
    // Authentication failed
      return response()->json(['success' => false]);
}

  public function registerform(){
      return view('register');
  }

    public function editProfile()
    {
        $user   = Auth::user();

        return view('user.profile.edit', compact('user'));
    }

    public function editProfileSave(Request $request)
    {
        if ($request->email != Auth::user()->email && User::where('email', $request->email)->count() > 0) return redirect()->back()->with('error', 'Email already used');

        User::where('id', Auth::user()->id)->update(array(
            'email' => $request->email,
            'name'  => $request->name,
        ));
        return redirect()->route('profile');
    }

    public function editBank()
    {
        $wallet = Auth::user()->wallet();
        return view('user.profile.bank', compact('wallet'));
    }

    public function editBankSave(Request $request)
    {
        $wallet = Auth::user()->wallet();
        if ($wallet->account_number != $request->account_number && Wallet::where('account_number', $request->account_number)->count() > 0) return redirect()->back()->with('error', 'Account already used');

        $wallet->account_number      = $request->account_number;
        $wallet->ifsc_code           = $request->ifsc_code;
        $wallet->account_holder_name = $request->account_holder_name;
        $wallet->save();

        return redirect()->route('profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
