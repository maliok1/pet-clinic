@extends ('layout')

@section('content')
  <h1>Owners & Dogs</h1>

  <table>
    <thead>
        <th>Name</th>
        <th>Surname</th>
        <th>Pet</th>
        <th></th>
    </thead>
    <tbody>


  @foreach ($owners as $owner)

  <tr>
    <td>{{$owner->first_name}} </td> 
    <td> {{$owner->surname}}</td>  
 
      @foreach ($owner->pets as $pet) 
      <td> <a href="{{action ('PetController@show', [$pet->id])}}">{{$pet->name}}</a> </td>
      <td> <img src="/pets/{{$pet->photo}}" alt="{{$pet->photo}}"> </td> 
      @endforeach
    
  </tr>
  @endforeach


 




@endsection