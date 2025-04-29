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
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $cate)

                    <tr>
                            
                        <th scope="row">{{$cate->id}}</th>
                        <td>{{$cate->name}}</td>
                        <td>{{$cate->description}}</td>
                        <td>
                            @if ($cate->status=="active")
                                <span class="text text-success"><label class="col-form-label">Active</label></span>
                            @else
                                <span class="text text-danger"><label class="col-form-label">Unactive</label></span>
                            @endif
                        </td>
                        <td>{{$cate->created_at}}</td>
                        <td>{{$cate->updated_at}}</td>
                        <td>
                            <a href="{{route('category.edit', $cate->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form onsubmit="return confirm('Do you want to delete this category?');" action="{{route('category.destroy',$cate)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
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