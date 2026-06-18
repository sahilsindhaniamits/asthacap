<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller{
    
    public function settings(Request $request)
    {
      $data=$request->all();
      Setting::Create(['binance_address'=>$data['address']]);
      return redirect()->route('admin.setting')->with('success','Setting created successfully');
    }
    
    public function index(){
        return view('admin.setting.create');
        
    }
    
  
    
    
    
}