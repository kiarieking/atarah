@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Add a new Client</h2>
                  <form class="form" id="form1" action="{{route('new_client')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="name">
                      <input name="name" type="text" class="@error('name') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="name" id="name" value="{{old('name')}}"/>
                      @error('name')
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
                    
                    <p class="name">
                      <input name="facebook" type="text" class="@error('facebook') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="facebook" id="facebook" value="{{old('facebook')}}"/>
                      @error('facebook')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="twitter" type="text" class="@error('twitter') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="twitter" id="twitter" value="{{old('twitter')}}"/>
                      @error('twitter')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="instagram" type="text" class="@error('instagram') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="instagram" id="instagram" value="{{old('instagram')}}" />
                      @error('instagram')
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