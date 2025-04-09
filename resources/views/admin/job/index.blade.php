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
                    <th scope="col">Category Id</th>
                    <th scope="col">Company Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary Min</th>
                    <th scope="col">Salary Max</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jobs as $item)

                    <tr>
                            
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->ucid}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{number_format($item->salary_min)}} vnd</td>
                        <td>{{number_format($item->salary_max)}} vnd</td>
                        <td>
                            @if ($item->status==1)
                                <span class="text text-success">Active</span>
                            @else
                                <span class="text text-danger">Unactive</span>
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            
                            <a href="{{route('job.edit', $item->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            
                            <form onsubmit="return confirm('Do you want to delete this category?');" action="{{route('job.destroy',$item)}}" method="POST">
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