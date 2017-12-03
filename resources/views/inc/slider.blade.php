  </br>   </br>
  <div class="card page-carousel">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
                         <div class="carousel-inner" role="listbox">
                      @if(count($sliderOne) > 0)
                      @foreach ($sliderOne as $key => $one)
                         <div class="carousel-item active">
                             <img class="d-block img-fluid" src="../img/internalSlider_images/{{$one->slider_image }}" alt="{{$one->description}}">
                          <div class="carousel-caption d-none d-md-block">
                                 <p>{!! $one->description !!}</p>
                             </div>
                         </div>
                           @endforeach
                         @else
                            <p><div class="alert alert-danger" role="alert">
                          <strong>No slider 1 image found!</strong>
                          </div></p>
                          @endif
                          @if(count($sliderTwo) > 0)
                          @foreach ($sliderTwo as $key => $two)
                         <div class="carousel-item">
                             <img class="d-block img-fluid" src="../img/internalSlider_images/{{$two->slider_image }}" alt="{{$two->description}}">
                          <div class="carousel-caption d-none d-md-block">
                              <p>{!! $two->description !!}</p>
                          </div>
                         </div>
                       @endforeach
                     @else
                        <p><div class="alert alert-danger" role="alert">
                      <strong>No slider 2 image found!</strong>
                      </div></p>
                      @endif
                      @if(count($sliderThree) > 0)
                      @foreach ($sliderThree as $key => $three)
                         <div class="carousel-item">
                             <img class="d-block img-fluid" src="../img/internalSlider_images/{{$three->slider_image }}" alt="{{$three->description}}">
                          <div class="carousel-caption d-none d-md-block">
                              <p>{!! $three->description !!}</p>
                          </div>
                         </div>
                       @endforeach
                     @else
                        <p><div class="alert alert-danger" role="alert">
                      <strong>No slider 3 image found!</strong>
                      </div></p>
                      @endif
                      @if(count($sliderFour) > 0)
                      @foreach ($sliderFour as $key => $four)
                         <div class="carousel-item">
                             <img class="d-block img-fluid" src="../img/internalSlider_images/{{$four->slider_image }}" alt="{{$four->description}}">
                          <div class="carousel-caption d-none d-md-block">
                              <p>{!! $four->description !!}</p>
                          </div>
                         </div>
                       @endforeach
                     @else
                        <p><div class="alert alert-danger" role="alert">
                      <strong>No slider 4 image found!</strong>
                      </div></p>
                      @endif
                         </div>

                         <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                             <span class="fa fa-angle-left"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                             <span class="fa fa-angle-right"></span>
                             <span class="sr-only">Next</span>
                         </a>
    </div>
  </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
