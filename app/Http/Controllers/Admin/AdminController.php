<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function post_login(Request $request){
        
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            
            if(Auth::user()->role == 'admin'){
                toastr('Successful !','success');
                return view('admin.index');
            }else{
                return redirect()->route('admin_login')->with('warning','You dont have permission');
            }
        
        }else{
            // toastr('Failed to login! Please try again','danger');
            return redirect()->back()->with('error','Failed to login! Please try again');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
