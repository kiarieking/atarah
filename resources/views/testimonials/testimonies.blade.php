<div class="row owl-carousel owl-theme">
            @foreach($testimonies as $testimony)
               <div class="testimonial-item">
                   <div class="testimonial-img">
                       <img src="images/{{$testimony->image}}" alt="testimonial">
                   </div>
                   <p>{{$testimony->testimony}}</p>
                   <span>{{$testimony -> name}}</span>
               </div>
            @endforeach
           </div>