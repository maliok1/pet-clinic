@extends ('layout')

@section('pets')
  <h3>Meet {{$pet->name}}</h3>
  <img src="/pets/{{$pet->photo}}" alt="{{$pet->photo}}">
  <ul> 
    <li>Breed: {{$pet->breed}}</li>  
    <li> Age: {{$pet->age}} years old</li>
    <li>Weight: {{$pet->weight}} pounds</li>
  </ul>
  <p>Owned by : {{$owner->first_name}} {{$owner->surname}} </p>
  <hr>
  <div class="nav">
    <a href="{{action ('OwnerController@index')}}">
      Back to the list
    </a>
  </div>
  

@endsection