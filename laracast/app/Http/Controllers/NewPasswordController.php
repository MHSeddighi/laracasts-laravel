<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class NewPasswordController extends Controller
{
    function resetPassword(Request $request){
        $email=$request->session()->get('email');
        $validator=Validator::make($request->all(),[
                'token'=>['required']
        ]);
        if($validator->fails()){
            return new JsonResponse([
                'success'=>false,'massage'=>$validator->errors()],422);
        }else{
            $record=DB::table('password_resets')->where([
                'email'=>$email,
                'token'=>$request->token
            ]);

            if($record->exists()){
                $time=Carbon::now()->diffInSeconds($record->first()->created_at);
                if($time>3600){
                    return new JsonResponse(['success' => false, 'message' => "Token Expired"], 400);
                }
                $record->delete();
                return redirect(route('auth.new-password'));
            }else{
                return new JsonResponse(
                    [
                        'success' => false,
                        'message' => "Invalid token"
                    ],
                    401
                );
            }
        }
    }


    public function newPassword(Request $request){
        $email=$request->session()->get('email');
        $validator=Validator::make($request->all(),[
            'password'=>['required',Password::default(),'confirmed']
        ]);

        if(!$validator->fails()){
            $user=User::where('email',$email)->first();
            $user->password=Hash::make($request->password);
            $user->save();
            return redirect(route('home'));
        }else{
            return new JsonResponse([
                'succuss'=>false,
                'massage'=>$validator->errors()
            ],400);
        }

    }
}
