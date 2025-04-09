@extends('fe.index')
@section('content')
        <!-- Hero -->
        <section class="section-hero margin-b-50">
            <div class="bb-social-follow">
                {{-- <ul class="inner-links">
                    <li>
                        <a href="javascript:void(0)">Fb</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Li</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Dr</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">In</a>
                    </li>
                </ul> --}}
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slide-1">
                                    <div class="row mb-minus-24">
                                        <div class="col-lg-6 col-12 order-lg-1 order-2 mb-24">
                                            <div class="hero-contact">
                                                <p></p>
                                                <h1>Finding <span>Jobs</span><br> & Opportunity</h1>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-2 order-1 mb-24">
                                            <div class="hero-image">
                                                <img  src="{{asset('upload/images')}}/slider4.jpg" alt="hero" >
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-2">
                                    <div class="row mb-minus-24">
                                        <div class="col-lg-6 col-12 order-lg-1 order-2 mb-24">
                                            <div class="hero-contact">
                                                <p></p>
                                                <h1>Finding <span>Jobs</span><br> & Opportunity</h1>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-2 order-1 mb-24">
                                            <div class="hero-image">
                                                <img src="{{asset('upload/images')}}/slider2.jpg" alt="hero">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide slide-3">
                                    <div class="row mb-minus-24">
                                        <div class="col-lg-6 col-12 order-lg-1 order-2 mb-24">
                                            <div class="hero-contact">
                                                <p></p>
                                                <h1>Finding <span>Jobs</span><br> & Opportunity</h1>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12 order-lg-2 order-1 mb-24">
                                            <div class="hero-image">
                                                <img src="{{asset('upload/images')}}/slider3.jpg" alt="hero">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-white"></div>
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bb-scroll-Page">
                {{-- <span class="scroll-bar">
                    <a href="javascript:void(0)">Scroll Page</a>
                </span> --}}
            </div>
            
        </section>
    
        <!-- Category -->
        <section class="section-category padding-tb-50">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-lg-5 col-12 mb-24">
                        <div class="bb-category-img">
                            <img src="{{asset('upload/images')}}/banner1.jpg" alt="category">
                            
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 mb-24">
                        <div class="bb-category-contact">
                            <div class="category-title" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="600">
                                <h2>Explore Categories</h2>
                            </div>
                            <div class="bb-category-block owl-carousel">
                                @foreach($categories as $key)
                                <div class="bb-category-box category-items-{{$item}}" data-aos="flip-left" data-aos-duration="1000"
                                    data-aos-delay="{{$item*200-50}}">
                                    <div class="category-image">
                                        <img src="{{$key->icon}}" alt="category">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5><a href="shop-left-sidebar-col-3.html">{{$key->name}}</a></h5>
                                        <p>485 items</p>
                                    </div>
                                    <div style="display:none;height:0;width:0">{{$item++}}</div>
                                </div>
                                
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Day of the deal -->    
        <section class="section-deal padding-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title bb-deal" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="section-detail">
                                <h2 class="bb-title">Jobs <span>of the day</span></h2>
                                <p>Don't wait. The time will never be just right.</p>
                            </div>
                            <div id="dealend" class="dealend-timer"></div>
                        </div>
                    </div>
                    <div id="job-container" class="col-md-12">
                        @include('fe.jod')
                    </div>
                    <div id="pagination-container">
                        {{ $jobs->links('fe.paginationHome')}}
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner-one -->
        <section class="section-banner-one padding-tb-50">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="banner-box bg-box-color-one">
                            <div class="inner-banner-box">
                                <div class="side-image">
                                    <img src="https://cdn-icons-png.flaticon.com/512/5064/5064666.png" title="computer icons" alt="one">
                                </div>
                                <div class="inner-contact">
                                    <h5>Information Technology</h5>
                                    <p>Managing systems, networks, and databases to support business operations.</p>
                                    <a href="shop-left-sidebar-col-3.html" class="bb-btn-1">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="banner-box bg-box-color-two">
                            <div class="inner-banner-box">
                                <div class="side-image">
                                    <img src="https://cdn-icons-png.flaticon.com/512/18148/18148527.png" alt="two">
                                </div>
                                <div class="inner-contact">
                                    <h5>Marketing</h5>
                                    <p>Process of promoting, selling, and distributing a product or service.</p>
                                    <a href="shop-left-sidebar-col-3.html" class="bb-btn-1">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Banner-two -->
        <section class="section-banner-two margin-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 banner-justify-box-contact">
                        <div class="banner-two-box">                           
                            <h4>Your <span>Opportunity</span></h4>
                            <a href="javascript:void(0)" class="bb-btn-1">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- New Product tab Area -->
        <section class="section-product-tabs padding-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title bb-deal" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="section-detail">
                                <h2 class="bb-title">Jobs  <span>Suggestion</span></h2>
                                <p></p>
                            </div>
                            <div class="bb-pro-tab">
                                <ul class="bb-pro-tab-nav nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#it">IT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#marketing">Marketing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#sale">Sale</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-minus-24">
                    <div class="col">
                        <div class="tab-content">
                            <!-- 1st Product tab start -->
                            <div class="tab-pane fade show active" id="all">
                                <div class="row">   
                                    @foreach($jobs as $job)
                                        <div class=" bb-pro-box jod " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{$num2*150}}">
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
                                        <div style="display:none;height:0;width:0">{{$num2++}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- 2nd Product tab start -->
                            <div class="tab-pane fade" id="it">
                                <div class="row">
                                    @foreach($jobs as $job)
                                        <div class=" bb-pro-box jod " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{$num2*150}}">
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
                                        
                                    @endforeach
                            </div>
                            <!-- 3rd Product tab start -->
                            {{--<div class="tab-pane fade" id="fruit">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>New</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/9.jpg"
                                                            alt="product-1">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/9.jpg"
                                                            alt="product-1">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Organic dragon
                                                        fruit</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$5</span>
                                                        <span class="old-price">$7</span>
                                                    </div>
                                                    <span class="last-items">2 Pcs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>New</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/10.jpg"
                                                            alt="product-2">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/10.jpg"
                                                            alt="product-2">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Fresh blue
                                                        berry</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$25</span>
                                                        <span class="old-price">$30</span>
                                                    </div>
                                                    <span class="last-items">500g</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="600">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/11.jpg"
                                                            alt="product-3">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/11.jpg"
                                                            alt="product-3">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Red Cherry
                                                        Serbia</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$6</span>
                                                        <span class="old-price">$8</span>
                                                    </div>
                                                    <span class="last-items">250g</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="800">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/12.jpg"
                                                            alt="product-4">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/12.jpg"
                                                            alt="product-4">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Kwangtung Fresh
                                                        Litchi</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$2</span>
                                                        <span class="item-left">Out Of Stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>Sale</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/13.jpg"
                                                            alt="product-5">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/13.jpg"
                                                            alt="product-5">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Fresh
                                                        orange</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$10</span>
                                                        <span class="item-left">2 Left</span>
                                                    </div>
                                                    <span class="last-items">12 Pcs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/14.jpg"
                                                            alt="product-6">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/14.jpg"
                                                            alt="product-6">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Red Guava</a>
                                                </h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$15</span>
                                                        <span class="old-price">$17</span>
                                                    </div>
                                                    <span class="last-items">2kg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="600">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>Hot</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/15.jpg"
                                                            alt="product-7">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/15.jpg"
                                                            alt="product-7">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Organic Kesar
                                                        Mango</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$29</span>
                                                        <span class="old-price">$31</span>
                                                    </div>
                                                    <span class="last-items">20kg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="800">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/16.jpg"
                                                            alt="product-8">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/16.jpg"
                                                            alt="product-8">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Fruit</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Organic
                                                        Banana</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$9</span>
                                                        <span class="old-price">$10</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4th Product tab start -->
                            <div class="tab-pane fade" id="veg">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>Hot</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/17.jpg"
                                                            alt="product-1">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/17.jpg"
                                                            alt="product-1">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Vegetable</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Organic
                                                        Tomato</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$15</span>
                                                        <span class="old-price">$22</span>
                                                    </div>
                                                    <span class="last-items">500g</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>New</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/18.jpg"
                                                            alt="product-2">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/18.jpg"
                                                            alt="product-2">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Tuber Root</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Ecuador Red
                                                        Potato</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$25</span>
                                                        <span class="old-price">$30</span>
                                                    </div>
                                                    <span class="last-items">10kg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="600">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/19.jpg"
                                                            alt="product-3">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/19.jpg"
                                                            alt="product-3">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Vegetable</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Red organic
                                                        Onion</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$10</span>
                                                        <span class="old-price">$15</span>
                                                    </div>
                                                    <span class="last-items">5kg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="800">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>Trend</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/20.jpg"
                                                            alt="product-4">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/20.jpg"
                                                            alt="product-4">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Leaves</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Fresh
                                                        Coriander</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$1</span>
                                                        <span class="item-left">Out Of Stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="200">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <span class="flags">
                                                    <span>Sale</span>
                                                </span>
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/21.jpg"
                                                            alt="product-5">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/21.jpg"
                                                            alt="product-5">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Vegetable</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">America
                                                        Capcicum</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$4</span>
                                                        <span class="item-left">2 Left</span>
                                                    </div>
                                                    <span class="last-items">500g</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="400">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/22.jpg"
                                                            alt="product-6">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/22.jpg"
                                                            alt="product-6">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Spices</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Mexico corn</a>
                                                </h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$10</span>
                                                        <span class="old-price">$12</span>
                                                    </div>
                                                    <span class="last-items">2pcs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="600">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/23.jpg"
                                                            alt="product-7">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/23.jpg"
                                                            alt="product-7">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Tuber Root</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Jamaica
                                                        Ginger</a></h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$3</span>
                                                        <span class="old-price">$4</span>
                                                    </div>
                                                    <span class="last-items">250g</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-6 mb-24 bb-product-box" data-aos="fade-up"
                                        data-aos-duration="1000" data-aos-delay="800">
                                        <div class="bb-pro-box">
                                            <div class="bb-pro-img">
                                                <a href="javascript:void(0)">
                                                    <div class="inner-img">
                                                        <img class="main-img" src="{{asset('fe/assets')}}/img/new-product/24.jpg"
                                                            alt="product-8">
                                                        <img class="hover-img" src="{{asset('fe/assets')}}/img/new-product/24.jpg"
                                                            alt="product-8">
                                                    </div>
                                                </a>
                                                <ul class="bb-pro-actions">
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Wishlist">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" data-link-action="quickview"
                                                            title="Quick View" data-bs-toggle="modal"
                                                            data-bs-target="#bry_quickview_modal">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="compare.html" title="Compare">
                                                            <i class="ri-repeat-line"></i>
                                                        </a>
                                                    </li>
                                                    <li class="bb-btn-group">
                                                        <a href="javascript:void(0)" title="Add To Cart">
                                                            <i class="ri-shopping-bag-4-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bb-pro-contact">
                                                <div class="bb-pro-subtitle">
                                                    <a href="shop-left-sidebar-col-3.html">Vegetable</a>
                                                    <span class="bb-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </span>
                                                </div>
                                                <h4 class="bb-pro-title"><a href="product-left-sidebar.html">Fresh Lemon</a>
                                                </h4>
                                                <div class="bb-price">
                                                    <div class="inner-price">
                                                        <span class="new-price">$9</span>
                                                        <span class="old-price">$10</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Services -->
        {{-- <section class="section-services padding-tb-50">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-lg-3 col-md-6 col-12 mb-24" data-aos="flip-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="bb-services-box">
                            <div class="services-img">
                                <img src="{{asset('fe/assets')}}/img/services/1.png" alt="services-1">
                            </div>
                            <div class="services-contact">
                                <h4>Free Shipping</h4>
                                <p>Free shipping on all Us order or above $200</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-24" data-aos="flip-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="bb-services-box">
                            <div class="services-img">
                                <img src="{{asset('fe/assets')}}/img/services/2.png" alt="services-2">
                            </div>
                            <div class="services-contact">
                                <h4>24x7 Support</h4>
                                <p>Contact us 24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-24" data-aos="flip-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <div class="bb-services-box">
                            <div class="services-img">
                                <img src="{{asset('fe/assets')}}/img/services/3.png" alt="services-3">
                            </div>
                            <div class="services-contact">
                                <h4>30 Days Return</h4>
                                <p>Simply return it within 30 days for an exchange</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-24" data-aos="flip-up" data-aos-duration="1000"
                        data-aos-delay="800">
                        <div class="bb-services-box">
                            <div class="services-img">
                                <img src="{{asset('fe/assets')}}/img/services/4.png" alt="services-4">
                            </div>
                            <div class="services-contact">
                                <h4>Payment Secure</h4>
                                <p>Contact us 24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    
        <!-- Vendors -->
        <section class="section-vendors padding-t-50 padding-b-100">
            <div class="container">
                <div class="row mb-minus-24">
                    <div class="col-12">
                        <div class="section-title bb-center" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="section-detail">
                                <h2 class="bb-title">Top <span>Recruiter</span></h2>
                                <p>Discover Our Trusted Partners</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 mb-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-vendors-img">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="vendors_tab_one">
                                    <a href="javascript:void(0)" class="bb-vendor-init">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                    <img src="{{asset('fe/assets')}}/img/vendors/img-1.jpg" alt="vendors-img-1">
                                    <div class="vendors-local-shape">
                                        <div class="inner-shape"></div>
                                        <img src="{{asset('fe/assets')}}/img/vendors/vendor-1.jpg" alt="vendor">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vendors_tab_two">
                                    <a href="javascript:void(0)" class="bb-vendor-init">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                    <img src="{{asset('fe/assets')}}/img/vendors/img-2.jpg" alt="vendors-img-2">
                                    <div class="vendors-local-shape">
                                        <div class="inner-shape"></div>
                                        <img src="{{asset('fe/assets')}}/img/vendors/vendor-2.jpg" alt="vendor">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vendors_tab_three">
                                    <a href="javascript:void(0)" class="bb-vendor-init">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                    <img src="{{asset('fe/assets')}}/img/vendors/img-3.jpg" alt="vendors-img-3">
                                    <div class="vendors-local-shape">
                                        <div class="inner-shape"></div>
                                        <img src="{{asset('fe/assets')}}/img/vendors/vendor-3.jpg" alt="vendor">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="vendors_tab_four">
                                    <a href="javascript:void(0)" class="bb-vendor-init">
                                        <i class="ri-arrow-right-up-line"></i>
                                    </a>
                                    <img src="{{asset('fe/assets')}}/img/vendors/img-4.jpg" alt="vendors-img-4">
                                    <div class="vendors-local-shape">
                                        <div class="inner-shape"></div>
                                        <img src="{{asset('fe/assets')}}/img/vendors/vendor-4.jpg" alt="vendor">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 mb-24">
                        <ul class="bb-vendors-tab-nav nav">
                            <li class="nav-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <a class="nav-link active" data-bs-toggle="tab" href="#vendors_tab_one">
                                    <div class="bb-vendors-box">
                                        <div class="inner-heading">
                                            <h5>Công ty Cổ phần FPT</h5>
                                            <span>Jobs - 37</span>
                                        </div>
                                        <p>IT (12) | Marketing (15) | Sale (10) </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <a class="nav-link" data-bs-toggle="tab" href="#vendors_tab_two">
                                    <div class="bb-vendors-box">
                                        <div class="inner-heading">
                                            <h5>Công Ty Cổ Phần Vinhomes</h5>
                                            <span>Jobs - 12</span>
                                        </div>
                                        <p>IT (8) | Marketing (1) | Sale (3) </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <a class="nav-link" data-bs-toggle="tab" href="#vendors_tab_three">
                                    <div class="bb-vendors-box">
                                        <div class="inner-heading">
                                            <h5>Công ty Cổ phần sữa Việt Nam</h5>
                                            <span>Jobs - 25</span>
                                        </div>
                                        <p>Sale (15) | Maketing (10)</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <a class="nav-link" data-bs-toggle="tab" href="#vendors_tab_four">
                                    <div class="bb-vendors-box">
                                        <div class="inner-heading">
                                            <h5>Công ty Tài Chính TNHH HD SAISON</h5>
                                            <span>Jobs - 10</span>
                                        </div>
                                        <p>Sale (10)</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Testimonials -->
        <section class="section-testimonials padding-tb-100 p-0-991">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bb-testimonials" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <img src="{{asset('fe/assets')}}/img/testimonials/img-1.png" alt="testimonials-1" class="testimonials-img-1">
                            <img src="{{asset('fe/assets')}}/img/testimonials/img-2.png" alt="testimonials-2" class="testimonials-img-2">
                            <img src="{{asset('fe/assets')}}/img/testimonials/img-3.png" alt="testimonials-3" class="testimonials-img-3">
                            <img src="{{asset('fe/assets')}}/img/testimonials/img-4.png" alt="testimonials-4" class="testimonials-img-4">
                            <img src="{{asset('fe/assets')}}/img/testimonials/img-5.png" alt="testimonials-5" class="testimonials-img-5">
                            <img src="{{asset('fe/assets')}}/img/testimonials/img-6.png" alt="testimonials-6" class="testimonials-img-6">
                            <div class="inner-banner">
                                <h4>Testimonials</h4>
                            </div>
                            <div class="owl-carousel testimonials-slider">
                                <div class="bb-testimonials-inner">
                                    <div class="row">
                                        <div class="col-md-4 col-12 d-none-767">
                                            <div class="testimonials-image">
                                                <img src="{{asset('fe/assets')}}/img/testimonials/1.jpg" alt="testimonials">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <div class="testimonials-contact">
                                                <div class="user">
                                                    <img src="{{asset('fe/assets')}}/img/testimonials/1.jpg" alt="testimonials">
                                                    <div class="detail">
                                                        <h4>Isabella Oliver</h4>
                                                        <span>(Manager)</span>
                                                    </div>
                                                </div>
                                                <div class="inner-contact">
                                                    <p>""</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bb-testimonials-inner">
                                    <div class="row">
                                        <div class="col-md-4 col-12 d-none-767">
                                            <div class="testimonials-image">
                                                <img src="{{asset('fe/assets')}}/img/testimonials/2.jpg" alt="testimonials">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <div class="testimonials-contact">
                                                <div class="user">
                                                    <img src="{{asset('fe/assets')}}/img/testimonials/2.jpg" alt="testimonials">
                                                    <div class="detail">
                                                        <h4>Nikki Albart</h4>
                                                        <span>(Team Leader)</span>
                                                    </div>
                                                </div>
                                                <div class="inner-contact">
                                                    <p style="font-family: quicksand">"Tôi rất hài lòng với trải nghiệm tìm kiếm việc làm trên website 'GoodJob'. Giao diện thân thiện và dễ sử dụng giúp tôi nhanh chóng tìm thấy những cơ hội việc làm phù hợp với kỹ năng và sở thích của mình. Các bộ lọc tìm kiếm giúp tôi thu hẹp lựa chọn một cách hiệu quả, và thông tin chi tiết về từng vị trí việc làm rất hữu ích. Nhìn chung, 'GoodJob' đã mang đến cho tôi một trải nghiệm tìm kiếm việc làm tích cực và hiệu quả!"</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bb-testimonials-inner">
                                    <div class="row">
                                        <div class="col-md-4 col-12 d-none-767">
                                            <div class="testimonials-image">
                                                <img src="{{asset('fe/assets')}}/img/testimonials/3.jpg" alt="testimonials">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <div class="testimonials-contact">
                                                <div class="user">
                                                    <img src="{{asset('fe/assets')}}/img/testimonials/3.jpg" alt="testimonials">
                                                    <div class="detail">
                                                        <h4>Stephen Smith</h4>
                                                        <span>(Co Founder)</span>
                                                    </div>
                                                </div>
                                                <div class="inner-contact">
                                                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                                        at sint eligendi possimus perspiciatis asperiores reiciendis hic
                                                        amet alias aut quaerat maiores blanditiis."</p>
                                                </div>
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
    
        <!-- Blog -->
        <section class="section-blog padding-b-50 padding-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-2-slider owl-carousel">
                            <div class="blog-2-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="blog-img">
                                    <img src="{{asset('fe/assets')}}/img/blog/7.jpg" alt="blog-7">
                                </div>
                                <div class="blog-contact">
                                    <span>June 30,2024 - organic</span>
                                    <h4><a href="blog-detail-left-sidebar.html">Marketing Guide: 5 Steps to Success.</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="blog-2-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="blog-img">
                                    <img src="{{asset('fe/assets')}}/img/blog/8.jpg" alt="blog-8">
                                </div>
                                <div class="blog-contact">
                                    <span>May 10,2023 - organic</span>
                                    <h4><a href="blog-detail-left-sidebar.html">Best way to solve business deal issue.</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="blog-2-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="blog-img">
                                    <img src="{{asset('fe/assets')}}/img/blog/9.jpg" alt="blog-9">
                                </div>
                                <div class="blog-contact">
                                    <span>Jan 10,2022 - organic</span>
                                    <h4><a href="blog-detail-left-sidebar.html">Business ideas to grow your business.</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="blog-2-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                                <div class="blog-img">
                                    <img src="{{asset('fe/assets')}}/img/blog/10.jpg" alt="blog-10">
                                </div>
                                <div class="blog-contact">
                                    <span>Feb 12,2022 - organic</span>
                                    <h4><a href="blog-detail-left-sidebar.html">31 customer stats know in 2020.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Instagram -->
        <section class="section-instagram padding-tb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bb-title">
                            <h3>#Insta</h3>
                        </div>
                        <div class="bb-instagram-slider owl-carousel">
                            <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('fe/assets')}}/img/instagram/1.jpg" alt="instagram-1">
                                    </a>
                                </div>
                            </div>
                            <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('fe/assets')}}/img/instagram/2.jpg" alt="instagram-2">
                                    </a>
                                </div>
                            </div>
                            <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('fe/assets')}}/img/instagram/3.jpg" alt="instagram-3">
                                    </a>
                                </div>
                            </div>
                            <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('fe/assets')}}/img/instagram/4.jpg" alt="instagram-4">
                                    </a>
                                </div>
                            </div>
                            <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('fe/assets')}}/img/instagram/5.jpg" alt="instagram-5">
                                    </a>
                                </div>
                            </div>
                            <div class="bb-instagram-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                                <div class="instagram-img">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('fe/assets')}}/img/instagram/6.jpg" alt="instagram-6">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection