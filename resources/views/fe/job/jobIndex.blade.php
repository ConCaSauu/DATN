@extends('fe.index')
@section('content') 
    <!-- Category section -->
    <section class="section-category padding-t-50 mb-24">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bb-category-6-colum owl-carousel">
                        @foreach ($cateWithJobCount as $category)
                            <div class="bb-category-box category-items-{{$i}}" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500" style="padding: 30px 15px">
                                <div class="category-image">
                                    <img src="{{$category->icon}}" alt="category">
                                </div>
                                <div class="category-sub-contact">
                                    <h5><a href="#" class="category-link" 
                                        data-id="{{ $category->id }}">{{$category->name}}</a></h5>
                                    <p>{{$category->jobs_count}}</p>
                                </div>
                                <div class="hidden">{{$i++}}</div>
                            </div>
                        @endforeach
                        
                        {{-- <div class="bb-category-box category-items-2" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                            <div class="category-image">
                                <img src="https://cdn-icons-png.flaticon.com/512/18148/18148527.png" alt="category">
                            </div>
                            <div class="category-sub-contact">
                                <h5><a href="shop-left-sidebar-col-3.html">Marketing</a></h5>
                                <p>40 Jobs</p>
                            </div>
                        </div>
                        <div class="bb-category-box category-items-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                            <div class="category-image">
                                <img src="https://cdn-icons-png.flaticon.com/512/3271/3271314.png" alt="category">
                            </div>
                            <div class="category-sub-contact">
                                <h5><a href="shop-left-sidebar-col-3.html">Sale</a></h5>
                                <p>63 Jobs</p>
                            </div>
                        </div>
                        <div class="bb-category-box category-items-4" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                            <div class="category-image">
                                <img src="https://cdn-icons-png.flaticon.com/512/1024/1024965.png" alt="category">
                            </div>
                            <div class="category-sub-contact">
                                <h5><a href="shop-left-sidebar-col-3.html">Accounting</a></h5>
                                <p>12 Jobs</p>
                            </div>
                        </div>
                        <div class="bb-category-box category-items-2" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                            <div class="category-image">
                                <img src="https://cdn-icons-png.flaticon.com/512/993/993515.png" alt="category">
                            </div>
                            <div class="category-sub-contact">
                                <h5><a href="shop-left-sidebar-col-3.html">Technology</a></h5>
                                <p>21 Jobs</p>
                            </div>
                        </div>
                        <div class="bb-category-box category-items-3" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="500">
                            <div class="category-image">
                                <img src="https://cdn-icons-png.flaticon.com/512/4308/4308094.png" alt="category">
                            </div>
                            <div class="category-sub-contact">
                                <h5><a href="shop-left-sidebar-col-3.html">Auditing</a></h5>
                                <p>08 Jobs</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop section -->
    <section class="section-shop padding-b-50">
        <div class="container">
            <div class="row mb-minus-24">
                <div class="col-lg-3 col-12 mb-24">
                    <div class="bb-shop-wrap">
                        <div class="bb-sidebar-block">
                            <div class="bb-sidebar-title">
                                <h3>Category</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    @foreach ($cateWithJobCount as $key)
                                    <li>
                                        <div class="bb-sidebar-block-item">
                                            <input type="checkbox">
                                            <a href="javascript:void(0)">{{$key->name}}</a>
                                            <span class="checked"></span>
                                        </div>
                                    </li>
                                    @endforeach  
                                </ul>
                            </div>
                        </div>
                        <div class="bb-sidebar-block">
                            <div class="bb-sidebar-title">
                                <h3>Location</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    <li>
                                        <div style="display: flex;" class="bb-sidebar-block-item1">
                                            <input id="input1" style="width:7%; margin: 0px 3px;" type="checkbox" name="location" value="Ha Noi">
                                            <a class="check-control" data-target="input1" style="width: -webkit-fill-available; padding-left: 10px;" href="">Ha Noi</a>
                                            <span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div style="display: flex;" class="bb-sidebar-block-item1">
                                            <input id="input2" style="width:7%; margin: 0px 3px;" type="checkbox" name="location" value="Ho Chi Minh">
                                            <a class="check-control" data-target="input2" style="width: -webkit-fill-available; padding-left: 10px;" href="">Ho Chi Minh</a>
                                            <span class="checked"></span>
                                        </div>
                                    </li>    
                                </ul>
                            </div>
                        </div>
                    
                        <div class="bb-sidebar-block">
                            <div class="bb-sidebar-title">
                                <h3>Salary</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    <li>
                                        <div class="bb-sidebar-block-item1" style="display: flex">
                                            <p style="align-content: center; width: 73%;">Salary Min:</p>
                                            <input type="number" id="salary_min" style="width:25%; ">
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bb-sidebar-block-item1" style="display: flex;">
                                            <p style="align-content: center; width: 73%">Salary Max:</p>
                                            <input type="number" id="salary_max" style="width:25%; ">
    
                                        </div>
                                    </li>    
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-9 col-12 mb-24">
                    <div id="job-list" class="bb-shop-pro-inner">
                        @include('fe.job.jobList',['jobs' => $jobs])
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.querySelectorAll('.check-control').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // Ngăn hành vi mặc định của thẻ a
    
    // Lấy ID input từ thuộc tính data-target
    const targetId = this.dataset.target;
    const targetInput = document.getElementById(targetId);
    
    if (targetInput) {
      // Đảo trạng thái checked (cho checkbox) hoặc chọn (cho radio)
      targetInput.checked = !targetInput.checked;
      
      // Hoặc luôn check khi click (bỏ dòng trên và dùng dòng này)
      // targetInput.checked = true;
    }
  });
});

