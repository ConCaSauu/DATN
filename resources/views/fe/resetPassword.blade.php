@extends('fe.index')

@section('content')
<script>
    let passwordVisible = false;
</script>
<section class="section-breadcrumb margin-b-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row bb-breadcrumb-inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="bb-breadcrumb-title">Reset</h2>
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
                                    <label>Password*</label>
                                    <input id="password" type="password" name="password" placeholder="Enter your new password" required>
                                    @error('password')
                                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="bb-register-wrap bb-register-width-50">
                                    <label>Confirm Password*</label>
                                    <input id="confirm-password" type="password" name="confirm-password" placeholder="Enter your new password" required>
                                    @error('confirm-password')
                                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="bb-register-button">
                                    <button type="button" class="bb-btn-2" onclick="togglePasswordVisibility()" style="margin-right: 5px">👁️</button>
                                    <button type="submit" class="bb-btn-2">Save</button>
                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function togglePasswordVisibility() {
            
            passwordVisible = !passwordVisible; 

                const inputs = ['password', 'confirm-password'];
            inputs.forEach(inputId => {
                const input = document.getElementById(inputId);
                input.type = passwordVisible ? "text" : "password"; 
            });
    }
</script>
@endsection