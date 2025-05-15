<div id="job" class="view-profile">
    <h4 style="margin: 10px; margin-bottom:25px">Job</h4>
    <p style="float: right">Slot available: {{$slot}}</p>
    <table class="table-apply" >
        <tr>
            <th>Id</th>
            <th>Job Name</th>
            <th>Company Name</th>
            <th>Apply At</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @if($jobs)
            @foreach($jobs as $job)
            <tr>
                <td>{{$job->id}}</td>
                <td>{{$job->name}}</td>
                <td>{{Auth::user()->name}}</td>
                <td>{{$job->created_at}}</td>
                @switch($job->status)
                    @case('pending')
                    <td style="color: orange">Pending</td>
                        @break
                    @case('active')
                    <td style="color: green">Active</td>
                        @break
                    @case('unactive')
                    <td style="color: red">Unactive</td>
                        @break
                    @case('lock')
                    <td style="color: red">Lock</td>
                        @break
                @endswitch
                <td>
                    @if($job->status == 'active')
                    <a href="#" style="color: brown">Hide</a>
                    @elseif($job->status == 'unactive')
                    <a href="#" style="color: brown">Active</a>
                    @else
                    @endif
                    <a href="#" style="color: #6c7fd8" onclick="loadEditView(event, {{$job->id}})">Edit</a></br>
                    @if($job->level == '0' && $job->status != 'pending')
                    <a href="{{route('job.upgrade',$job)}}">Upgrade</a>
                    @else
                    @endif
                </td>
            </tr>
            @endforeach
        @else
            
        @endif
    </table>
    <div class="bb-register-button margin-bot-10" style="margin-top:15px">
        <button type="button" id="createJob" class="bb-btn-2" @if($slot < 1) disabled data-bs-toggle="tooltip" data-bs-placement="top" title="You have 0 slot!" @endif onclick="loadView(event, 'jobCreate')">Create Job</button>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('[data-bs-toggle="tooltip"]').tooltip();
    });

        function loadEditView(event, id) {
            event.preventDefault();
            // Gọi AJAX
            $.ajax({
                url: `/profile/jobEdit/${id}`,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('#profileContent').html(response);
                    // Cập nhật trạng thái tab
                    // $('.tab-button').removeClass('active');
                    // $(`button:contains('${view}')`).addClass('active');
                },
                error: function(xhr) {
                    $('#profile-content').html('<p>Lỗi khi tải dữ liệu</p>');
                }
            });
        }
        
</script>