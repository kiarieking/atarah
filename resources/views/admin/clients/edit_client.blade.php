@extends('admin.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Edit {{$client->name}} Client</h2>
                  <form class="form" id="form1" action="{{route('edit_client',$client->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <p class="name">
                      <input name="name" type="text" value="{{$client->name}}" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="name" id="name" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                      <input type="file" name="image" value="{{$client->image}}" class="@error('icon') is-invalid  @enderror feedback-input" id="image" 
                      placeholder="choose an image" />
                      
                    </p>
                    
                    <p class="name">
                      <input name="facebook" type="text" value="{{$client->facebook}}" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="facebook" id="facebook" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="twitter" type="text" value="{{$client->twitter}}" class="@error('name') is-invalid  @enderror feedback-input" 
                      placeholder="twitter" id="twitter" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    <p class="name">
                      <input name="instagram" type="text" value="{{$client->instagram}}" class="@error('name') is-invalid  @enderror feedback-input" 
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