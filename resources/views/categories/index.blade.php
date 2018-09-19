@extends('defaultCat')
@section('content')
<h1>Liste des categories</h1>
<table class="table table-striped">
   <thead>
      <tr>
        <th>name</th>
        <th>Slug</th>
        <th>Editer</th>
       
      </tr>
    </thead>
    <tbody>
  @foreach($cats as $cat)
  
    
      <tr>
        <td>{{ $cat->name}}</td>
        
        <td>{{$cat->slug}}</td>
       
        <td><a href="{{route('cat.edit',$cat)}}" class="btn btn-primar">editer</a></td>
      </tr> 
  @endforeach
  </tbody>

</table>
@endsection