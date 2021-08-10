@extends('admin.index')
@section('content')

<section class="detail " id="services">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="detail-item ">
                <span><i class="{{$service->icon}}"></i></span>
                <h2>{{$service->title}}</h2>
                <div class="line"></div>
                <p >{{$service->description}}</p>
                <div class="crud-row">
                  <div class="crud-item">
                    <a href="{{route('edit_service',$service->id)}}">
                      <span><i class="fas fa-user-edit"></i></span>
                    </a>                 
                  </div>
                  <div class="crud-item">
                    <form action="{{route('delete_service',$service->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit">
                        <span><i class="fas fa-trash-alt"></i></span>
                      </button>
                    </form>
                    
                  </div>
                </div>    
            </div>
            @endforeach
           
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Create a new service</h2>
                  <form class="form" id="form1" action="{{route('new_service')}}" method="POST">
                    @csrf
                    <p class="name">
                      <input name="title" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" 
                      placeholder="title" id="name" />
                    </p>
                    
                    <p class="email">
                      <input list="icon" name="icon" class="validate[required,custom[email]] feedback-input" id="email" 
                      placeholder="icon" />
                      <datalist id="icon">
                        <option value="fas fa-address-book">
                        <option value="fas fa-users">
                        <option value="far fa-handshake">
                        <option value="fas fa-briefcase">
                        <option value="fas fa-building">
                      </datalist>
                    </p>
                    
                    <p class="text">
                        <textarea name="description" class="validate[required,length[6,300]] feedback-input" id="comment" 
                        placeholder="description"></textarea>
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