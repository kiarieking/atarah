@extends('admin.index')
@section('content')
<div class="models-item">
    <span><i class="fas fa-scroll"></i></span>
    <div>
        <h3>DEFINE</h3>
        <p >This is our proposal stage where we define and clarify issues in our
          terms to ensure the client has understood. We also include solutions and suggestions to
           the needs deduced during deep dive.</p>
           <div class="crud-row">
            <div class="crud-item">
              <a href="">
                <span><i class="fas fa-user-edit"></i></span>
              </a>                 
            </div>
            <div class="crud-item">
              <form action="" method="POST">
                @csrf
                @method('delete')
                <button type="submit">
                  <span><i class="fas fa-trash-alt"></i></span>
                </button>
              </form>
              
            </div>
          </div>
    </div>
</div>
<div class="models-item">
  <span><i class="fas fa-drafting-compass"></i> </span>
  <div>
      <h3>DEEP DIVE</h3>
      <p >This is our requirements gathering stage. We engage with the client
          in a deep analysis to better understand what they require.</p>
          <div class="crud-row">
            <div class="crud-item">
              <a href="">
                <span><i class="fas fa-user-edit"></i></span>
              </a>                 
            </div>
            <div class="crud-item">
              <form action="" method="POST">
                @csrf
                @method('delete')
                <button type="submit">
                  <span><i class="fas fa-trash-alt"></i></span>
                </button>
              </form>
              
            </div>
          </div>
  </div>
  </div> 
  <div class="models-item">
  <span><i class="fas fa-hammer"></i></i></span>
  <div>
      <h3>DESIGN</h3>
      <p >We develop a customized scope of work and a list of activities hinged
          on the identified need.</p>
          <div class="crud-row">
            <div class="crud-item">
              <a href="">
                <span><i class="fas fa-user-edit"></i></span>
              </a>                 
            </div>
            <div class="crud-item">
              <form action="" method="POST">
                @csrf
                @method('delete')
                <button type="submit">
                  <span><i class="fas fa-trash-alt"></i></span>
                </button>
              </form>
              
            </div>
          </div>
  </div>
</div> 
<div class="models-item">
  <span><i class="fas fa-truck"></i></span>
  <div>
      <h3>DELIVER</h3>
      <p >We implement and measure results in this stage</p>
      <div class="crud-row">
        <div class="crud-item">
          <a href="">
            <span><i class="fas fa-user-edit"></i></span>
          </a>                 
        </div>
        <div class="crud-item">
          <form action="" method="POST">
            @csrf
            @method('delete')
            <button type="submit">
              <span><i class="fas fa-trash-alt"></i></span>
            </button>
          </form>
          
        </div>
      </div>
  </div>
</div> 

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="form-main">
                <div id="form-div">
                    <h2 class="mb-3 form-head">Add a Model</h2>
                  <form class="form" id="form1" action="{{route('new_model')}}" method="POST">
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