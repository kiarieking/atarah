@extends('admin.index')
@section('content')
<div class="table-display"> 
<table class="table-container">
  <thead>
    <tr>
      <th><h1>Name</h1></th>
      <th><h1>Email</h1></th>
      <th><h1>Message</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($messages as $message)
    <tr>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->msg}}</td> 
      <th><a href="{{route('reply_form',$message->id)}}" ><button class="btn-trans" id="btn_edit">respond</button></a></th>
      <th>
      <a href="#popupContact"><button class="btn-white" id="btn_delete">Delete</button></a>
        
        @include('admin.contact.confirm_delete')
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection