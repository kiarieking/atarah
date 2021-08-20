@extends('admin.index')
@section('content')
    
    <div class="container">
    @if (Session::has('flash_message'))
        <p class="success">your message has been succesfuly sent.</p>
    @endif 
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Reply to client</h2>   
    <form class="form" id="form1" action="{{route('admin_response')}}" method="POST">
                    @csrf
                    <p class="name">
                      <input name="name" type="text" class="@error('name') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="name" value="{{$message->name}}" id="name" />
                      @error('name')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                    </p>
                    
                    <p class="email">
                    <input name="email" type="text" class="@error('email') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="email" value="{{$message->email}}" id="email" />
                      @error('title')
                          <span class="invalid-feedback">{{ $message }}</span>
                      @enderror
                     
                    </p>
                    
                    <p class="text">
                        <textarea name="message" class="@error('message') input-focus is-invalid  @enderror feedback-input" id="comment" 
                        placeholder="message">{{old('description')}}</textarea>
                        @error('message')
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

</div>
@endsection