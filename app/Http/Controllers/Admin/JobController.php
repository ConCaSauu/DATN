<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;
use App\Models\Category;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();       
        return view('admin.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $categories = Category::all();
        return view('admin.job.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try{
            Job::create($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('job.index');
        }catch(Exception){
            toastr()->error('Something wrong! Please try again.','Error');
            return redirect()->back();
        }
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
        
        $job = Job::find($id);
        return view('admin.job.edit',compact('job',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        
        try{
            $job->update($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('job.index');
        }catch(Exception){
            toastr()->error('Cannot update! Please try again.','Error');
            return redirect()->back();    
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        
        try{
            $job->delete();
            toastr()->success('Successful','Congrats');
            return redirect()->route('job.index');
        }catch(Exception){
            toastr()->error('Cannot delete! Please try again.','Error');
            return redirect()->back();
        }
    }
    public function job_detail(string $id){
        $job = Job::find($id);
        $jobs = Job::where('cid',$job->cid)->orderBy('level','desc')->limit(6)->get();
        $num = 1;
        $user = User::find($job->ucid);
        
        return view('fe.job.jobDetail', compact('job','user','num','jobs'));
    }
    public function job_search(Request $request){
        $key = $request->search;
        $jobs = Job::where('name', 'LIKE', '%'.$key.'%')->get();
        return view('fe.jobIndex',compact('jobs'));
    }
    public function lockJob(Job $item){
        try{
            $item->update([
                'status' => 'lock'
            ]);
            $item->save();
            return redirect()->back();
        }catch(Exception $e){
            Log::error("Error: ".$e->getMessage());
            toastr()->error('Something wrong please try again.');
            return redirect()->back();
        }
            
    }
    public function unlockJob(Job $item){
        try{
            $item->update([
                'status' => 'active'
            ]);
            $item->save();
            toastr()->success('Job has been unlocked.');
            return redirect()->back();
        }catch(Exception $e){
            Log::error("Error: ".$e->getMessage());
            toastr()->error('Something wrong please try again.');
            return redirect()->back();
        }
            
    }
    public function acceptJob(Job $item){
        try{
            $item->update([
                'status' => 'active'
            ]);
            $item->save();
            toastr()->success('Job has been accepted.');
            return redirect()->back();
        }catch(Exception $e){
            Log::error("Error: ".$e->getMessage());
            toastr()->error('Something wrong please try again.');
            return redirect()->back();
        }
            
    }
    public function upgradeJob(Job $job){
        try{
            $job->update([
                'exp_level' => Carbon::now()->addDays(7),
            ]);
            $job->save();
            toastr()->success('Job has been accepted.');
            return redirect()->back();
        }catch(Exception $e){
            Log::error("Error: ".$e->getMessage());
            toastr()->error('Something wrong please try again.');
            return redirect()->back();
        }
            
    }
}
