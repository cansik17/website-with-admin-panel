@extends('back.layouts.master')


@section('content')


<div>
<form method="POST" action="{{route('dashboard.features.update',$features->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label >Title</label>
    <input type="text" class="form-control" name="title" value="{{$features->title}}">
    </div>
    <div class="form-group">
        <label >Description</label>
      {{-- <input type="text" class="form-control" name="text" value="{{$features->text}}"> --}}
      <textarea name="text"  class="form-control" rows="3">{{$features->text}}</textarea>
      </div>
  
      <div class="form-group">
        <label>Background Image</label><br  />
        <img src="{{asset($features->image)}}" class=" img-thumbnail rounded" width="300" />
        <input type="file" name="image"  class="form-control">
        </div>
  <button type="submit" class="btn btn-secondary">Update</button>
</form>
</div>

<div>
    <a href="{{route('dashboard.features.index')}}" class="btn btn-primary float-right ml-5">Back</a>
</div>
@endsection
