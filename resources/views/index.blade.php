@extends ('layout')

@section('content')
  <h1>List of Owners</h1>

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
      <td>  {{$pet->name}}</td> 
      @endforeach
    
  </tr>
  @endforeach


 




@endsection