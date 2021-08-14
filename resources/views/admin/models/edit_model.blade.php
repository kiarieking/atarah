@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Edit {{$model->header}} Model</h2>
                  <form class="form" id="form1" action="{{route('save_modelchanges',$model->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <p class="name">
                      <input name="header" type="text" value="{{$model->header}}" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" 
                      placeholder="title" id="name" />
                    </p>
                    
                    <p class="email">
                      <input list="icon" name="icon" value="{{$model->icon}}" class="validate[required,custom[email]] feedback-input" id="email" 
                      placeholder="icon" />
                      <datalist id="icon">
                        <option value="fas fa-address-book">
                        <option value="fas fa-users">
                        <option value="far fa-handshake">
                        <option value="fas fa-briefcase">
                        <option value="fas fa-building">
                      </datalist>
                    </p>
                    
                    <p class="text">
                        <textarea name="description" class="validate[required,length[6,300]] feedback-input" id="comment" 
                        placeholder="description">{{$model->description}}</textarea>
                      </p>
                   
                    
                    
                    <div class="submit">
                      <input type="submit" value="Upload" id="button-blue"/>
                      <div class="ease"></div>
                    </div>
                  </form>
                </div>
        </div>
    </div>
</div>
@endsection