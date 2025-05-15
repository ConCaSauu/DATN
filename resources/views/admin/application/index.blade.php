@extends('admin.master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">List Categories</h3>
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
                    <th scope="col">Job Name</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Apply At</th>
                    <th scope="col">Status</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applications as $application)

                    <tr>
                            
                        <th scope="row">{{$application->id}}</th>
                        <td>{{$application->job_name}}</td>
                        <td>{{$application->user_name}}</td>
                        <td>{{$application->created_at}}</td>
                        <td>
                            @if ($application->status=="approved")
                                <span class="text text-success"><label class="col-form-label">Approved</label></span>
                            @elseif($application->status=="rejected")
                                <span class="text text-danger"><label class="col-form-label">Rejected</label></span>
                            @elseif($application->status=="pending")
                                <span class="text text-warning"><label class="col-form-label">Pending</label></span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('application.detail', $application->id)}}"><i class="fa-solid fa-eye"></i></a>
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