@extends('fe.index')

@section('content')
<section class="section-breadcrumb margin-b-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row bb-breadcrumb-inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="bb-breadcrumb-title">Reset Password</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="bb-breadcrumb-list">
                            <li class="bb-breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li><i class="ri-arrow-right-double-fill"></i></li>
                            <li class="bb-breadcrumb-item active">Reset Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reset Password -->
<section class="section-register padding-tb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bb-register" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title bb-center">
                                <div class="section-detail">
                                    <h2 class="bb-title">Reset Password</h2>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <form method="post">
                                @csrf
                                <div class="bb-register-wrap bb-register-width-50">
                                    <label>Email*</label>
                                    <input type="text" name="email" placeholder="Enter your email" required>
                                    @error('email')
                                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="bb-register-button">
                                    <button type="submit" class="bb-btn-2">Continue</button>
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