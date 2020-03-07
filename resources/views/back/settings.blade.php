@extends('back.layouts.master')


@section('content')


<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
  </div>
  <div class="card-body">
        <form method="post" action="{{route('dashboard.settings.update')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Site Title</label>
                <input type="text" name="title" required class="form-control" value="{{$settings->title}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" required class="form-control" value="{{$settings->phone}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" required class="form-control" value="{{$settings->email}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" required class="form-control" value="{{$settings->address}}" />
              </div>
            </div>
        
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Site Logo</label>
                <input type="file" class="form-control" name="logo" />
              </div>
            </div>
           
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{$settings->facebook}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{$settings->twitter}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Google</label>
                <input type="text" class="form-control" name="google" value="{{$settings->google}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>LinkIn</label>
                <input type="text" class="form-control" name="linkedin" value="{{$settings->linkedin}}" />
              </div>
            </div>
          </div>
          <div class="row">
         
            <div class="col-md-6">
              <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{$settings->instagram}}" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-md btn-success">Update</button>
          </div>
        </form>
  </div>
</div>
@endsection
