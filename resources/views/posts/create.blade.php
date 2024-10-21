@extends('layout.tmp')
@section('title')
indexcontroller
@endsection
@section('contant')
<form action="{{route('post.store')}}" method="post">
  @csrf
  <input type="text " value="{{old('title')}} " placeholder="title" name="title">
  <!-- @error('title')
{{$message}}
  @enderror -->
  <br>

  <input type=" text" value=" {{old('title')}} " placeholder="post" name="post">
  <br>
  <!-- @error('post')
{{$message}}
  @enderror -->
    <button type="submit"> create </button>
</form>
@endsection
