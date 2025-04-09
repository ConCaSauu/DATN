<?php

namespace App\Http\Controllers;

use App\Mail\VerifyAccount;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Flasher\Prime\Notification\Notification;
use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function login(){
        return view('fe.login');
    }

    public function Uregister(){
        return view('fe.Uregister');
    }
    public function UCregister(){
        return view('fe.UCregister');
    }
    public function createUser(Request $request){
        //add image
        // $get_image = $request->avatar;
        // $path = 'upload/images/';
        // $get_name_image = $get_image->getClientOriginalName();
        // $name_image = current(explode('.',$get_name_image));
        // $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
        // $get_image->move($path,$new_image);

        // $request->avatar = $new_image;
        // dd($request->all());
        $request->merge(['password'=>Hash::make($request->password)]);
        try{           
            if($user = User::create($request->all())){
                Mail::to($user->email)->send(new VerifyAccount($user));
                dd('ok');
            };
            dd('wrong');
        }catch(\Throwable $th){
            dd($th);
        }
        return redirect(route('login'));
    }
    public function updatePro(Request $request, $id){
        // dd($request->all());
        if(Auth::user()->id == $id){
            
            $validatedData = $request->validate([
                'phone_number' => 'required|digits_between:8-11|numberic',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',
                'birthday' => 'required'
            ]);
            
            try{
                $user = User::find($id);
                $user->update($validatedData);
                toastr()->success('Successful','Congrats');
                // return redirect()->back();
            }catch(Exception){
                toastr()->error('Cannot update! Please try again.','Error');
                // return redirect()->back();    
            }
        }else{
            return redirect()->back();
        }
    }
    public function post_login(Request $request){
        dd($request->all());
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password,])){
            toastr()->success('Successful','Notification');
            return redirect()->route('home');           
        }else{
            toastr()->error('Failed to login','Warning');
            return redirect()->back();         
        }
    }
    public function profile(){
        // $user = User::find($id);
        if(Auth::check()){
            return view('fe.profile');
        }else{
            return redirect(route('login'));
        }
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
