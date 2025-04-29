<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Job;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $categories = Category::all();
        $item = 1;
        $num = 1;
        $num2 = 1;
        // $jobs = Job::paginate(9);
        // if($request->ajax()){
            
        //     return view('fe.jod',compact('jobs'))->render();
        // }
        
        // return view('fe.home',compact('categories','item','jobs'));

        $jobs = Job::orderBy('level','desc')->paginate(9); // Phân trang 

        if ($request->ajax()) {
            // Nếu yêu cầu là AJAX, trả về cả view công việc và view phân trang
            $jodList = view('fe.jod', compact('jobs','num'))->render();
            $paginationLinks = $jobs->links('fe.paginationHome')->render();

            return response()->json([
                'jobList' => $jodList,
                'paginationLinks' => $paginationLinks,
            ]);
        }

        // Trả về view chính khi không phải AJAX
        return view('fe.home', compact('categories','item','jobs','num','num2'));
    }

    public function jobIndex(Request $request){
        $key = $request->input('search');
        if($key){
            $jobs = Job::where('name', 'LIKE', '%'.$key.'%')->orderBy('level','desc')->paginate(12);
        }else{
            $jobs = Job::orderBy('level','desc')->paginate(12);
        }
        if (request()->ajax()) {
            return response()->json([
                'html' => view('fe.job.jobIndex', compact('jobs'))->render(),
                'pagination' => $jobs->links('fe.paginationJob')->render()
            ]);
        }
        // $categories = Category::all();
        $i = 1;
        $cateWithJobCount = Category::withCount('jobs')->get();
        return view('fe.job.jobIndex',compact('jobs','cateWithJobCount','i'));
    }

    public function newList(){
        $new = News::all();
        return view('fe.newList',compact('new'));
    }
}
