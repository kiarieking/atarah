@foreach($models as $model)
<div class="models-item">
                      <span><i class="{{$model->icon}}"></i></span>
                      <div>
                          <h3>{{$model->header}}</h3>
                          <p class="text">{{$model->description}}</p>
                      </div>
                  </div>
@endforeach                  
                 