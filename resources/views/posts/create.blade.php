@extends('defaultPosts')
@section('content')
<h1>Ajouter un nouvel article</h1>


@include('posts.form')
<!-- {!! Form::open(['url'=>route('news.store')]) !!}
    <div class="form-groupe">
        {!! Form::label('title','Titre') !!} 
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-groupe">
        {!! Form::label('slug','Slug') !!} 
        {!! Form::text('slug',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-groupe">
        {!! Form::label('content','Contenu') !!} 
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Envoyer</button>
{!! Form::close() !!} -->
@endsection