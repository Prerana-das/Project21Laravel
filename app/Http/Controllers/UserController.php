<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    // public function scholars_video (){ 
    //     // \Log::info($id);
    //     $video = Video::orderBy('id', 'desc')->get();
    //     return view('scholars_video ')->with(['video'=>$video]);  
    // }
    public function login(Request $request){
        if((User::where('email',$request->email)->count())==0){
            return redirect()->back()->with('alert_message',"Email doesn't exist!");
        }
        if((User::where('email',$request->email)->where('isActive',1)->count())==0){
            $usertoken = rand(100000,999999);
            $token['token'] = Hash::make($usertoken);
            User::where('email',$request->email)->update(['email_verification' => $token['token']]);
            $url = env('APP_URL');
            $msg['url'] = $url.'/verification?verify='.$token['token']; 
            $from_address = env('MAIL_FROM_ADDRESS');
            $mail =  Mail::send('email/verification', $msg, function ($message ) use ($request,$from_address) {
                $message->from($from_address, 'Verify Account');
                $message->to($request->email)->subject('Account Verification');
            });
            return redirect()->back()->with('alert_message',"Please activate your account!");
        }
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            $user = Auth::user();
            return redirect("/");
        }
        else{
            return redirect()->back()->with('alert_message',"Password doen't match!");
        }
    }

    public function verification_view(Request $request){
        $key = $request->verify;
        $user = User::where('email_verification', $key)->update(['isActive' => 1]);
        if($user){
            return redirect("/login")->with('message',"Your acount is verified. Please login!");
        }
        return redirect("/register")->with('alert_message',"You have some error with your email!");   
    }

    public function loginCheck(Request $request){
        if(!Auth::check()){
            return redirect()->back()->with('alert_message',"Password cann't be null");
        } 
        else{
            return redirect()->back()->with('success'," cann't be null");
        } 
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


    public function register(Request $request){

        $data = $request->all();
        if(!$request->name){
            return redirect()->back()->with('alert_message',"Name cann't be null");
        }
        if(!$request->email){
            return redirect()->back()->with('alert_message',"Email cann't be null");
        }
        if(!$request->address){
            return redirect()->back()->with('alert_message',"Address number cann't be null");
        }
        if(!$request->password){
            return redirect()->back()->with('alert_message',"Password cann't be null");
        }
        $data['password']=Hash::make($data['password']);
        $usertoken = rand(100000,999999);
        $token['token'] = Hash::make($usertoken);
        $data['email_verification'] = $token['token'];
          \Log::info($token['token']);
        $userCreate = User::create($data);
        $url = env('APP_URL');
        $msg['url'] = $url.'/verification?verify='.$token['token']; 
        $from_address = env('MAIL_FROM_ADDRESS');
        if($userCreate)
        {
           $mail =  Mail::send('email/verification', $msg, function ($message ) use ($request,$from_address) {
                $message->from($from_address, 'Verify Account');
                $message->to($request->email)->subject('Account Verification');
            });

        }
        return redirect()->back()->with('message',"An activation link is sent to your email. Please Check!");
    }




}
