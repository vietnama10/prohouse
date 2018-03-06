<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    //
    public function getAdminLogin(){
        if(Auth::check()){
            return redirect('admin_1a1u');
        }else{
            return view('admin.pages.login');
        }
        
    }

    public function checkAdminLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:5|max:32'
        ],[
            'email.required'=>'Please enter your email',
            'password.required'=>'Please enter your password'
        ]);
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect('admin_1a1u');
        }else{
            return redirect('admin_1a1u/login')->with('error-message','Login fail!');
        }
    }

    public function LogOut(){
        Auth::logout();
        return redirect('admin_1a1u/login');
    }
}
