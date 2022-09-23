<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Mail\ResetPassword;

class PasswordResetController extends Controller
{
    public function create()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request){
        $email=$request->email;
        $validated=Validator::make($request->all(),[
            'email'=>['required','string','email','max:255']
        ]);

        if($validated->fails()){
            return new JsonResponse([
                'success'=>false,
                'massage'=>$validated->errors()
            ],422);
        }

        $user=User::where('email',$email);

        if($user->exists()){
            $verify=DB::table('password_resets')->where('email',$email);
            if($verify->exists()){
                $verify->delete();
            }
            $token=Str::random(6);
            $passwordRest=DB::table('password_resets')->insert([
                'email'=>$email,
                'token'=>$token,
                'created_at'=>Carbon::now()
            ]);
            if($passwordRest){
                Mail::to($email)->send(new ResetPassword($token));
                session(['email'=>$email]);
                return redirect(route('auth.reset-password'));
//                return new JsonResponse(
//                    [
//                        'success' => true,
//                        'message' => "Please check your email for a 6 digit pin"
//                    ],
//                    200
//                );
            }
        }else{
            return new JsonResponse([
                'succuss'=>false,
                'massage'=>"This email doesn't exists"
            ],400);
        }
    }


}
