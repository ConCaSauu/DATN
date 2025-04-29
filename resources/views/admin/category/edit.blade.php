@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Categories</h3>
              </div>
              {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif              --}}
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('category.update', $category)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name') ? old('name') :$category->name}}" name="name" id="exampleInputEmail1" placeholder="...">
                    @error('name')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Icon</label></br>
                    <input type="text" class="form-control" name="icon" value="{{$category->icon}}" placeholder="Your icon url" required>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="...">{{$category->description}}</textarea>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Status</label>
                    <div class="form-check">
                      <input type="radio" name="status" id="input" value="active" {{$category->status == "active" ? 'checked' : ''}}>
                      <label class="form-check-label">Active</label>
                    </div>
                    <div class="form-check ">
                      <input type="radio" name="status" id="input" value="unactive" {{$category->status == "unactive" ? 'checked' : ''}}>
                      <label class="form-check-label">Unactive</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
