<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

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
            if(Auth::user()->role == 'employee'){
                Application::create($request->all());
                toastr()->success('Your application has been sent, please check it in Profile','Success');
                return redirect()->back();
            }else{              
                toastr()->error('You cant apply for a job if you are not an employee');
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
}
