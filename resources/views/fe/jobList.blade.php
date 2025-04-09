@foreach($jobs as $job)
    <div class="col-md-4 col-6 mb-24 bb-product-box pro-bb-content" data-aos="fade-up"
        data-aos-duration="1000" data-aos-delay="200" style="margin-bottom:10px; padding: 0px 5px">
            <div class="bb-pro-box">
                <div class="bb-pro-contact">
                    <div class="bb-pro-subtitle">
                        <a style="font-family: quicksand; color:#8c8c8c; font-weight: 600;" href="#">{{$job->com_name}}</a>
                    </div>
                    <div style="display: flex">
                        <div class="logo-align" style="width:25%; height:auto">
                            <img src="{{asset('upload/images')}}/fpt.png" style=" margin:auto; width:100%">
                        </div>
                        <div style="margin-left: 10px; width: 75%">
                            <h4 class="bb-pro-title"><a title="{{$job->name}}" style="font-size: 18px; line-height: normal;" href="{{route('job_detail', ['id' => $job->id] )}}">{{$job->name}}</a>
                            </h4>
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
                </div>
            </div>
    </div>
@endforeach                            