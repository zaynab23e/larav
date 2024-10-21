@extends('layout.tmp')
@section('title')
indexcontroller
@endsection
@section('contant')


<div>
  <table class="table">
  <th>title</th>
  <th>post</th>
  <th>show more</th>
@foreach($allpost as $all)
  <tr>
  <td>{{$all['title']}} </td>
  <td> {{$all['post']}} </td>
  <td><a href="{{route('post.show',[$all['id']])}}"> <button> go </button></a></td>
  </tr>

@endforeach
</table>
</div>
<a href="{{route('post.create')}}"><button>  create new post and title </button> </a>
@endsection
