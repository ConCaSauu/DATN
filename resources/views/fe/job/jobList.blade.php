

<div class="row mb-minus-24">
    <div class="col-12">
        <div class="bb-pro-list-top">
            <div class="row">
                <div class="col-6">
                    <div class="bb-bl-btn">
                        <button type="button" class="grid-btn btn-grid-100 active">
                            <i class="ri-apps-line"></i>
                        </button>
                        {{-- <button type="button" class="grid-btn btn-list-100">
                            <i class="ri-list-unordered"></i>
                        </button> --}}
                    </div>
                </div>
                <div class="col-6">
                    <div class="bb-select-inner">
                        {{-- <div class="custom-select">
                            <select>
                                <option selected disabled>Sort by</option>
                                <option value="1">Position</option>
                                <option value="2">Relevance</option>
                                <option value="3">Name, A to Z</option>
                                <option value="4">Name, Z to A</option>
                                <option value="5">Price, low to high</option>
                                <option value="6">Price, high to low</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($jobs as $job)
        <div class="col-md-4 col-6 mb-24 bb-product-box pro-bb-content" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200" style="margin-bottom:9px; padding: 0px 4px">
                <div class="bb-pro-box" style="height: 100%">
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
    @if($jobs->hasPages())
    <div class="col-12">
        <div class="bb-pro-pagination">
            <p></p>
            {{ $jobs->links('fe.job.paginationJob')}}
        </div>
    </div>
    @endif
</div>                          