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
                            @if ($user->status=='Active')
                                <span class="text text-success">Active</span>
                            @elseif($user->status=='Pending')
                                <span class="text text-danger">Pending</span>
                            @else
                                <span class="text text-danger">Lock</span>
                            @endif
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            
                            <a href="{{route('job.edit', $user->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            
                            <form onsubmit="return confirm('Do you want to delete this category?');" action="{{route('job.destroy',$user)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                
                                <button type="submit" class="btn btn-danger" value=""><i class="fa-solid fa-trash"></i> Delete</button>  
                            </form>
                            
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

@endsection

{{--  

--}}