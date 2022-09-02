<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function storeRegister(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirm = $request->confirm;
        if($password != $confirm){
            return redirect()->back()->with('error','Password mismatch');
        }
        else{
            $obj = new User;
            $obj->name=$name;
            $obj->email=$email;
            $obj->password=md5($password);
            $obj->role='Student';
            if($obj->save()){
                return redirect()->back()->with('success','Account created. Waiting for admin approve');
            }
        }
       
    }
    public function storeLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email','=',$email)
                ->where('password','=', md5($password))
                ->first();
        if($user){
            if($user->active == 0){
                return redirect()->back()->with('info','Account not approved yet');
            }
            else{
                $request->session()->put('username',$user->name);
                $request->session()->put('userrole',$user->role);
                return redirect('dashboard');
            }
        }
        else{
            return redirect()->back()->with('info','Password do not match');
        }

      
    }
    public function dashboard(){
        return view('auth.dashboard');
    }
}
