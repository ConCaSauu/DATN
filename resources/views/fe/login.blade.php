@extends('fe.index')

@section('content')
 <!-- Breadcrumb -->
 <section class="section-breadcrumb margin-b-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row bb-breadcrumb-inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="bb-breadcrumb-title">Login</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="bb-breadcrumb-list">
                            <li class="bb-breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li><i class="ri-arrow-right-double-fill"></i></li>
                            <li class="bb-breadcrumb-item active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Login -->
<section class="section-login padding-tb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title bb-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail">
                        <h2 class="bb-title">Log <span>In</span></h2>
                        <p>Best place to find Jobs</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="bb-login-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <form method="POST">
                        @csrf
                        <div class="bb-login-wrap">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" placeholder="Enter Your Email">
                        </div>  
                        <div class="bb-login-wrap">
                            <label for="email">Password*</label>
                            <input type="password" id="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div class="bb-login-wrap">
                            <a href="javascript:void(0)">Forgot Password?</a>
                        </div>
                        <div class="bb-login-button">
                            <button class="bb-btn-2" type="submit">Login</button>
                            <a href="{{route('Uregister')}}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection