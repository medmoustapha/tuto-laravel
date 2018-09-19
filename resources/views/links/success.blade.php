@extends('default')
@section('content')
<h1>Bravo !!!!</h1>
 <a class="btn btn-primary" href="{{ action('LinksController@show',['id'=>$link->id])}}">
       {{ action('LinksController@show',['id'=>$link->id]) }}
  </a>

@endsection