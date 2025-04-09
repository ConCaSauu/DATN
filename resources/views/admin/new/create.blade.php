@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create News</h3>
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
              <form method="post" action="{{route('new.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="title" id="exampleInputEmail1" placeholder="...">
                    @error('title')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Preview</label>
                    <textarea name="preview" id="preview" placeholder="..."></textarea>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Content</label>
                    <textarea name="content" id="content" placeholder="..."></textarea>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Status</label>
                    <div class="form-check">
                      <input type="radio" name="status" id="input" value="1" checked="checked">
                      <label class="form-check-label">Active</label>
                    </div>
                    <div class="form-check ">
                      <input type="radio" name="status" id="input" value="0">
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
