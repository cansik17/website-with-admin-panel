@extends('back.layouts.master')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Background Image</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
      
          @foreach ($features as $feature)
          <tr>
              <th scope="row">{{$feature->order}}</th>
                <td>{{$feature->title}}</td>
                <td>{{$feature->text}}</td>
                <td>{{$feature->image}}</td>
                <td>
                {{-- <a href="{{route('')}}"><i class="fas fa-eye" title="show"></i></a> --}}
                    <a href="{{route('dashboard.features.edit', $feature->id)}}"><i class="fas fa-edit" title="edit"></i></a>
                </td>
          </tr>
              
          @endforeach
        
     
      
    </tbody>
  </table>

@endsection
