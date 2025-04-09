@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit News</h3>
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
              <form method="post" action="{{route('new.update', $new)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$new->id}}">
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('title') ? old('title') :$new->title}}" name="title" id="exampleInputEmail1" placeholder="...">
                    @error('name')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group has-error">
                    <label for="exampleInputPassword1">Preview</label>
                    <textarea type="text" class="form-control" name="preview" id="exampleInputPassword1" placeholder="...">{{$new->preview}}</textarea>
                  </div>
                  <div class="form-group has-error">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea type="text" class="form-control" name="content" id="exampleInputPassword1" placeholder="...">{{$new->content}}</textarea>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Status</label>
                    <div class="form-check">
                      <input type="radio" name="status" id="input" value="1" {{$new->status == 1 ? 'checked' : ''}}>
                      <label class="form-check-label">Active</label>
                    </div>
                    <div class="form-check ">
                      <input type="radio" name="status" id="input" value="0" {{$new->status == 0 ? 'checked' : ''}}>
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
