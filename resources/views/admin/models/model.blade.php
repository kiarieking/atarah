@extends('admin.index')
@section('content')
<div class="models-item">
    <span><i class="fas fa-scroll"></i></span>
    <div>
        <h3>DEFINE</h3>
        <p >This is our proposal stage where we define and clarify issues in our
          terms to ensure the client has understood. We also include solutions and suggestions to
           the needs deduced during deep dive.</p>
    </div>
</div>
<div class="models-item">
  <span><i class="fas fa-drafting-compass"></i> </span>
  <div>
      <h3>DEEP DIVE</h3>
      <p >This is our requirements gathering stage. We engage with the client
          in a deep analysis to better understand what they require.</p>
  </div>
  </div> 
  <div class="models-item">
  <span><i class="fas fa-hammer"></i></i></span>
  <div>
      <h3>DESIGN</h3>
      <p >We develop a customized scope of work and a list of activities hinged
          on the identified need.</p>
  </div>
</div> 
<div class="models-item">
  <span><i class="fas fa-truck"></i></span>
  <div>
      <h3>DELIVER</h3>
      <p >We implement and measure results in this stage</p>
  </div>
</div>       

@endsection