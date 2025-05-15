@extends('admin.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Application</h3>
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
              <form method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="">
                <div class="card-body ">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name') ? old('name') :$cv->name}}" name="name" id="exampleInputEmail1" placeholder="...">
                    @error('name')
                    <span class="error invalid-feedback ">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Goal</label></br>
                    <input type="text" class="form-control" name="icon" value="{{$cv->goal}}" placeholder="Your icon url" required>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$cv->phone}}" placeholder="..."></input>
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Nationality</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputPassword1" value="{{$cv->nationality}}" >
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" name="phone" id="exampleInputPassword1" value="{{$cv->email}}" >
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
