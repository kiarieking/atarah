@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Add a new Header</h2>
                  <form class="form" id="form1" action="{{route('new_header')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <p class="email">
                      <!-- <p class="text">background image</p> -->
                      <input type="file" name="background_img" class="@error('icon') is-invalid  @enderror feedback-input" id="image" 
                      placeholder="choose an image" />
                      
                    </p>

                    <p class="email">
                      <input type="file" name="logo_img" class="@error('icon') is-invalid  @enderror feedback-input" id="image" 
                      placeholder="choose an image" />
                      
                    </p>
                    
                    <p class="name">
                      <input name="big_heading" type="text" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="big heading" id="big_heading" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="small_heading" type="text" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="small heading" id="small_heading" />
                      @error('title')
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