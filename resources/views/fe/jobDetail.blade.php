@extends('fe.index')
@section('content')
<section class="section-product padding-tb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bb-single-pro">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-24">
                            @if($user->logo)
                            <img style="margin: 10px; width:-webkit-fill-available" src="{{asset('upload/images')}}/{{$user->logo}}" alt="">
                            @else
                            <img style="margin: 10px; width:-webkit-fill-available" src="{{asset('upload/images')}}/logo3.jpeg" alt="">
                            @endif
                        </div>
                        <div class="col-lg-8 col-12 mb-24">
                            <div class="bb-single-pro-contact">
                                <div class="bb-sub-title">
                                    <h5 style="color:#686e7d; margin: 20px 0px">{{$user->name}}</h5>
                                    <h4 style="font-size: 27px; margin-bottom:12px">{{$job->name}}</h4>
                                    
                                </div>
                                <div class="jobD-container">
                                    <div class="jobD-info">
                                        <i class="fa-solid fa-dollar-sign"></i>
                                            @if ($job->salary_max == null)
                                                <h6>Từ {{$job->salary_min}} triệu</h6>
                                            @elseif ($job->salary_min == null)
                                                <h6>Lên đến {{$job->salary_max}} triệu</h6>
                                            @else
                                                <h6>Từ {{$job->salary_min}}-{{$job->salary_max}} triệu</h6>
                                            @endif 
                                    </div>
                                    <div class="jobD-info">
                                        <i class="fa-solid fa-calendar-days"></i>
                                            <h6>{{\Carbon\Carbon::parse($job->exp_date)->format('d/m/Y')}}</h6>
                                    </div>
                                    <div class="jobD-info">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <h6>{{$job->location}}</h6>
                                    </div>
                                </div>
                                <form id="formAPL" action="{{route('createAPL')}}" class="hidden" method="post">
                                    @csrf
                                    <input value="{{$job->id}}" name="jid">
                                    <input value="{{Auth::check() ? Auth::user()->id : ''}}" name="uid">
                                    <input value="{{$user->id}}" name="ucid">
                                    <input value="{{Auth::check() ? Auth::user()->name : ''}}" name="user_name">
                                    <input value="{{Auth::check() ? Auth::user()->cv_id : ''}}" name="cv_id">
                                    <input value="{{$job->name}}" name="job_name">
                                    <input value="{{$job->com_name}}" name="com_name">
                                    <input value="pending" name="status">
                                </form>
                                <div class="bb-single-qty" style="padding-top:15px">   
                                    <button id="submitButton" class="bb-btn-2" >APPLY</button>
                                        
                                    
                                    <ul class="bb-pro-actions">
                                        <li class="bb-btn-group">
                                            <a href="javascript:void(0)">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div style=" width:-webkit-fill-available"><h6 style="float:right;">Ngày cập nhật: {{$job->updated_at}}</h6></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bey-single-accordion">
                    <div class="accordion" id="accordionExample">
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Information
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="bb-details text">
                                        {!! $job->description !!}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Company's Reviews
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="bb-reviews">
                                        <div class="reviews-bb-box">
                                            <div class="inner-image">
                                                <img src="{{asset('fe/assets')}}/img/reviews/1.jpg" alt="img-1">
                                            </div>
                                            <div class="inner-contact">
                                                <h4>Mariya Lykra</h4>
                                                <p>cty rat chuyen nghiep</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bb-reviews-form">
                                        <h3>Add a Review</h3>
                                        <div class="bb-review-rating">
                                        </div>
                                        <form action="#">
                                            <div class="input-box">
                                                <input type="text" placeholder="Name" name="your-name">
                                            </div>
                                            <div class="input-box">
                                                <input type="email" placeholder="Email" name="your-email">
                                            </div>
                                            <div class="input-box">
                                                <textarea name="your-comment" placeholder="Enter Your Comment"></textarea>
                                            </div>
                                            <div class="input-button">
                                                <a href="javascript:void(0)" class="bb-btn-2">View Cart</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-related-product padding-tb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title bb-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail ">
                        <h2 class="bb-title">Related <span>Jobs</span></h2>
                        
                    </div>
                </div>
            </div>
            <div class="col-12">
                @foreach($jobs as $job)
                    <div class=" bb-pro-box jod " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{$num*150}}">
                        <div class="logo-com">
                            <a href="{{route('job_detail', ['id' => $job->id] )}}">
                            <div class="logo-align ">
                                <img src="{{asset('upload/images')}}/fpt.png">
                            </div> 
                            
                            </a> 
                        </div>
                        <div class="job-info">
                            <h5 class="bb-pro-title">
                                <a style="font-family: quicksand; font-weight:bold; color:#3d4750" href="{{route('job_detail', ['id' => $job->id] )}}">{{$job->name}}</a>
                                
                            </h5>
                            <h6 style="font-family: quicksand; font-weight:bold; margin-top:5px; color:#686e7d">{{$job->com_name}}</h6>
                            <div class="salary">
                                @if ($job->salary_max == null)
                                    <h6>Từ {{$job->salary_min}} triệu</h6>
                                @elseif ($job->salary_min == null)
                                    <h6>Lên đến {{$job->salary_max}} triệu</h6>
                                @else
                                    <h6>Từ {{$job->salary_min}}-{{$job->salary_max}}  triệu</h6>
                                @endif
                            </div>
                        </div>  
                    </div>
                    <div style="display:none;height:0;width:0">{{$num++}}</div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('submitButton').onclick = function() {
    document.getElementById('formAPL').submit(); // Gọi phương thức submit của form
};
</script>
@endsection