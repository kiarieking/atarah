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
                      <input name="name" type="text" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="name" id="name" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                      <input type="file" name="image" class="@error('icon') is-invalid  @enderror feedback-input" id="image" 
                      placeholder="choose an image" />
                      
                    </p>
                    
                    <p class="name">
                      <input name="facebook" type="text" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="facebook" id="facebook" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="twitter" type="text" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="twitter" id="twitter" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="instagram" type="text" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="instagram" id="instagram" />
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