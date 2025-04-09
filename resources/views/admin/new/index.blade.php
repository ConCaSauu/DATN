@extends('admin.master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">List News</h3>
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
                    <th scope="col">Title</th>
                    <th scope="col">Preview</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($news as $new)

                    <tr>
                            
                        <th scope="row">{{$new->id}}</th>
                        <td>{{$new->title}}</td>
                        <td>{!!Str::limit($new->preview, 200)!!}</td>
                        <td>{!!Str::limit($new->content, 255)!!}</td>
                        <td>
                            @if ($new->status==1)
                                <span class="text text-success"><label class="col-form-label">Active</label></span>
                            @else
                                <span class="text text-danger"><label class="col-form-label">Unactive</label></span>
                            @endif
                        </td>
                        <td>{{$new->created_at}}</td>
                        <td>{{$new->updated_at}}</td>
                        <td>
                            <a href="{{route('new.edit', $new->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form onsubmit="return confirm('Do you want to delete this newgory?');" action="{{route('new.destroy',$new)}}" method="POST">
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