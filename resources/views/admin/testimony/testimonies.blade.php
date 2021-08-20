@extends('admin.index')
@section('content')
<th><a href="{{route('new_testimonyform')}}" ><button class="btn-trans" id="btn_edit">create new testimony</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th>#</th>
      <th><h1>Name</h1></th>
      <th><h1>testimony</h1></th>
      <th><h1>image</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($testimonies as $count => $testimony)
    <tr>
      <td>{{++$count}}</td>
      <td>{{$testimony->name}}</td>
      <td>
      @if(strlen($testimony->testimony)>50)
        {{substr($testimony->testimony,0,50)}}
        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
        <span class="read-more-content"> {{substr($testimony->testimony,50,strlen($testimony->testimony))}} 
        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
        @else
            {{$testimony->testimony}}
            @endif
      </td>
      <td>{{$testimony->image}}</td> 
      <th><a href="{{route('edit_testimonyform',$testimony->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
      <a href="#popupTestimony"><button class="btn-white" id="btn_delete">Delete</button></a>
        
        @include('admin.testimony.confirm_delete')
      </th>
    </tr>
    
    @endforeach
  </tbody>


</table>
@endsection