@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Jobs</h3>
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
              <form method="post" action="{{route('job.update', $job->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{($job->name)}}" name="name" id="exampleInputEmail1" placeholder="...">
                    @error('name')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Salary</label>
                    <input type="text" class="form-control " value="{{($job->salary)}}" name="salary" id="exampleInputEmail1" placeholder="...">
                    @error('salary')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group has-error">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="...">{{$job->description}}</textarea>
                    @error('description')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Status</label>
                    <div class="form-check">
                      <input type="radio" name="status" id="input" value="1" {{$job->status == 1 ? 'checked' : ''}}>
                      <label class="form-check-label">Active</label>
                    </div>
                    <div class="form-check ">
                      <input type="radio" name="status" id="input" value="0" {{$job->status == 0 ? 'checked' : ''}}>
                      <label class="form-check-label">Unactive</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
