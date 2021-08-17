<div class="row owl-carousel owl-theme">
            @foreach($clients as $client)
              <div class="client-item">
                  <div class="client-img">
                      <img src="images/clients/{{$client->image}}" alt="">
                        @include('clients.socialmedia')
                  </div>
                  <div class="client-info">
                      
                  </div>
              </div>
              @endforeach
          </div> 