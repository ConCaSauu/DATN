<?php

use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('home', [HomeController::class,'index'])->name('home');
route::get('/login', [UserController::class,'login'])->name('login');
route::post('/login', [UserController::class,'post_login']);
route::get('/u-register', [UserController::class,'Uregister'])->name('Uregister');
route::post('/u-register', [UserController::class,'createUser']);
route::get('/uc-register', [UserController::class,'UCregister'])->name('UCregister');
route::post('/uc-register', [UserController::class,'createUser']);
route::get('/logout', [UserController::class,'logout'])->name('logout');
route::get('/job-detail/{id}', [JobController::class,'job_detail'])->name('job_detail');
route::post('/createFeedback',[UserController::class,'feedbackStore'])->name('feedbackStore');
route::get('/jobIndex', [HomeController::class,'jobIndex'])->name('jobIndex');
route::get('/jobIndex/category/{categoryId}', [HomeController::class,'filterByCategory']);
route::get('/jobIndex/location/{location}', [HomeController::class,'filterByLocation']);
route::get('/jobIndex/salary', [HomeController::class,'filterBySalary']);
Route::get('/jobIndex/fetch', [HomeController::class, 'fetchJobs'])->name('jobFetch');
route::post('/jobIndex', [HomeController::class,'test']);
route::get('/newList', [HomeController::class,'newList'])->name('newList');
route::get('/newDetail/{id}', [NewController::class,'newDetail'])->name('newDetail');
route::get('/company-detail/{id}', [HomeController::class,'companyDetail'])->name('company.detail');


route::prefix('profile')->middleware('login')->group(function(){
    route::get('/', [UserController::class,'profile'])->name('profile');
    route::get('/application', [UserController::class,'application']);
    route::get('/account', [UserController::class,'account']);
    route::get('/changePass', [UserController::class,'changePass']);
    route::get('/cv', [UserController::class,'cv']);
    route::get('/jobEdit/{id}', [UserController::class,'jobEdit'])->name('jobEdit');
    route::put('/jobUpdate/{id}', [UserController::class,'jobEdit'])->name('jobUpdate');
    route::get('/jobIndex', [UserController::class,'jobIndex']);
    route::put('/{user}', [UserController::class,'updatePro'])->name('updatePro');
    route::put('/updateCV/{id}', [UserController::class,'updateCV'])->name('updateCV');
    route::post('/createCV/{id}', [UserController::class,'createCV'])->name('createCV');
    route::get('/jobCreate', [UserController::class,'jobCreate']);
    route::post('/jobCreate', [UserController::class,'jobStore'])->name('jobStore');
    route::get('/cancelAPL/{id}', [ApplicationController::class,'cancelAPL'])->name('cancelAPL');
    route::get('/approveAPL/{id}', [ApplicationController::class,'approveAPL'])->name('approveAPL');
    route::get('/rejectAPL/{id}', [ApplicationController::class,'rejectAPL'])->name('rejectAPL');
    route::get('/buyCoin',[UserController::class,'buyCoin']);
    route::get('/transaction',[UserController::class,'transaction']);
    route::get('/buySlot',[UserController::class,'buySlotView']);
    route::post('/buySlot',[UserController::class,'buySlot'])->name('buySlot');
    route::post('/vnpay_payment', [UserController::class,'vnpay_payment']);
});

route::post('/createAPL', [ApplicationController::class,'createAPL'])->name('createAPL');

route::get('/jobSearch', [HomeController::class,'jobIndex'])->name('job_search');

route::get('/verify-account/{email}',[UserController::class,'verify_account'])->name('verify_account');

route::get('/forgot-password',[UserController::class,'forgot_password'])->name('forgot_password');
route::post('/forgot-password',[UserController::class,'check_forgot_password'])->name('check_forgot_password');

route::get('reset-password/{token}',[UserController::class,'reset_password'])->name('reset_password');
route::post('reset-password/{token}',[UserController::class,'check_reset_password'])->name('check_reset_password');

route::get('/admin_login',[AdminController::class,'login'])->name('admin_login');
route::post('/admin_login',[AdminController::class,'post_login'])->name('postAdmin_login');
route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [DashBoardController::class,'index'])->name('admin.index');
    Route::resource('category', CategoryController::class);
    Route::resource('job', JobController::class);
    Route::resource('new', NewController::class);
    Route::resource('user', UserController::class);
    Route::get('/user/lock/{user}',[UserController::class,'lockUser'])->name('user.lock');
    Route::get('/user/active/{user}',[UserController::class,'unlockUser'])->name('user.unlock');
    Route::get('/job/lock/{item}',[JobController::class,'lockJob'])->name('job.lock');
    Route::get('/job/active/{item}',[JobController::class,'unlockJob'])->name('job.unlock');
    Route::get('/job/accept/{item}',[JobController::class,'acceptJob'])->name('job.accept');
    Route::get('/job/upgrade/{job}',[JobController::class,'upgradeJob'])->name('job.upgrade');    
    Route::resource('application', ApplicationController::class);
    Route::get('/application/detail/{id}',[ApplicationController::class,'detail'])->name('application.detail');    

});

