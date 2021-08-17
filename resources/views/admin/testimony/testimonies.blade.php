@extends('admin.index')
@section('content')
<th><a href="{{route('new_testimonyform')}}" ><button class="btn-trans" id="btn_edit">create new testimony</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th><h1>Name</h1></th>
      <th><h1>testimony</h1></th>
      <th><h1>image</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($testimonies as $testimony)
    <tr>
      <td>{{$testimony->name}}</td>
      <td>{{$testimony->testimony}}</td>
      <td>{{$testimony->image}}</td> 
      <th><a href="" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
        <form action="" method="POST" >
          @csrf
          @method('delete')
          <button class="btn-white" id="btn_delete">Delete</button>
        </form>
      </th>
    </tr>
    @endforeach
  </tbody>
 <img src="{{$testimony->img}}" alt="testimony img">

</table>
@endsection