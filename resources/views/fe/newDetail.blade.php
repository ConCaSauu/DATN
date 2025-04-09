@extends('fe.index')
@section('content')
<section class="section-blog-details padding-tb-50">
    <div class="container">
        <div class="row mb-minus-24">
            <div class="col-xl-4 col-lg-5 col-12 mb-24">
                <div class="bb-blog-sidebar">
                    <div class="blog-inner-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="blog-sidebar-title">
                            <h4>Recent Articles</h4>
                        </div>
                        <div class="blog-sidebar-card">
                            <div class="inner-image">
                                <img src="assets/img/blog/7.jpg" alt="blog">
                            </div>
                            <div class="blog-sidebar-contact">
                                <span>Marketing</span>
                                <h4><a href="blog-detail-left-sidebar.html">Marketing Guide: 5 Steps to Success.</a></h4>
                                <p>February 10, 2025</p>
                            </div>
                        </div>
                        <div class="blog-sidebar-card">
                            <div class="inner-image">
                                <img src="assets/img/blog/8.jpg" alt="blog">
                            </div>
                            <div class="blog-sidebar-contact">
                                <span>Business</span>
                                <h4><a href="blog-detail-left-sidebar.html">Business ideas to grow your business.</a></h4>
                                <p>Jan 1, 2024</p>
                            </div>
                        </div>
                        <div class="blog-sidebar-card">
                            <div class="inner-image">
                                <img src="assets/img/blog/9.jpg" alt="blog">
                            </div>
                            <div class="blog-sidebar-contact">
                                <span>Business</span>
                                <h4><a href="blog-detail-left-sidebar.html">Best way to solve business deal issue.</a></h4>
                                <p>Jun 02, 2024</p>
                            </div>
                        </div>
                        <div class="blog-sidebar-card">
                            <div class="inner-image">
                                <img src="assets/img/blog/10.jpg" alt="blog">
                            </div>
                            <div class="blog-sidebar-contact">
                                <span>Customer</span>
                                <h4><a href="blog-detail-left-sidebar.html">31 customer stats know in 2025.</a></h4>
                                <p>May 20, 2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-inner-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        {{-- <div class="blog-sidebar-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="blog-categories">
                            <ul>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Business</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Marketing</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Food blogs</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Lifestyle</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Fashion</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Travel</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="bb-sidebar-block-item">
                                        <input type="checkbox">
                                        <a href="javascript:void(0)">Fitness</a>
                                        <span class="checked"></span>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-12 mb-24">
                <div class="bb-blog-details-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">

                    <div class="inner-blog-details-contact new-content">
                        <span>{{$new->created_at}}</span>
                        <h4 class="sub-title" style="font-family: quicksand">{!!$new->title!!}</h4>
                        <p style="font-family: quicksand">{!!$new->preview!!}</p>
                        <p style="font-family: quicksand">{!!$new->content!!}</p>
                    </div>
                    {{-- <div class="col-12">
                        <div class="bb-pro-pagination">
                            <p>Showing 1-12 of 21 item(s)</p>
                            <ul>
                                <li class="active">
                                    <a href="javascript:void(0)">1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">2</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">3</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">4</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="next">Next <i class="ri-arrow-right-s-line"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>
@endsection