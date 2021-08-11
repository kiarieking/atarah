@extends('admin.index')
@section('content')
<div class="contact-left" id="reply-form">
    <h2>Leave us a message</h2>
    @if (Session::has('flash_message'))
        <p class="success">your message has been succesfuly sent.</p>
    @endif    
    <form method="post" action="{{route('contact')}}">
        @csrf
        <input type="text" name="name" class="form-control" placeholder="Name">
        @if ($errors->has('name'))
            <small class="form-text invalid-feedback text-danger">{{$errors->first('name')}}</small></br>
        @endif    
        <input type="text" name="email" class="form-control " placeholder="Email">
        @if ($errors->has('email'))
            <small class="form-text invalid-feedback text-danger">{{$errors->first('email')}}</small></br>
        @endif 
        <textarea name="message" placeholder="message" rows="6" class="form-control"></textarea>
        @if ($errors->has('message'))
            <small class="form-text invalid-feedback text-danger">{{$errors->first('message')}}</small></br>
        @endif 
        <button type="submit" class="submit-btn">Send now</button>
    </form>
</div>
@endsection