@extends('admin.index')
@section('content')
<th><a href="{{route('new_headerform')}}" ><button class="btn-trans" id="btn_edit">Add new Header</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th><h1>Background Image</h1></th>
      <th><h1>Logo Image</h1></th>
      <th><h1>Big Heading</h1></th>
      <th><h1>Small Heading</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>     
    </tr>
  </thead>
  <tbody>
    @foreach($header as $header)
    <tr>
      <td>{{$header->background_img}}</td>
      <td>{{$header->logo_img}}</td>
      <td>{{$header->big_heading}}</td> 
      <td>{{$header->small_heading}}</td> 
      

      <th><a href="{{route('edit_headerform',$header->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
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


</table>
@endsection