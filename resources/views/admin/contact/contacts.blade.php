@extends('admin.index')
@section('content')
<table class="container">
  <thead>
    <tr>
      <th><h1>Name</h1></th>
      <th><h1>Email</h1></th>
      <th><h1>Message</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($messages as $message)
    <tr>
      <td>{{$message->name}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->msg}}</td> 
      <th><a href="{{route('reply_form')}}" ><button class="btn-trans" id="btn_edit">respond</button></a></th>
      <th>
        <form>
          <button class="btn-white" id="btn_delete">delete</button>
        </form>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection