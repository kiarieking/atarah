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
      <td>
        @if(strlen($service->description)>50)
        {{substr($service->description,0,50)}}
        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
        <span class="read-more-content"> {{substr($service->description,100,strlen($service->description))}} 
        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
        @else
            {{$service->description}}
            @endif
      </td> 
      <th><a href="{{route('edit_service',$service->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
      <a href="#popupService"><button class="btn-white" id="btn_delete">Delete</button></a>
        
        @include('admin.services.confirm_delete')
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
 



@endsection