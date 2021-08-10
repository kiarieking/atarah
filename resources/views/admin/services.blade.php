@extends('admin.index')
@section('content')

<section class="detail " id="services">
    <div class="container">
        <div class="row">
            <div class="detail-item ">
                <span><i class="fas fa-users"></i></span>
                <h2>Training & Team Building</h2>
                <div class="line"></div>
                <p >We offer Training Programmes that are custom made for your organization and Individuals. Companies that invest in trainings have higher productivity than those that don’t. We offer both online and physical trainings. We offer trainings on…..</p>
                
            </div>
            <div class="detail-item ">
                @include('clients.socialmedia')
                <span><i class="far fa-handshake"></i></span>
                <h2>HR Consulting</h2>
                <div class="line"></div>
                <p >We offer Specialist advice and services to help businesses maximise the efficiency of their HR perations and implement appropriate policies and procedures in the best way possible. We work with you to define the following:</p>
            </div>
            <div class="detail-item ">
                <span><i class="fas fa-briefcase"></i></span>
                <h2>HR Outsourcing</h2>
                <div class="line"></div>
                <p >We work with organizations to manage their HR function. This is done by either outsourcing the HR function in its entirety or some functions of it.

                    The Services you can outsource include:</p>
            </div>
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