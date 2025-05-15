@extends('fe.index')
@section('content')
<section class="section-cart padding-tb-50">
<script>
    let passwordVisible = false;
</script>

    <div class="container">
        <div class="row mb-minus-24">
            <div class="col-lg-3 mb-24">
                <div class="bb-cart-sidebar-block fit-ct">              
                    <div class="profile-logo">
                        @if (Auth::user()->logo)
                            <img src="{{asset('upload/images')}}/{{Auth::user()->logo}}" alt="logo">
                        @else 
                            <img src="{{asset('upload/images')}}/{{Auth::user()->gender == 1 ? 'male.png' : 'female.png'}}">
                        @endif
                    </div>    
                    <div style="text-align: center">
                        <p style="margin-left:10px; font-family:quicksand; font-weight:bold; font-size:28px; color:#6c7fd8">{{Auth::user()->name}}</p><br>
                        @if(Auth::user()->role == 'employee')
                        <p style="margin-left: 10px">{{\Carbon\Carbon::parse(Auth::user()->birthday)->format('d/m/Y')}}</p>
                        @elseif(Auth::user()->role == 'company')
                            @if (Auth::user()->web)
                            <a style="margin-left: 10px; text-decoration: underline" href="{{Auth::user()->web}}">{{Auth::user()->web}}</a></br>
                            @else
                            @endif
                        <strong>G Coin: {{Auth::user()->coin}}</strong>
                        @else
                        <p style="margin-left: 10px">{{\Carbon\Carbon::parse(Auth::user()->birthday)->format('d/m/Y')}}</p>
                            @if (Auth::user()->web)
                            <a style="margin-left: 10px; text-decoration: underline" href="{{Auth::user()->web}}">{{Auth::user()->web}}</a></br>
                            @else
                            @endif
                        <strong>G Coin: {{Auth::user()->coin}}</strong>
                        @endif
                    </div>
                </div> 
                <div class="" style="margin-top: 15px; margin-left: 5px; margin-right: 5px; ">
                    <div class="profile-cat">
                        <a href="#" onclick="loadView(event, 'account')">
                            <h5 >Account</h5>
                        </a>  
                        <div class="bottom-bor"></div>                     
                    </div>
                    @if(Auth::user()->role == 'admin')
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'cv')">
                                <h5 >CV</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'jobIndex')">
                                <h5 >Job</h5>
                            </a>    
                            <div class="bottom-bor"></div>                   
                        </div>
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'buyCoin')">
                                <h5 >Buy G Coin</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'buySlot')">
                                <h5>Buy Slot</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                    @elseif(Auth::user()->role == 'company')
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'jobIndex')">
                                <h5 >Job</h5>
                            </a>    
                            <div class="bottom-bor"></div>                   
                        </div>
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'buyCoin')">
                                <h5>Buy G Coin</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'buySlot')">
                                <h5>Buy Slot</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                    @else
                        <div class="profile-cat">
                            <a href="#" onclick="loadView(event, 'cv')">
                                <h5 >CV</h5>
                            </a>      
                            <div class="bottom-bor"></div>                 
                        </div>
                    @endif
                    <div class="profile-cat">
                        <a href="#" onclick="loadView(event, 'application')">
                            <h5 >{{Auth::user()->role == 'employee' ? 'Job Applied' : 'Application'}}</h5>
                        </a>    
                        <div class="bottom-bor"></div>                   
                    </div>
                    <div class="profile-cat">
                        <a href="#" onclick="loadView(event, 'changePass')">
                            <h5 >Change email/password</h5>
                        </a>      
                        <div class="bottom-bor"></div>                 
                    </div>
                </div>               
            </div>
            <div class="col-lg-9 mb-24">
                <div id="profileContent" class="bb-cart-table ">
                    @include('fe.profile.account', ['user' => Auth::user()])
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    function loadView(event, view) {
        event.preventDefault(); // Ngăn trang nhảy lên đầu
        const scrollPosition = $(window).scrollTop(); // Lưu vị trí cuộn hiện tại

        $.ajax({
            url: `/profile/${view}`,
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#profileContent').html(response);
                $(window).scrollTop(scrollPosition); // Khôi phục vị trí cuộn
            },
            error: function(xhr) {
                $('#profileContent').html('<p>Lỗi khi tải dữ liệu</p>');
            }
        });
    }

    // function loadView(view) {
    //         const scrollPosition = $(window).scrollTop();
    //         // Gọi AJAX
    //         $.ajax({
    //             url: `/profile/${view}`,
    //             method: 'GET',
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             success: function(response) {
    //                 $('#profileContent').html(response);
    //                 // Cập nhật trạng thái tab
    //                 // $('.tab-button').removeClass('active');
    //                 // $(`button:contains('${view}')`).addClass('active');
    //             },
    //             error: function(xhr) {
    //                 $('#profile-content').html('<p>Lỗi khi tải dữ liệu</p>');
    //             }
    //         });
    //     }

    function edit() {
        // Ẩn form 2
        document.getElementById('formDisable').classList.add('hidden');
        // Hiện form 1
        document.getElementById('formUpdate').classList.remove('hidden');
    }

    function cancel() {
        // Ẩn form 1
        document.getElementById('formUpdate').classList.add('hidden');
        // Hiện form 2
        document.getElementById('formDisable').classList.remove('hidden');
    }

    // function showView(name){
    //     const views = document.querySelectorAll('.view-profile');
    //     views.forEach(view => {
    //         view.style.display = view.id === name ? 'block' : 'none';
    //     })
    // }

    function validatePassword() {
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('new_password_confirmation').value;
            const message = document.getElementById('password-message');
            const button = document.getElementById('change_password');
            // Chỉ kiểm tra khi trường xác nhận mật khẩu không rỗng
            if (confirmPassword !== "") {
                
                if (newPassword !== confirmPassword) {
                    message.innerText = "Confirmation password does not match.";
                    message.style.color = "red";
                    button.disabled = true;
                } else {
                    message.innerText = "Your password is matching"; // Xóa thông báo khi mật khẩu khớp
                    message.style.color = "green";
                    button.disabled = false;
                }
            } else {
                message.innerText = "Password checking ..."; // Xóa thông báo khi trường xác nhận mật khẩu rỗng
                message.style.color = "orange";
                button.disabled = true;
            }
    }

    function togglePasswordVisibility() {
            
            passwordVisible = !passwordVisible; 

            const inputs = ['current_password', 'new_password', 'new_password_confirmation'];
            inputs.forEach(inputId => {
                const input = document.getElementById(inputId);
                input.type = passwordVisible ? "text" : "password"; 
            });
    }    

    function validateInputs() {
            const salaryMin = document.getElementById('salaryMin').value;
            const salaryMax = document.getElementById('salaryMax').value;
            const saveB = document.getElementById('saveB');
            const errorMessage = document.getElementById('errorMessage');

            // Reset thông báo lỗi
            errorMessage.style.display = 'none';
            errorMessage.textContent = '';

            // Kiểm tra điều kiện
            const isMinFilled = salaryMin !== '';
            const isMaxFilled = salaryMax !== '';
            const isValidRange = isMinFilled && isMaxFilled && (parseFloat(salaryMin) < parseFloat(salaryMax));

            // Nếu thỏa mãn điều kiện thì kích hoạt button, ngược lại thì disable
            if ((isMinFilled || isMaxFilled) && (!isMaxFilled || isValidRange)) {
                saveB.disabled = false; // Kích hoạt button
            } else {
                saveB.disabled = true; // Vô hiệu hóa button

                // Hiển thị thông báo lỗi
                if (!isMinFilled && !isMaxFilled) {
                    errorMessage.textContent = 'Please enter at least one value for Salary Min or Salary Max.';
                } else if (isMinFilled && isMaxFilled && !isValidRange) {
                    errorMessage.textContent = 'Salary Min must be less than Salary Max.';
                }
                errorMessage.style.display = 'block'; // Hiển thị thông báo lỗi
            }
        }
</script>
@endsection