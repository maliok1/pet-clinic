@extends ('layout')

@section('pets')

<table>
    <thead>
        <th>Photo</th>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Weight</th>
        
    </thead>
    <tbody>

  <tr> 
       <td> <img src="/pets/{{$pet->photo}}" alt="{{$pet->photo}}"> </td> 
      <td> {{$pet->name}}</td>
      <td>{{$pet->breed}} </td>
      <td>{{$pet->age}} </td>
      <td>{{$pet->weight}} </td>
      
  </tr>
  <div class="nav">
    <a href="{{action ('OwnerController@index')}}">
      Back to the list
    </a>
  </div>
  <p>Owned by : {{$owner->first_name}} {{$owner->surname}} </p>

@endsection