@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h2 class="title">Create Jobs</h2>
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
              <form method="post" action="{{route('job.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="exampleInputEmail1">Category Id</label>
                        <select class="custom-select" name="cid">
                          @foreach ($categories as $key => $item) 
                            <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                        @error('cid')
                        <span class="error invalid-feedback ">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ">
                        <label for="exampleInputEmail1">Company Id</label>
                        <input type="text" class="form-control @error('ucid') is-invalid @enderror" name="ucid" id="exampleInputEmail1" placeholder="...">
                        @error('ucid')
                        <span class="error invalid-feedback ">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 ">
                      <div class="form-group ">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="exampleInputEmail1" placeholder="...">
                        @error('name')
                        <span class="error invalid-feedback ">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6 ">
                      <div class="form-group ">
                        <label for="exampleInputPassword1">Salary</label>
                        <input type="text" class="form-control" name="salary" id="exampleInputPassword1" placeholder="...">
                        @error('salary')
                        <span class="error invalid-feedback ">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" id="description"></textarea>
                    @error('description')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
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
