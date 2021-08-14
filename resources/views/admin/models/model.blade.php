@extends('admin.index')
@section('content')
<th><a href="{{route('create_model')}}" ><button class="btn-trans" id="btn_edit">create new model</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th><h1>Model Name</h1></th>
      <th><h1>icon</h1></th>
      <th><h1>Description</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($models as $model)
    <tr>
      <td>{{$model->header}}</td>
      <td>{{$model->icon}}</td>
      <td>{{$model->description}}</td> 
      <th><a href="{{route('edit_model_form',$model->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
        <form action="{{route('delete_model',$model->id)}}" method="POST">
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