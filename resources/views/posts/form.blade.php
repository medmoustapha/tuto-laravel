<?php
use App\Tag;
if($post->id){
$option=['method'=>'put','url'=>route('news.update',$post)];
}
else{
    $option=['method'=>'posts','url'=>route('news.store')];
}

//['method'=>'PUT','url'=>route('news.update',$post)]
?>

@include('posts.errors')

{!! Form::model($post,$option) !!}
    <div class="form-groupe">
        {!! Form::label('title','Titre') !!} 
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-groupe">
        {!! Form::label('slug','Slug') !!} 
        {!! Form::text('slug',null,['class'=>'form-control']) !!}
    </div>
  <!--   <div class="form-groupe">
        {!! Form::label('user_id','User') !!} 
        {!! Form::number('user_id',null,['class'=>'form-control']) !!}
    </div> -->
    <div class="form-group">
    {!! Form::label('tags_list[]','Tag') !!}
        {!! Form::select('tags_list[]',App\Tag::pluck('name','id'),null,['class'=>'form-control','multiple'=>true]) !!}
    </div>
    <div class="form-group">
    {!! Form::label('categry','Category') !!} 
        {!! Form::select('category',$categories,null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-groupe">
        {!! Form::label('content','Contenu') !!} 
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-groupe">
       <label >
        {!! Form::checkbox('online',1,$post->online) !!}
        EN ligne ?
        </label>
    </div>
    <button class="btn btn-primary">Envoyer</button>
{!! Form::close() !!}