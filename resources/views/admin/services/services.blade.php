@extends('admin.index')
@section('content')
<th><a href="{{route('new_serviceform')}}" ><button class="btn-trans" id="btn_edit">create new service</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th><h1>Service Title</h1></th>
      <th><h1>icon</h1></th>
      <th><h1>Description</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($services as $service)
    <tr>
      <td>{{$service->title}}</td>
      <td>{{$service->icon}}</td>
      <td>{{$service->description}}</td> 
      <th><a href="{{route('edit_service',$service->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
        <form action="{{route('delete_service',$service->id)}}" method="POST">
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