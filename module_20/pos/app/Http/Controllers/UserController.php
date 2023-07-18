<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    function LoginPage():View{
        return view('pages.auth.login-page');
    }
    function RegistrationPage():View{
        return view('pages.auth.registration-page');
    }
    function SendOtpPage():View{
        return view('pages.auth.send-otp-page');
    }
    function VerifyOTPPage():View{
        return view('pages.auth.verify-otp-page');
    }
    function ResetPasswordPage():View{
        return view('pages.auth.reset-pass-page');
    }





    function UserRegistration(Request $request){
        try{
            User::create([
                'firstName'=>$request->input('firstName'),
                'lastName'=>$request->input('lastName'),
                'email'=>$request->input('email'),
                'mobile'=>$request->input('mobile'),
                'password'=>$request->input('password'),

            ]);

            return response()->json([
                'status'=>'success',
                'message'=>'User Registration successfull'
            ],'200');
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'User Registration failed'
            ],'401');
        }
    }

    function UserLogin(Request $request){
        $count= User::where('email','=',$request->input('email'))
        ->where('password','=',$request->input('password'))
        ->count() ;

        if($count==1){

            $token = JWTToken::CreateToken($request->input('email'));
            return response()->json([
                'status'=>'success',
                'message'=>'User Registration successfull',
                // 'token'=>$token
            ],'200')->cookie('token',$token,60*60*24);
        }
        else{
            return response()->json([
                'status'=>'failed',
                'message'=>'Unauthorize'
            ],'401');
        }
    }


    function SendOTPCode(Request $request){
        $email= $request->input('email');
        $otp = rand(1000,9999);
        $count= User::where('email','=',$request->input('email'))
        ->count() ;


        if($count==1){
            Mail::to($email)->send(new OTPMail($otp));
            User::where('email','=',$email)->update(['otp'=>$otp]);

            return response()->json([
                'status'=>'success',
                'message'=>'4 disit otp code has been send to your email !',

            ],'200');
        }
        else{
            return response()->json([
                'status'=>'failed',
                'message'=>'Unauthorize'
            ],'401');
        }

    }
    function VerifyOTP(Request $request){
        $email= $request->input('email');
        $otp = $request->input('otp');
        $count=User::where('email','=',$email)->where('otp','=',$otp)
        ->count() ;


        if($count==1){
            //database OTP Update

            User::where('email','=',$email)->update(['otp'=>'0']);

            //password reset token issue
            $token = JWTToken::CreateTokenForSetPassword($request->input('email'));

            return response()->json([
                'status'=>'success',
                'message'=>'OTP verification successful',
                // 'token'=>$token

            ],'200')->cookie('token',$token,60*60*24);;
        }
        else{
            return response()->json([
                'status'=>'failed',
                'message'=>'Unauthorize'
            ],'401');
        }

    }

    function ResetPassword(Request $request){
        try{
            $email = $request->header('email');
            $password = $request->input('password');
            User::where('email','=',$email)->update(['password'=>$password]);
            return response()->json([
                'status'=>'success',
                'message'=>'Request successful',


            ],'200');
        }
        catch(Exception $exception){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong'
            ],'401');

        }

    }
}
