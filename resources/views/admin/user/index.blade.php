@extends('admin.master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">List Jobs</h3>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body"> 
        <div class="table table-responsive">            
            <table id="tb" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                    <th scope="col">Cv Id</th>
                    <th scope="col">Logo</th>
                    <th scope="col">City</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)

                    <tr>
                            
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->cv_id}}</td>
                        <td>{{$user->logo}}</td>
                        <td>{{$user->city}}</td>
                        <td>
                            @if ($user->status=='active')
                                <span class="text text-success">Active</span>
                            @elseif($user->status=='pending')
                                <span class="text text-danger">Pending</span>
                            @else
                                <span class="text text-danger">Lock</span>
                            @endif
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td style="display: flex">
                            <a style="flex: 1" href="{{route('job.edit', $user->id)}}"><i class="fa-solid fa-pen-to-square"></i> </a>
                            @if ($user->status == 'active')
                                <a href="{{route('user.lock',$user)}}" style="flex: 1" onclick="lockUserWithConfirmation(event)"><i style="color: red" class="fa-solid fa-lock"></i> </a>  
                            @elseif($user->status == 'lock')
                                <a href="{{route('user.unlock',$user)}}" style="flex: 1" onclick="unlockUserWithConfirmation(event)"><i style="color: green" class="fa-solid fa-key"></i> </a>  
                            @else
                            @endif
                        </td>
                    </tr>
                    @empty
                        <h2>No Data</h2>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function lockUserWithConfirmation(event) {
            
        const confirmed = confirm('Are you sure you want to lock this User?');
        if(!confirmed) {
            event.preventDefault(); // prevent default link behavior
        }
    }
    function unlockUserWithConfirmation(event) {
        
        const confirmed = confirm('Are you sure you want to unlock this User?');
        if(!confirmed) {
            event.preventDefault(); // prevent default link behavior
        }
    }
</script>
@endsection

{{--  

--}}