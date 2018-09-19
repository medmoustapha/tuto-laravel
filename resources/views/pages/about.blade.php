 @extends("default") 
 @section('title')

{{$title}}

 @show
  @section('content')
    <p>{{ $title }}</p>
    <ul>
    @foreach($numbers as $val)
      <li> {{ $val }}</li>
    @endforeach
    </ul>
  @endsection


  @section('sidbar')
     @parent
     <p> mohamed el moustapha</p>
 
  @endsection
