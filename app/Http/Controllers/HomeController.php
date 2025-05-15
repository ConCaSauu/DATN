<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Job;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $categories = Category::where('status','!=','unactive')->get();
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
        // $key = $request->input('search');
        // if($key){
        //     $jobs = Job::where('name', 'LIKE', '%'.$key.'%')->orderBy('level','desc')->paginate(12);
        // }else{
        //     $jobs = Job::orderBy('level','desc')->paginate(12);
        // }

    //     $query = Job::query()->orderBy('level', 'desc');

    //     // Thêm điều kiện search
    //     if ($request->filled('search')) {
    //         $query->where('name', 'LIKE', '%'.$request->search.'%');
    //     }
    
    //     $jobs = $query->paginate(12);

    //     if (request()->ajax()) {
    //         // return response()->json([
    //         //     'html' => view('fe.job.jobIndex', compact('jobs'))->render(),
    //         //     'pagination' => $jobs->links('fe.paginationJob')->render()
    //         // ]);
    //         return view('job.jobList', compact('jobs'))->render();
    //         // return [
    //         //     'html' => view('job.jobList', ['jobs' => $jobs])->render(),
    //         //     'pagination' => $jobs->withQueryString()->links()->toHtml()
    //         // ];
    //     }
        
    //     $i = 1;
    //     $cateWithJobCount = Category::withCount('jobs')->get();
    //     return view('fe.job.jobIndex',compact('jobs','cateWithJobCount','i'));
    // Lấy 12 job đầu, sắp xếp giảm dần theo level
        $jobs = Job::orderBy('level', 'desc')->where('status','active')->paginate(12);
        $cateWithJobCount = Category::withCount([
            'jobs' => function($query) {
                $query->where('status', 'active');
            }
        ])->get();
        // Lấy list category (giả sử model Category)
        $categories = Category::all();
        $i = 1;
        return view('fe.job.jobIndex', compact('jobs','i', 'categories','cateWithJobCount'));
    }
    // Hàm fetchJobs dùng AJAX cho filter và phân trang
    public function fetchJobs(Request $request)
    {
        $query = Job::query();

        // Luôn chỉ lấy job có ít nhất 1 trong 2 trường salary
        $query->where(function($q){
            $q->whereNotNull('salary_min')->orWhereNotNull('salary_max');
        });

        // Filter theo category nếu có
        if ($request->filled('category')) {
            $query->where('cid', $request->category);
        }

        // Filter theo location (chỉ có 1 giá trị do JS đảm bảo)
        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }

        // Filter theo salary_min input
        // if ($request->filled('salary_min')) {
        //     $query->where(function($q) use ($request) {
        //         // Chọn job có salary_max >= salary_min người dùng nhập
        //         $q->where('salary_max', '>=', $request->salary_min)
        //           ->orWhere(function($q2) use ($request) {
        //               // hoặc trường salary_max null nhưng salary_min >= input
        //               $q2->whereNull('salary_max')
        //                  ->where('salary_min', '>=', $request->salary_min);
        //           });
        //     });
        // }

        // Filter theo salary_max input
        // if ($request->filled('salary_max')) {
        //     $query->where(function($q) use ($request) {
        //         // Chọn job có salary_min <= salary_max người dùng nhập
        //         $q->where('salary_min', '<=', $request->salary_max)
        //           ->orWhere(function($q2) use ($request) {
        //               // hoặc trường salary_min null nhưng salary_max <= input
        //               $q2->whereNull('salary_min')
        //                  ->where('salary_max', '<=', $request->salary_max);
        //           });
        //     });
        // }
        $hasMin = $request->filled('salary_min');
        $hasMax = $request->filled('salary_max');

        if ($hasMin && ! $hasMax) {
            // Trường hợp chỉ nhập salary_min
            $min = (float) $request->salary_min;
            $query->where(function($q) use ($min) {
                $q->where('salary_min', '>=', $min)
                ->orWhere('salary_max', '>=', $min);
            });

        } elseif ($hasMax && ! $hasMin) {
            // Trường hợp chỉ nhập salary_max
            $max = (float) $request->salary_max;
            $query->where(function($q) use ($max) {
                $q->where('salary_max', '<=', $max)
                ->orWhere('salary_min', '<=', $max);
            });

        } elseif ($hasMin && $hasMax) {
            // Trường hợp nhập cả 2: áp dụng cùng lúc
            $min = (float) $request->salary_min;
            $max = (float) $request->salary_max;
            $query->where('salary_min', '>=', $min)
                ->where('salary_max', '<=', $max);
        }
        // Sắp xếp theo level giảm dần và phân trang 12/job
        $jobs = $query->where('status','active')->orderBy('level', 'desc')->paginate(12);

        // Render partial và trả về JSON
        $html = view('fe.job.jobList', compact('jobs'))->render();

        return response()->json([
            'html' => $html,
        ]);
    }
    public function filterByLocation(Request $request, $location)
    {
        $jobs = Job::query()
            ->where('location', $location)
            ->orderBy('level', 'desc')
            ->paginate(12);

        return response()->view('jobIndex', compact('jobs'));
    }
    public function filterByCategory(Request $request, $categoryId)
    {
        $jobs = Job::query()
            ->where('category_id', $categoryId)
            ->orderBy('level', 'desc')
            ->paginate(12);
            dd($jobs);
        return response()->view('jobIndex', compact('jobs'));
    }
    public function filterBySalary(Request $request)
    {
        $salaryMin = $request->salary_min;
        $salaryMax = $request->salary_max;

        $jobs = Job::query()
            ->where(function ($query) use ($salaryMin, $salaryMax) {
                if ($salaryMin) {
                    $query->where('salary_min', '>=', $salaryMin);
                }
                if ($salaryMax) {
                    $query->where('salary_max', '<=', $salaryMax);
                }
            })
            ->orderBy('level', 'desc')
            ->paginate(12);

        return response()->view('jobIndex', compact('jobs'));
    }
    public function newList(){
        $new = News::all();
        return view('fe.newList',compact('new'));
    }
    public function companyDetail(string $id){
        $num = 1;
        $company = User::find($id);
        $jobs = Job::where('ucid',$id)->paginate(6);
        return view('fe.companyDetail',compact('company','jobs','num'));
    }
}
