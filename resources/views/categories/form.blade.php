<?php
if($cat->id){
$option=['method'=>'put','url'=>route('cat.update',$cat)];
}
else{
    $option=['method'=>'cats','url'=>route('cat.store')];
}

//['method'=>'PUT','url'=>route('news.update',$post)]
?>

{!! Form::model($cat,$option) !!}
    <div class="form-groupe">
        {!! Form::label('name','Titre') !!} 
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-groupe">
        {!! Form::label('slug','Slug') !!} 
        {!! Form::text('slug',null,['class'=>'form-control']) !!}
    </div>
    <button class="btn btn-primary">Envoyer</button>
{!! Form::close() !!}