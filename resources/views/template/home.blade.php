
    @include('template.partials.slider')

    @php 
        //$posts = Posts::where(['catg_id' => session('catg_id'),'status' => '1','user_id'=>session('user_id')])->get();
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
    @php 
        $featurePosts = \App\Models\Posts::where(['catg_id' => '7','status' => '1','user_id'=>session('user_id')])->orderBy('order_num')->get()->take(6);
        $serivcePosts = \App\Models\Posts::where(['catg_id' => '19','status' => '1','user_id'=>session('user_id')])->orderBy('order_num')->get()->take(3);
        $aboutPosts = \App\Models\Posts::where(['catg_id' => '2','status' => '1','user_id'=>session('user_id')])->orderBy('order_num')->get()->take(2);
        $blogPosts = \App\Models\Posts::where(['catg_id' => '16','status' => '1','user_id'=>session('user_id')])->orderBy('order_num')->get()->take(20);

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

<section class="section ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        {{-- <h5 class="section-title-sm"></h5> --}}
        <h2 class="section-title section-title-border">Services</h2>
      </div>
      <!-- service item -->
        @foreach($serivcePosts as $key => $serivcePost)
          <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="card text-center">
              <h4 class="card-title pt-3" style="height:60px !important">{{$serivcePost->title}}</h4>
              <div class="card-img-wrapper">
                <img class="card-img-top rounded-0" src="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}" alt="service-image" style="height: 242px  !important;">
              </div>
              <div class="card-body p-0">
                <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                <p class="card-text mx-2 mb-0">{!! Str::limit($serivcePost->body,40,$end="...") !!}</p>
                <a href="{{url('/'.(strtolower($serivcePost->category->catg_name)).'/'.$serivcePost->sefriendly)}}" class="btn btn-secondary translateY-25">Read
                  More</a>
              </div>
            </div>
          </div>
      @endforeach
      
    </div>
  </div>
</section>


