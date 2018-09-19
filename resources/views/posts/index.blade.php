@extends('defaultPosts')
@section('content')
<h1>Liste des articles</h1>
<table class="table table-striped">
   <thead>
      <tr>
        <th>title</th>
        <th>Content</th>
        <th>Slug</th>
        <th>En Ligne</th>
        <th>User ID</th>
        <th>Categrie</th>
        <th>Editer</th>
        <th>Suprimer</th>
      </tr>
    </thead>
    <tbody>
  @foreach($posts as $post)
  
    
      <tr>
        <td>{{ $post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->online}}</td>
        <td>{{$post->user_id}}</td>
        <td>{{$post->category->name}}</td>
        <td><a href="{{route('news.edit',$post)}}" class="btn btn-primar">editer</a></td>
        <td><a href="{{route('news.show',$post)}}" class="btn btn-primar">suprimer</a></td>
      </tr> 
  @endforeach
  </tbody>

</table>
@endsection
@section('vave')

@endsection