$(document).ready(function(){

    // Khi click category => reset location & salary, set active, load page 1
    $('.category-link').click(function(e){
        e.preventDefault();
        $('.category-link').removeClass('active');
        $(this).addClass('active');

        // reset các input location và salary
        $('input[name="location"]').prop('checked', false);
        $('#salary_min, #salary_max').val('');

        loadJobs(1);
    });

    // Đảm bảo chỉ chọn 1 location tại 1 time
    $('input[name="location"]').change(function(){
        // if ($('input[name="location"]:checked').length > 1) {
        //     // bỏ checked của input đầu tiên
        //     $('input[name="location"]:checked').first().prop('checked', false);
        // }
        // Lưu trạng thái vừa được tick/untick
        var isChecked = $(this).is(':checked');

        // Bỏ chọn tất cả các checkbox khác
        $('input[name="location"]').not(this).prop('checked', false);

        // Nếu checkbox này vừa được tick (isChecked === true), gọi loadJobs
        // Nếu vừa được untick (isChecked === false), bạn cũng có thể gọi loadJobs
        // để hiển thị lại tất cả job (không lọc theo location)
        loadJobs(1);
        loadJobs(1);
    });

    // Khi user nhập salary và blur hoặc nhấn Enter, load lại
    // $('#salary_min, #salary_max').on('keypress blur', function(e){
    //     if (e.type === 'blur' || e.key === 'Enter') {
    //         loadJobs(1);
    //     }
    // });
    var typingTimer;
    var typingInterval = 500; // 0.5 giây sau khi ngừng gõ mới gọi

    // Bắt sự kiện input cho salary_min và salary_max
    $('#salary_min, #salary_max').on('input', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(function(){
        loadJobs(1);
        }, typingInterval);
    });


    // Hàm loadJobs qua AJAX
    function loadJobs(page) {
        var category = $('.category-link.active').data('id') || '';
        var location = $('input[name="location"]:checked').val() || '';
        var salary_min = $('#salary_min').val();
        var salary_max = $('#salary_max').val();

        $.ajax({
            url: '{{ route("jobFetch") }}',
            data: {
                page: page,
                category: category,
                location: location,
                salary_min: salary_min,
                salary_max: salary_max
            },
            success: function(res) {
                $('#job-list').html(res.html);
                AOS.init({
                    duration: 1000,
                    once: true
                }); // Khởi tạo lại thay vì refresh
                // scroll lên đầu container nếu muốn
                // $('html, body').animate({ scrollTop: $('#job-container').offset().top }, 'fast');
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                console.log('Response Text:', xhr.responseText);
                alert('Có lỗi xảy ra khi tải dữ liệu. Vui lòng kiểm tra console để biết chi tiết.');
            }
        });
    }

    // Bắt sự kiện click phân trang (delegation)
    $(document).on('click', '#job-list .pagination a', function(e){
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        loadJobs(page);
    });

});
</script>
@endsection