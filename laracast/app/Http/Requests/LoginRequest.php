<?php

namespace App\Http\Requests;

use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'=> 'required|string',
            'password'=> 'required|min:8'
        ];
    }

    public function authenticate(){
        if(Auth::attempt(['username'=>$this->username,'password'=>$this->password],$this->boolean('remember'))){
            $this->session()->regenerate();
            return redirect(url()->previous());
        }
        
        return back()->withErrors([
            'username'=> __('auth.failed'),
        ])->onlyInput('username');
    }
}
