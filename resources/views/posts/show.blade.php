@extends('layout.tmp')
@section('title')
show
@endsection
@section('contant')
<!-- {{print_r($getid)}} -->

<h3><strong>title:- </strong> {{$getid['title']}} </h3>
<p><strong>post:- </strong>  {{$getid['post']}} </p>
<a href="{{route('post.edit',$getid->id)}}"> <button>edit</button></a>

<form action="{{route('post.destroy',$getid->id)}}" method="post">
  @csrf
  @method('DELETE')

 <button>delete</button>
</table>
</div>
@endsection
