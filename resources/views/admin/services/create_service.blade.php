@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
               <a href="{{route('services')}}"><i class="fas fa-hand-point-left"></i></a>
                    <h2 class="mb-3 form-head">Create a new service</h2>
                  <form class="form" id="form1" action="{{route('new_service')}}" method="POST">
                    @csrf
                    <p class="name">
                      <input name="title" type="text" class="@error('title') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="title" value="{{old('title')}}" id="name" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                      <input list="icon" name="icon" class="@error('icon') input-focus is-invalid  @enderror feedback-input" id="email" 
                      placeholder="icon" value="{{old('icon')}}" />
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
                        <textarea name="description" class="@error('icon') input-focus is-invalid  @enderror feedback-input" id="description" 
                        placeholder="description">{{old('description')}}</textarea>
                        @error('description')
                          <span class=" invalid-feedback">{{ $message }}</span>
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