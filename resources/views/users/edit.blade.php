@extends('admin.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


<!-- {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!} -->


<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
               <a href="{{route('users.index')}}"><i class="fas fa-hand-point-left"></i></a>
                    <h2 class="mb-3 form-head">Edit {{$user->name}}</h2>
                  <form class="form" id="form1" action="{{route('users.update',$user->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <p class="name">
                      <input name="Name" type="text" value="{{$user->name}}" class="@error('Name') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="title" id="name" />
                     
                    </p>
                    
                    
                    <p class="email">
                    <input name="Email" type="text" value="{{$user->email}}" class="@error('Email') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="title" id="name" />
                      </p>

                    <p class="role">  
                    <select class="form-control" name='role'>
                        @foreach($roles as $role)
                         <option >{{$user->getRoleNames()}}</option> 
                        @endforeach
                    </select> 
                    </p>
              

                      <p class="password">
                    <input name="Password" type="password"  class="@error('Email') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="password" id="name" />
                      </p>
                   
                      <p class="confirm_password">
                    <input name="Confirm-Password" type="password"  class="@error('Email') input-focus is-invalid  @enderror feedback-input" 
                      placeholder="confirm password" id="name" />
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