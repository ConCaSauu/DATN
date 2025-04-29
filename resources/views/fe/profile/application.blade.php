<div id="application" class="view-profile">
    <h4 style="margin: 10px; margin-bottom:25px">Your Applications</h4>
    @if(Auth::user()->role == 'company' || Auth::user()->role == 'admin')
    <table class="table-apply" >
        <tr>
            <th>Id</th>
            <th>Job Name</th>
            <th>Employee Name</th>
            <th>Apply At</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($applications as $apl)
        <tr>
            <td>{{$apl->id}}</td>
            <td>{{$apl->job_name}}</td>
            <td>{{$apl->user_name}}</td>
            <td>{{$apl->created_at}}</td>
            @if($apl->status == 'pending')
            <td style="color: orange">Pending</td>
            @elseif($apl->status == 'approved')
            <td style="color: green">Approved</td>
            @elseif($apl->status == 'rejected')
            <td style="color: red">Rejected</td>
            @else
            <td style="color: red">Canceled</td>
            @endif
            <td>
                @if($apl->status == 'pending')
                <a href="" style="color:rgb(100, 100, 255)">Check Cv</a></br>
                <a href="{{route('approveAPL',['id'=> $apl->id])}}" style="color:green ">Approve</a><p> </p>
                <a href="{{route('rejectAPL',['id'=> $apl->id])}}" style="color:red">Reject</a>
                @elseif($apl->status == 'approved')
                <a href="" style="color:rgb(100, 100, 255)">Check Cv</a>
                @else
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    @elseif(Auth::user()->role == 'employee')
    <table class="table-apply">
        <tr>
            <th>Id</th>
            <th>Job Name</th>
            <th>Company Name</th>
            <th>Apply At</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($applications as $apl)
        <tr>
            <td>{{$apl->id}}</td>
            <td>{{$apl->job_name}}</td>
            <td>{{$apl->com_name}}</td>
            <td>{{$apl->created_at}}</td>
            @if($apl->status == 'pending')
            <td style="color: orange">Pending</td>
            @elseif($apl->status == 'approved')
            <td style="color: green">Approved</td>
            @else
            <td style="color: red">Rejected</td>
            @endif
            <td>
                @if($apl->status == 'pending')
                <a href="{{route('cancelAPL', ['id' => $apl->id])}}" style="color:red">Cancel</a>
                @else
                
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    @else
    @endif
</div>