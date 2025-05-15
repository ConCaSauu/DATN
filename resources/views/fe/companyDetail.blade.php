@extends('fe.index')
@section('content')
<section class="section-product padding-tb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bb-single-pro">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-24">
                            @if($company->logo)
                            <img style="margin: 10px; width:-webkit-fill-available" src="{{asset('upload/images')}}/{{$company->logo}}" alt="">
                            @else
                            <img style="margin: 10px; width:-webkit-fill-available" src="{{asset('upload/images')}}/logo3.jpeg" alt="">
                            @endif
                        </div>
                        <div class="col-lg-8 col-12 mb-24">
                            <div class="bb-single-pro-contact">
                                <div class="bb-sub-title">                                    
                                    <h4 style="font-size: 27px; margin-bottom:12px">{{$company->name}}</h4>
                                    <p>Website: <a href="#"><span>{{$company->web}}</span></a></p>
                                </div>
                                <div class="jobD-container">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <h6 style="margin-left: 10px">{{$company->city}}</h6>
                                </div>                            
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
                                        <p>{!! $company->description !!}</p>
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
                                                <h4>Mariya</h4>
                                                <p>The company is amazing</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bb-reviews-form">
                                        <h3>Add a Review</h3>
                                        <div class="bb-review-rating">
                                        </div>
                                        <form id="feedback-create" action="{{route('feedbackStore')}}" method="post">
                                            @csrf
                                            <div class="input-box">
                                                @if(Auth::user())
                                                <input type="hidden" name="uid" value="{{Auth::user()->id}}">
                                                @else
                                                @endif
                                            </div>
                                            <div class="input-box">
                                                <input type="hidden" name="ucid" value="{{$company->id}}">
                                            </div>
                                            <div class="input-box">
                                                <textarea name="content" placeholder="Enter Your Comment"></textarea>
                                            </div>
                                            <input type="hidden" name="status" value="pending">
                                            <div class="input-button">
                                                <a href="" class="bb-btn-2" onclick="document.getElementById('feedback-create').submit(); return false;">Send</a>
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
                @foreach($jobs as $item)
                    <div class=" bb-pro-box jod " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{$num*150}}">
                        <div class="logo-com">
                            <a href="{{route('job_detail', ['id' => $item->id] )}}">
                            <div class="logo-align ">
                                <img src="{{asset('upload/images')}}/fpt.png">
                            </div> 
                            
                            </a> 
                        </div>
                        <div class="job-info">
                            <h5 class="bb-pro-title">
                                <a style="font-family: quicksand; font-weight:bold; color:#3d4750" href="{{route('job_detail', ['id' => $item->id] )}}">{{$item->name}}</a>
                                
                            </h5>
                            <h6 style="font-family: quicksand; font-weight:bold; margin-top:5px; color:#686e7d">{{$item->com_name}}</h6>
                            <div class="salary">
                                @if ($item->salary_max == null)
                                    <h6>Từ {{$item->salary_min}} triệu</h6>
                                @elseif ($item->salary_min == null)
                                    <h6>Lên đến {{$item->salary_max}} triệu</h6>
                                @else
                                    <h6>Từ {{$item->salary_min}}-{{$item->salary_max}}  triệu</h6>
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