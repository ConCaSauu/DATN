<?php

namespace App\Http\Controllers\Admin;

use App\Mail\ApplicationNotificationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use finfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function createAPL(Request $request){
        // dd($request->all());
        if(Auth::check()){
            if(Auth::user()->cv_id)
                if(Auth::user()->role == 'employee'){
                    if(Application::where([
                        ['uid', Auth::user()->id],
                        ['status', 'pending'],
                        ['jid', $request->jid]
                    ])->exists()) {
                        toastr()->info('You have applied for this job! The recruiter will get back to you soon.','Information');
                        return redirect()->back();
                    }
                    $application = Application::create($request->all());
                    $company = User::find($application->ucid);
                    Mail::to($company->email)->send(new ApplicationNotificationMail($application,$company));
                    toastr()->success('Your application has been sent, please check it in Profile','Success');
                    return redirect()->back();
                }else{              
                    toastr()->error('You cant apply for a job. Permission denied');
                    return redirect()->back();
                }
            else{
                toastr()->error('Dont forget to complete your CV in your Profile before you start applying!');
                return redirect()->back();
            }
        }else{
            toastr()->info('You have to login before send an application','Notification');
            return redirect()->route('login');                    
        }
    }
    public function cancelApl( string $id){
        $apl = Application::find($id);
        try{
            $apl->status = 'canceled';
            $apl->save();
            toastr()->success('Updated','Success');
            return redirect()->route('profile');            
        }catch(\Exception){
            toastr()->error('Failed to update','Error');
            return redirect()->route('profile');
        }

    }
    public function approveApl( string $id){
        $apl = Application::find($id);
        try{
            $apl->status = 'approved';
            $apl->save();
            toastr()->success('Updated','Success');
            return redirect()->route('profile');            
        }catch(\Exception $e){
            toastr()->error('Failed to update','Error');
            Log::error('Approval error: ' . $e->getMessage());
            return redirect()->route('profile');
        }

    }
    public function rejectApl( string $id){
        $apl = Application::find($id);
        try{
            $apl->status = 'rejected';
            $apl->save();
            toastr()->success('Updated','Success');
            return redirect()->route('profile');            
        }catch(\Exception){
            toastr()->error('Failed to update','Error');
            return redirect()->route('profile');
        }

    }
}
