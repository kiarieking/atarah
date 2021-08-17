@extends('admin.index')
@section('content')
<th><a href="{{route('add_newclientform')}}" ><button class="btn-trans" id="btn_edit">Add new Client</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th><h1>Name</h1></th>
      <th><h1>Image</h1></th>
      <th><h1>Facebook</h1></th>
      <th><h1>twitter</h1></th>
      <th><h1>Instagram</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>     
    </tr>
  </thead>
  <tbody>
     @foreach($clients as $client)
    <tr>
      <td>{{$client->name}}</td>
      <td>{{$client->image}}</td>
      <td>{{$client->facebook}}</td> 
      <td>{{$client->twitter}}</td> 
      <td>{{$client->instagram}}</td> 

      <th><a href="{{route('edit_clientform',$client->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
        <form action="{{route('delete_client',$client->id)}}" method="POST" >
          @csrf
          @method('delete')
          <button class="btn-white" id="btn_delete">Delete</button>
        </form>
      </th>
    </tr>
    @endforeach
    
  </tbody>


</table>
@endsection