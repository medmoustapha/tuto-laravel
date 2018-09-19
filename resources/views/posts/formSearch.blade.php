

{!! Form::model(['method'=>'PUT','url'=>route('/searchTitle')]) !!}
    <div class="form-groupe">
        {!! Form::label('title','Titre') !!} 
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
   
    <button class="btn btn-primary">Envoyer</button>
{!! Form::close() !!}