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
                      <input name="header" type="text" value="{{$model->header}}" class="@error('header') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="title" id="name" />
                      @error('header')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                      <input list="icon" name="icon" value="{{$model->icon}}" class="@error('icon') input-focus is-invalid  @enderror feedback-input" id="email" 
                      placeholder="icon" />
                      @error('icon')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                      <datalist id="icon">
                        <option value="fas fa-address-book">
                        <option value="fas fa-users">
                        <option value="far fa-handshake">
                        <option value="fas fa-briefcase">
                        <option value="fas fa-building">
                      </datalist>
                    </p>
                    
                    <p class="text">
                        <textarea name="description" class="@error('description') input-focus is-invalid  @enderror feedback-input" id="comment" 
                        placeholder="description">{{$model->description}}</textarea>
                        @error('description')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
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