<section class="about section-sm overlay" style="background-image: url({{asset('123.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto">
                <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                    <h3 class="section-title section-title-border-half text-white">Feature in Advocate Mail?</h3>
                    <p class="text-white mb-40">Unique features of advocate mail.</p>
                    <div class="row">
                  
                      @foreach($featurePosts as $featurePost)
                      <ul class="d-inline-block pl-0 col-md-6">
                          <li class="font-secondary mb-10 text-white float-sm-left mr-sm-5">
                              <a href="{{url('/'.(strtolower($featurePost->category->catg_name)).'/'.$featurePost->sefriendly)}}"><i class="text-primary mr-2 ti-arrow-circle-right"></i>{{Str::limit($featurePost->title,33,$end='...')}}</a>
                          </li>
                      </ul>
                      @endforeach
                           
                    </div>
                    <a href="service.html" class="btn btn-primary mt-4">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section p-4">
  <div class="container">
    <div class="row">
      @foreach($aboutPosts as $aboutPost)
   
      <div class="col-lg-6">
        <h3 class="">{{$aboutPost->title}}</h3>
         {!! Str::limit($aboutPost->body,500,$end='...') !!}

         <a href="{{url('/'.(strtolower($aboutPost->category->catg_name)).'/'.$aboutPost->sefriendly)}}" class="btn btn-sm btn-primary"> Read More</a>
      </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="section bg-gray p-4 pb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title section-title-border-gray">Recent Blogs</h2>
      </div>
    </div>
    <!-- work slider -->
    <div class="row work-slider">
      @foreach($blogPosts as $blogPost)
      <div class="col-lg-4 px-2">
        <div class="work-slider-image">
          <img class="img-fluid w-100" src="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}" alt="work-image">
          <div class="image-overlay">
            {{-- <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}"> --}}
              {{-- <i class="ti-search"></i> --}}
            {{-- </a> --}}
            <a class="h4" href="{{url('/'.(strtolower($blogPost->category->catg_name)).'/'.$blogPost->sefriendly)}}">{{Str::limit($blogPost->title,35,$end="...")}}</a>
            <p>by Admin</p>
          </div>
        </div>
      </div>
      @endforeach
     
    </div>
  </div>
</section>

<section class="mission section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h5 class="section-title-sm">Our Goal</h5>
        <h2 class="section-title section-title-border-half">Company Mission</h2>
        <div class="row">
          <div class="col-lg-6">
            <p class="mb-40">Lorem ipsum dolor sit amet consectetur adipisicing elit sed
              eiusmod tempor didunt laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- accordion -->
        <div id="accordion" class="mb-md-50">
          <div class="card border-0 mb-4">
            <div class="card-header bg-gray border p-0">
              <a class="card-link h5 d-block tex-dark mb-0 py-10 px-4" data-toggle="collapse" href="#collapseOne">
                <i class="ti-minus text-primary mr-2"></i> Our Company Mission
              </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body font-secondary text-color pl-0 pb-0">
                Duis aute irure dolor in reprehenderit voluptate velit esse cillum
                dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                non proident sunt culpa qui officia deserunt mollit anim id est
                laborum.
              </div>
            </div>
          </div>
          <div class="card border-0 mb-4">
            <div class="card-header bg-gray border p-0">
              <a class="collapsed card-link h5 d-block tex-dark mb-0 py-10 px-4" data-toggle="collapse"
                href="#collapseTwo">
                <i class="ti-plus text-primary mr-2"></i> Our Company Mission
              </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body font-secondary text-color pl-0 pb-0">
                Duis aute irure dolor in reprehenderit voluptate velit esse cillum
                dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                non proident sunt culpa qui officia deserunt mollit anim id est
                laborum.
              </div>
            </div>
          </div>
          <div class="card border-0 mb-4">
            <div class="card-header bg-gray border p-0">
              <a class="collapsed card-link h5 d-block tex-dark mb-0 py-10 px-4" data-toggle="collapse"
                href="#collapseThree">
                <i class="ti-plus text-primary mr-2"></i> Our Company Mission
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body font-secondary text-color pl-0 pb-0">
                Duis aute irure dolor in reprehenderit voluptate velit esse cillum
                dolore fugiat nulla pariatur.Excepteur sint ocaecat cupidatat
                non proident sunt culpa qui officia deserunt mollit anim id est
                laborum.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- chart -->
      <div class="col-lg-6">
            
      </div>
    </div>
  </div>
</section>

<section class="promo-video overlay section" style="background-image: url({{asset('1234.webp')}});">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-white mb-20 font-weight-normal">We Are Alawys <br> Comited</h1>
        <div class="d-flex">
          <a class="popup-youtube play-icon mr-4" href="https://www.youtube.com/watch?v=6ZfuNTqbHE8">
            <i class="ti-control-play"></i>
          </a>
          <p class="text-white align-self-center h4">Lorem ipsum dolor <br> sit amet con.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="section-title-sm">Clients</h5>
                <h2 class="section-title section-title-border"> What client Say </h2>
            </div>
            <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                <img class="img-fluid w-100" src="images/client.png" alt="clients-image">
            </div>
            <div class="col-lg-7 col-md-7 align-self-center pl-0">
                <div class="testimonial-slider p-5">
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                    <!-- slider item -->
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta overlay-primary py-50 text-center text-lg-left" style="background-image: url({{asset('1.jpg')}});">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h3 class="text-white">Advocate Mail give the smart solution for your business</h3>
                </div>
                <div class="col-lg-6 text-lg-right align-self-center">
                    <a href="contact.html" class="btn btn-light">GET AN QUOTE</a>
                </div>
            </div>
        </div>
</section>

<section class="section bg-gray">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h5 class="section-title-sm">Latest News</h5>
        <h2 class="section-title section-title-border-gray"> News</h2>
      </div>
      <!-- blog-item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card">
          <div class="card-img-wrapper overlay-rounded-top">
            <img class="card-img-top" src="{{asset('12.jpg')}}" alt="blog-thumbnail">
          </div>
          <div class="card-body p-0">
            <div class="d-flex">
              <div class="py-3 px-4 border-right text-center">
                <h3 class="text-primary mb-0">25</h3>
                <p class="mb-0">Nov</p>
              </div>
              <div class="p-3">
                <a href="blog-single.html" class="h4 font-primary text-dark">Cras
                  sed elit sit amet.</a>
                <p>by Admin</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- blog-item -->
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card">
          <div class="card-img-wrapper overlay-rounded-top">
            <img class="card-img-top"  src="{{asset('123.jpg')}}" alt="blog-thumbnail">
          </div>
          <div class="card-body p-0">
            <div class="d-flex">
              <div class="py-3 px-4 border-right text-center">
                <h3 class="text-primary mb-0">25</h3>
                <p class="mb-0">Nov</p>
              </div>
              <div class="p-3">
                <a href="blog-single.html" class="h4 font-primary text-dark">Cras
                  sed elit sit amet.</a>
                <p>by Admin</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card">
          <div class="card-img-wrapper overlay-rounded-top">
            <img class="card-img-top"  src="{{asset('123.jpg')}}" alt="blog-thumbnail">
          </div>
          <div class="card-body p-0">
            <div class="d-flex">
              <div class="py-3 px-4 border-right text-center">
                <h3 class="text-primary mb-0">25</h3>
                <p class="mb-0">Nov</p>
              </div>
              <div class="p-3">
                <a href="blog-single.html" class="h4 font-primary text-dark">Cras
                  sed elit sit amet.</a>
                <p>by Admin</p>
              </div>
            </div>
          </div>
        </div>
      </div>

     
    </div>
  </div>
</section>