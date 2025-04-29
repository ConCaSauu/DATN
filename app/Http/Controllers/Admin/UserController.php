<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cv;
use App\Models\Image;
use App\Models\Job;
use Flasher\Prime\Notification\Notification;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\VerifyAccount;
use App\Models\Category;
use App\Models\Password_reset_token;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
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
        $request->merge(['password'=>Hash::make($request->password)]);
        try{           
            if($user = User::create($request->all())){
                Mail::to($user->email)->send(new VerifyAccount($user));
                return redirect(route('home'))->with('info','Account has been created. Please check your email to verify account.');
            };
            return redirect()->back()->with('error','Something wrong. Please try again.');
        }catch(\Throwable $th){
            dd($th);
        }
        
    }
    public function verify_account($email){
        $user = User::where('email', $email)->whereNull('email_verified_at')->firstOrFail();
        User::where('email', $email)->update(['email_verified_at' => Carbon::now()]);
        return redirect()->route('login')->with('success','Verify successfully. You can login now.');
    }
    public function updatePro(Request $request, User $user){
            // dd($user);

            // $validatedData = $request->validate([
            //     'phone_number' => 'required|regex:/^0?[0-9]{7,10}$/',
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|email|max:255',
            //     'address' => 'required|string|max:255',
            //     'gender' => 'required|boolean'
            // ]);
            if($request->file){
                $logo = $request->file;
                $fileName = pathinfo($logo->getClientOriginalName(), PATHINFO_FILENAME);
                $extension1 = $logo->getClientOriginalExtension();
                $rand = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
                $newName = $fileName.'_'. $rand . '.' . $extension1;
                $destinationPath = public_path('upload/images');

                $logo->move($destinationPath, $newName);
                $request->merge(['logo'=> $newName]);
            }
            
            if($request->new_password){
                if(Hash::check($request->current_password, $user->password)){
                    $request->merge([
                        'password'=>Hash::make($request->new_password)
                    ]);
                }else{
                    toastr()->warning('Current password is incorrect','Error');
                    return redirect()->back();
                }
                
            }
            
            try{
                $user->update($request->all());
                

                if ($request->hasFile('images')) {
                    foreach ($request->images as $image) {
                        $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                        $extension = $image->getClientOriginalExtension();
                        $randomNumber = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
                        $newFileName = $originalName . '_' . $randomNumber . '.' . $extension;
                        
                        $image->move($destinationPath, $newFileName);
                        Image::create([
                            'uid' => $user->id,
                            'img' => $newFileName,
                        ]);
                    }

                }    
                    toastr()->success('Successful','Congrats');
                    return redirect()->route('profile');
  
            }catch(\Exception){
                toastr()->error('Cannot update! Please try again.','Error');
                return redirect()->route('profile');  
            }

    }
    public function post_login(Request $request){
        
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password,])){
            if(Auth::user()->email_verified_at){
                toastr()->success('Successful','Notification');
                return redirect()->route('home');
            }else{
                Auth::logout();
                return redirect()->route('login')->with('info','Your account was not verified! Please check your eamail.');
            }
                       
        }else{
            toastr()->error('Failed to login','Warning');
            return redirect()->back();         
        }
    }
    public function profile(){
        // $user = User::find($id);
        
        // if(Auth::check()){
        //     if(Auth::user()->role == 'employee'){
        //         $applications = Application::where('uid', Auth::user()->id)->get();
        //     }else{
        //         $applications = Application::where('ucid', Auth::user()->id)->get();
        //     }

        //     if(Auth::user()->role == 'company' || Auth::user()->role == 'admin'){
        //         $applications = Application::where('ucid', Auth::user()->id)->get();
        //         $jobs = Job::where('ucid', Auth::user()->id)->get();
        //         return view('fe.profile.profileIndex',compact('applications','jobs'));
        //     }else{
        //         $applications = Application::where('uid', Auth::user()->id)->get();
        //         // dd($jobs);
        //         $cv = Cv::find(Auth::user()->cv_id);
        //         // dd($cv);
        //         return view('fe.profile.profileIndex',compact('cv','applications'));
        //     }
        // }else{
        //     return redirect(route('login'));
        // }
        if(Auth::check()){
            return view('fe.profile.profileIndex');

        }else{
            return redirect()->route('login');
        }    

    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }   
    public function updateCV(Request $request, $id){
        // dd($request->all());
        $user = User::find($id);
        try{
            $cvId = $user->cv_id;
            $cv = Cv::find($cvId);

            if ($request->image) {
                
                    $avatar = $request->image;
                    $originalName = pathinfo($avatar->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $avatar->getClientOriginalExtension();
                    $randomNumber = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
                    $newFileName = $originalName . '_' . $randomNumber . '.' . $extension;
                    
                    // Thay đổi địa chỉ lưu ảnh
                    $destinationPath = public_path('upload/images'); // Đường dẫn đến thư mục bạn muốn lưu

                    // Di chuyển tệp đến thư mục đích
                    $avatar->move($destinationPath, $newFileName);
                    
                $request->merge(['avatar'=> $newFileName]);
                
            }
            $cv->update($request->all());
            toastr()->success('CV updated','Success');
            return redirect(route('profile'));
        }catch(\Exception){
            toastr()->error('Failed to update','Error');
            return redirect()->back();
    
        }
    }
    public function createCv(Request $request, $id){
        $user = User::find($id);
        
        try{
            $cv = Cv::create($request->all());
        
            $user->cv_id = $cv->id;
            $user->save();
            // $user->update([
            //     'cv_id' => $cv->id,
            // ]);
            // dd($user->cv_id);
            toastr()->success('CV created','Success');
            return redirect(route('profile'));        
        }catch(\Exception){
            toastr()->error('Failed to update2','Error');
            return redirect()->back();
        }
    }
    public function account() {
        $user = Auth::user();
        return view('fe.profile.account',compact('user'))->render();
    }
    public function jobCreate() {
        $categories = Category::all();
        return view('fe.profile.jobCreate',compact('categories'));
    }
    public function jobStore(Request $request){
        // dd($request->all());
        try{
            Job::create($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('profile');
        }catch(\Exception){
            toastr()->error('Something wrong! Please try again.','Error');
            return redirect()->route('profile');
        }
    }
    public function jobEdit(string $id){
        $job = Job::find($id);
        $categories = Category::all();
        return view('fe.profile.jobEdit',compact('job','categories'));
    }
    public function jobUpdate(Request $request, Job $job)
    {  
        try{
            $job->update($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('profile');
        }catch(\Exception){
            toastr()->error('Cannot update! Please try again.','Error');
            return redirect()->back();    
        }
    }
    public function jobIndex() {
        if($jobs = Job::where('ucid', Auth::user()->id)->get()){
            
            return view('fe.profile.jobIndex', compact('jobs'));
        };
        return view('fe.profile.jobIndex');
    }
    public function application() {
        if(Auth::user()->role == 'employee'){
            $applications = Application::where('uid', Auth::user()->id)->get();
        }else{
            $applications = Application::where('ucid', Auth::user()->id)->get();
        }
        return view('fe.profile.application',compact('applications'))->render();
    }
    public function cv() {
        
        if($id = Auth::user()->cv_id){
            $cv = Cv::find($id);
            return view('fe.profile.cv',compact('cv'))->render();
        };
        return view('fe.profile.cv')->render();
    }
    public function buyCoin() {
        return view('fe.profile.buyCoin')->render();
    }
    public function changePass() {
        return view('fe.profile.changePass')->render();
    }
    public function vnpay_payment(Request $request){
        $data = $request->all();
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://127.0.0.1:8000/profile/buyCoin";
        $vnp_TmnCode = "1VYBIYQP"; //Mã định danh merchant kết nối (Terminal Id)
        $vnp_HashSecret = "NOH6MBGNLQL9O9OMMFMZ2AX8NIEP50W1"; //Secret key
        $vnp_TxnRef = rand(1,10000); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $data['total_vnpay'] * 100;
        $vnp_Locale = 'vn';
        // $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        $returnData = array(
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        
    }
    public function forgot_password(){
        return view('fe.forgotPassword');
    }

    public function check_forgot_password(Request $request){
        // dd($request);
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ],[
            'email.required' => 'Please enter email.',
            'email.email' => 'Email is incorrect.',
            'email.exists' => 'Your email is not exists in our system.'
        ]);
        $user = User::where('email', $request->email)->first();
        $token = Str::random(63);
        $tokenData = [
            'email' => $request->email,
            'token' => $token,
        ];

        if(Password_reset_token::create($tokenData)){
            try {
                Mail::to($request->email)->send(new ForgotPassword($user, $token));
                toastr()->success('Please check your email to continue','Success');
                return redirect()->back();
            } catch (\Exception $e) {
                Log::error('Password reset email failed: '.$e->getMessage());
                toastr()->error('Failed to send email. Please try again later.','Error');
                return redirect()->back();
            }
        }
        toastr()->error('Please try again','Error');
        return redirect()->back();
    }
    public function reset_password($token){
        $tokenData = Password_reset_token::where('token', $token)->firstOrFail();  
        return view('fe.resetPassword');
    }
    public function check_reset_password(Request $request, $token){
        
        $request->validate([
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password'
        ],[
            'password.required' => 'Please enter your password',
            'password.min' => 'Your password is too short',
            'confirm-password.required' => 'Confirm your password',
            'confirm-password.same' => 'Your password is not correct'
        ]);
        
        $tokenData = Password_reset_token::where('token', $token)->firstOrFail();
        $user = $tokenData->user;

        $check = $user->update([
            'password' => Hash::make($request->password)
        ]);
        
        if($check){
            toastr()->success('Update Successfull','Your password has been changed');
            return redirect()->route('home');
        }
        toastr()->error('Error','Failed to update, please try again');
        return redirect()->back();
    }
}
