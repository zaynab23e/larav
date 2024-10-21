@extends('layout.tmp')
@section('title')
indexcontroller
@endsection
@section('contant')
<form action="{{route('post.update',$idet->id)}}" method="post">
  @csrf
  @method('PUT')
  <input type="text " value="{{$idet->title}} " placeholder="title" name="title">
  <br>
  <!-- @error('title')
{{$message}}
  @enderror -->
  <input type=" text" value="{{$idet->post}} " placeholder="post" name="post">
  <br>
  <!-- @error('post')
{{$message}}
  @enderror -->
    <button type="submit"> update </button>
</form>
@endsection
