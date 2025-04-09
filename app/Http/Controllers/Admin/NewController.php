<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.new.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.new.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try{
            News::create($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('new.index');
        }catch(\Exception){
            toastr()->error('Something wrong! Please try again.','Error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new = News::find($id);
        return view('admin.new.edit',compact('new',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $new)
    {
        try{
            $new->update($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('new.index');
        }catch(\Exception){
            toastr()->error('Cannot update! Please try again.','Error');
            return redirect()->back();    
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $new)
    {
        dd($new);
        try{
            $new->delete();
            toastr()->success('Successful','Congrats');
            return redirect()->route('new.index');
        }catch(\Exception){
            toastr()->error('Cannot delete! Please try again.','Error');
            return redirect()->back();
        }
    }
    public function newDetail(string $id){
        $new = News::find($id);
        $news = News::all();
        return view('fe.newDetail',compact('new','news'));
    }
}
