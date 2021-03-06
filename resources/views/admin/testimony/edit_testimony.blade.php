@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
               <a href="{{route('testimonies')}}"><i class="fas fa-hand-point-left"></i></a>
                    <h2 class="mb-3 form-head">Edit {{$testimony->name}} Testimony</h2>
                  <form class="form" id="form1" action="{{route('save_testimonychange',$testimony->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <p class="name">
                      <input name="name" type="text" value = "{{$testimony->name}}"class="@error('name') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="name" id="name" />
                      @error('name')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                      <input type="file" name="image" value="{{$testimony->image}}" class="@error('image') input-focus is-invalid  @enderror feedback-input" id="image" 
                      placeholder="choose an image" />
                      @error('image')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="text">
                        <textarea name="testimony" class="@error('testimony') input-focus is-invalid  @enderror feedback-input" id="description" 
                        placeholder="testimony">{{$testimony->testimony}}</textarea>
                        @error('testimony')
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