@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
               <a href="{{route('testimonies')}}"><i class="fas fa-hand-point-left"></i></a>

                    <h2 class="mb-3 form-head">Create a new Testimony</h2>
                  <form class="form" id="form1" action="{{route('new_testimony')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <p class="name">
                      <input name="name" type="text" class="@error('name') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="name" id="name" value="{{old('name')}}"/>
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                      <input type="file" name="image" class="@error('image') input-focus is-invalid  @enderror feedback-input" id="image" 
                      placeholder="choose an image" value="{{old('image')}}"/>
                      @error('image')
                          <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </p>
                    
                    <p class="text">
                        <textarea name="testimony" class="@error('testimony') input-focus is-invalid  @enderror feedback-input" id="description" 
                        placeholder="testimony">{{old('testimony')}}</textarea>
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