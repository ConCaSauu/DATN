@foreach($jobs as $job)
    <div class=" bb-pro-box jod " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{$num*150}}">
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
    <div style="display:none;height:0;width:0">{{$num++}}</div>
@endforeach
