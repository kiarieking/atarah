@extends('admin.index')
@section('content')
<th><a href="{{route('create_model')}}" ><button class="btn-trans" id="btn_edit">create new model</button></a></th>
<table class="container">
  <thead>
    <tr>
      <th><h1>Model Name</h1></th>
      <th><h1>icon</h1></th>
      <th><h1>Description</h1></th>
      <th><h1>Action</h1></th>
      <th><h1>Action</h1></th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($models as $model)
    <tr>
      <td>{{$model->header}}</td>
      <td>{{$model->icon}}</td>
      <td>  @if(strlen($model->description)>50)
        {{substr($model->description,0,50)}}
        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
        <span class="read-more-content"> {{substr($model->description,50,strlen($model->description))}} 
        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
        @else
            {{$model->description}}
            @endif</td> 
      <th><a href="{{route('edit_model_form',$model->id)}}" ><button class="btn-trans" id="btn_edit">Edit</button></a></th>
      <th>
       
          
        <a href="#popupModel"><button class="btn-white" id="btn_delete">Delete</button></a>
        
        @include('admin.models.confirm_delete')
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
 
@endsection