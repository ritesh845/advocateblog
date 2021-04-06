
    @include('template.partials.slider')

    @php 
		$states = DB::table('states')->select('states.state_code','states.state_name')->limit(15)->get();
		// $states = DB::table('users')
	 //     ->select(DB::raw('count(users.id) as state_count, states.state_name,states.state_code'))
	 //     ->where('users.role_id', '=', 3)
	 //     ->where('users.state_code', '!=', null)
	 //     ->join('states','users.state_code', '=','states.state_code')
	 //     ->groupBy('users.state_code')     
	 //     // ->orderBy('state_count','desc')
	 //     ->limit(15)
	 //     ->get();
	@endphp

{{-- <section class="mt-5 mb-5">
  <div class="container">
    <div class="row">
        <div class="col-md-11 m-auto">
            <div class="card shadow-sm card-border-top">
                <div class="card-header text-center p-2 ">
                  <h5 class="card-title text-primary">Number of Lawyers in States</h5>
                </div>
                <div class="card-body p-5 bg-gray">
                    <div class="row" id="stateRow">
                    	  @foreach($states as $state)
	                        <div class="col-md-4">
	                            <a href="javascript:void(0)" class="text-primary stateView" id="" data-id=""> <i class="fa fa-map-marker "></i> {{$state->state_name}} </a><br/><br/>
	                        </div>
	                      @endforeach
                    </div>
                   
                    <div class="row" id="stateRow1">
                        <div class="col-md-12 mt-5 text-center">                          
                            <a href="https://adlaw.in/search" class="btn btn-sm btn-primary p-2">Search Other States</a>
                        </div>
                    </div>

                    <div class="row d-none" id="cityRow">
                        
                        
                    </div>
                    <div class="row d-none" id="cityRow1">
                        <div class="col-md-12 mt-5 text-center">
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary p-2" id="backStateBtn">Back</a>
                            <a href="https://adlaw.in/search" class="btn btn-sm btn-primary p-2">Search Other Cities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section> --}}

<section class="section  mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h5 class="section-title-sm">Best Service</h5>
        <h2 class="section-title section-title-border">Service We Provide</h2>
      </div>
      <!-- service item -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card text-center">
          <h4 class="card-title pt-3">Business Consulting</h4>
          <div class="card-img-wrapper">
            <img class="card-img-top rounded-0" src="{{asset('slider.jpg')}}" alt="service-image">
          </div>
          <div class="card-body p-0">
            <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur
              adipisicing elit sed done eius mod tempor enim ad minim veniam quis
              nostrud.</p>
            <a href="service-single.html" class="btn btn-secondary translateY-25">Read
              More</a>
          </div>
        </div>
      </div>
      <!-- service item -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card text-center">
          <h4 class="card-title pt-3">Valuable Idea</h4>
          <div class="card-img-wrapper">
            <img class="card-img-top rounded-0" src="{{asset('slider.jpg')}}" alt="service-image">
          </div>
          <div class="card-body p-0">
            <i class="square-icon translateY-33 rounded ti-thought"></i>
            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur
              adipisicing elit sed done eius mod tempor enim ad minim veniam quis
              nostrud.</p>
            <a href="service-single.html" class="btn btn-secondary translateY-25">Read
              More</a>
          </div>
        </div>
      </div>
      <!-- service item -->
      <div class="col-lg-4 col-sm-6">
        <div class="card text-center">
          <h4 class="card-title pt-3">Market Strategy</h4>
          <div class="card-img-wrapper">
            <img class="card-img-top rounded-0" src="{{asset('slider.jpg')}}" alt="service-image">
          </div>
          <div class="card-body p-0">
            <i class="square-icon translateY-33 rounded ti-server"></i>
            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur
              adipisicing elit sed done eius mod tempor enim ad minim veniam quis
              nostrud.</p>
            <a href="service-single.html" class="btn btn-secondary translateY-25">Read
              More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="about section-sm overlay" style="background-image: url({{asset('123.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                    <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                    <p class="text-white mb-40">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div>
                        <ul class="d-inline-block pl-0">
                            <li class="font-secondary mb-10 text-white float-sm-left mr-sm-5">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                        </ul>
                        <ul class="d-inline-block pl-0">
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                        </ul>
                    </div>
                    <a href="service.html" class="btn btn-primary mt-4">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h5 class="section-title-sm">Best Service</h5>
        <h2 class="section-title section-title-border-half">Why Choose Us</h2>
      </div>
      <div class="col-lg-7">
        <div class="mb-40">
          <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed eiusmod tempor incididunt laboris nisi
            ut aliquip ex ea commodo consequat. </p>
          <p class="text-dark mb-30">Duis aute irure dolor in reprehenderit voluptate
            velit esse cillum dolore fugiat nulla pariatur.Excepteur
            sint ocaecat cupidatat non proident sunt culpa qui officia deserunt mollit
            anim id est laborum. sed
            perspiciatis unde omnisiste natus error sit voluptatem
            accusantium.doloremque ladantium totam rem
            aperieaque ipsa quae ab illo inventore.veritatis. et quasi architecto beatae
            vitae dicta sunt explicabo.</p>
        </div>
        <!-- fun-fact -->
        {{-- <div class="mb-md-50">
          <div class="row">
            <div class="col-4">
              <div class="d-flex flex-column flex-sm-row align-items-center">
                <i class="round-icon mr-sm-3 ti-server"></i>
                <div class="text-center text-sm-left">
                  <h2 class="count mb-0" data-count="230">0</h2>
                  <p class="mb-0">Projects Done</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex flex-column flex-sm-row align-items-center">
                <i class="round-icon mr-sm-3 ti-face-smile"></i>
                <div class="text-center text-sm-left">
                  <h2 class="count mb-0" data-count="789">0</h2>
                  <p class="mb-0">Satisfied Clients</p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="d-flex flex-column flex-sm-row align-items-center">
                <i class="round-icon mr-sm-3 ti-thumb-up"></i>
                <div class="text-center text-sm-left">
                  <h2 class="count mb-0" data-count="580">0</h2>
                  <p class="mb-0">Cup Of Coffee</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <!-- progressbar -->
      <div class="col-lg-4 offset-lg-1">
       
      </div>
    </div>
  </div>
</section>

<section class="section bg-gray">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h5 class="section-title-sm">Our Works</h5>
        <h2 class="section-title section-title-border-gray">Latest Projects</h2>
      </div>
    </div>
    <!-- work slider -->
    <div class="row work-slider">
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('1.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('1.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('12.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('12.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('123.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('123.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>      
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('123.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('123.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>  
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('123.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('123.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>  
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('123.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('123.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>  
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset('123.jpg')}}" alt="work-image">
          <div class="image-overlay">
            <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('123.jpg')}}">
              <i class="ti-search"></i>
            </a>
            <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>