@extends ('layout')

@section('owner')
  <h2>{{$owner->first_name}} {{$owner->surname}} </h2>
  <div>
    <h4>She take care of : </h4>
      @foreach($pets as $pet)
        <img src="/pets/{{$pet->photo}}" alt="">
        <ul>
        <li>{{$pet->name}}</li>
        <li>Breed: {{$pet->breed}}</li>  
        <li> Age: {{$pet->age}} years old</li>
        <li>Weight: {{$pet->weight}} pounds</li>
        </ul>
        <hr>
      @endforeach
  </div>
  
   <!-- <img src="/pets/{{$pet->photo}}" alt="{{$pet->photo}}">
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
    </a> -->

@endsection