@extends('parent')

@section('main')

<div class="jumbotron text-center">
  <div align="right">
    <a href="{{ route('task.index') }}">back</a>
  </div>
  <br/>
  <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class=
   "img-thumbnail"/>
   <h3>first name - {{ $data->first_name }}</h3>
   <h3>last name - {{ $data->last_name }}</h3>
  </div>
@endsection