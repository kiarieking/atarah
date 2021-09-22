@extends('admin.index')

@section('content')
<div class="user-container">
<a href="{{route('models')}}"><i class="fas fa-hand-point-left"></i></a>
    <h3><a class="title" href="{{ url('/') }}">
        Atarah Solutions User Roles and Permissions 
    </a></h3>
    <nav class="navbar">
            <div class="container user-nav">
                <div class="navbar-collapse">
                    <ul class="navbar-nav ">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link user-navlink" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link user-navlink" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li><a class="nav-link user-navlink" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link user-navlink" href="{{ route('roles.index') }}">Manage Role</a></li>
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="pull-left">
            <h2>Users Management</h2>
        </div>

        @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="table-display">
<th><a href="{{route('users.create')}}" ><button class="btn-trans model-btn" id="btn_edit">create new user</button></a></th>
<table class="table-container">
  <thead>
    <tr>
     <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th colspan="3">Action</th>   
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)<li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a  href="{{ route('users.show',$user->id) }}"><button class="btn-trans" id="btn_edit">show</button></a>
    </td>
       <td>
       <a  href="{{ route('users.edit',$user->id) }}"><button class="btn-trans" id="btn_edit">Edit</button></a>
       <td>
        <!-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn_delete']) !!}
        {!! Form::close() !!} -->
        <form action="{{route('users.destroy',$user->id)}}" method="POST">
                @csrf
                @method('delete')
                <button id="btn_delete" class="btn-white">Delete</button>
              </form>
    </td>
  </tr>
 @endforeach
  </tbody>
</table>


</div>
</div>
@endsection