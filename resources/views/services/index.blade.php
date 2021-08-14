<section class="detail " id="services">
        <div class="container">
            <div class="row">
            @foreach($services as $service)
                <div class="detail-item ">
                    <span><i class="{{$service->icon}}"></i></span>
                    <h2>{{$service->title}}</h2>
                    <div class="line"></div>
                    <p class="text ">{{$service->description}}</p>
                </div>
            @endforeach
            </div>
        </div>
   </section>
   