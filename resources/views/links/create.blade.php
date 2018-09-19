@extends('default')
@section('content')
<h1>Raccorcir un nouveau lien</h1>
<form action="" class="form-control" method="post">
      <div class="form-group">
      <input type="hidden" name="_token" value=" {{csrf_token() }}">
        <label for="url">Lien a raccorcir</label>
        <input type="text" name="url" placeholder="http://...." id="url">
        
        </div>
       <div class="form-group">
           <button class="btn btn-primary">raccourcir</button>
       </div>

</form>

@endsection