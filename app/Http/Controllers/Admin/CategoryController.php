<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
    
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try{
            if($request->image){
                    $icon = $request->image;
                    $originalName = pathinfo($icon->getClientOriginalName(), PATHINFO_FILENAME);
                    $extension = $icon->getClientOriginalExtension();
                    $randomNumber = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
                    $newFileName = $originalName . '_' . $randomNumber . '.' . $extension;
                    // dd($newFileName);
                    // Thay đổi địa chỉ lưu ảnh
                    $destinationPath = public_path('upload/images'); // Đường dẫn đến thư mục bạn muốn lưu

                    // Di chuyển tệp đến thư mục đích
                    $icon->move($destinationPath, $newFileName);
                    
                $request->merge(['icon'=> $newFileName]);
            }
            // dd($request->all());
            Category::create($request->all());
            toastr()->success('Success to create','Successful');
            return redirect()->route('category.index')->with('success','Successful');
        }catch(\Exception){
            toastr()->error('Failed to create','Error');
            return redirect()->back()->with('error'.'Failed');
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
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try{
            $category->update($request->all());
            toastr()->success('Successful','Congrats');
            return redirect()->route('category.index');
        }catch(\Exception){
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try{
            $category->delete();
            toastr()->success('Successful','Congrats');
            return redirect()->route('category.index');
        }catch(\Exception){
            return redirect()->back();
        }
    }
}
