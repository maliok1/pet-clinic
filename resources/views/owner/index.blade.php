@extends ('layout')

@section('list')
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
      <td><a href="{{ action ('OwnerController@show' ,[$owner->id])}}">{{$owner->first_name}}</a> </td> 
      <td> <a href="{{ action ('OwnerController@show' ,[$owner->id])}}"> {{$owner->surname}} </a></td>  
    
      @foreach ($owner->pets as $pet) 
      <td> <a href="{{action ('PetController@show', [$pet->id])}}">{{$pet->name}}</a> </td>
      <td> <img src="/pets/{{$pet->photo}}" alt="{{$pet->photo}}"> </td> 
      @endforeach
    
  </tr>
  @endforeach


 




@endsection