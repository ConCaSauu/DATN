@extends('fe.index')

@section('content')
<section class="section-breadcrumb margin-b-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row bb-breadcrumb-inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="bb-breadcrumb-title">Register</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="bb-breadcrumb-list">
                            <li class="bb-breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li><i class="ri-arrow-right-double-fill"></i></li>
                            <li class="bb-breadcrumb-item active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Register -->
<section class="section-register padding-tb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bb-register" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title bb-center">
                                <div class="section-detail">
                                    <h2 class="bb-title">Register<span> as a Employee</span></h2>
                                    <p>or</p>
                                    <a href="{{route('UCregister')}}">Register as a Company</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <form method="post">
                                @csrf
                                <input type="hidden" name="role" value="employee">
                                <input type="hidden" name="status" value="active">
                                <div class="bb-register-wrap bb-register-width-50">
                                    <label>Name*</label>
                                    <input type="text" name="name" placeholder="Enter your first name" required>
                                </div>
                                <div class="bb-register-wrap bb-register-width-50">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your Email" required>
                                </div>
                                <div class="bb-register-wrap bb-register-width-50">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phone_number" placeholder="Enter your phone number" required>
                                </div>
                                <div class="bb-register-wrap bb-register-width-50">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="bb-register-button">
                                    <button type="submit" class="bb-btn-2">Register</button>
                                </div>
            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection