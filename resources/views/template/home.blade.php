    
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
        $newsPosts = \App\Models\Posts::where(['catg_id' => '20','status' => '1','user_id'=>session('user_id')])->orderBy('order_num')->get()->take(3);

        $states = DB::table('states')->select('states.state_code','states.state_name')->orderBy('state_name')->get();

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
                <div class="card-text mx-2 mb-0 text-align-justify">{!! Str::limit($serivcePost->body,70,$end="...") !!}</div>
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
            <div class="col-lg-6 ml-auto">
                <div class="rounded p-sm-5 py-3  bg-secondary">
                    <h3 class="section-title section-title-border-half text-white">Feature in Advocate Mail?</h3>
                    <!--<p class="text-white mb-40">Unique features of advocate mail.</p>-->
                    <div class="row">
                  
                      @foreach($featurePosts as $featurePost)
                      <ul class="d-inline-block pl-0 col-md-6">
                          <li class="font-secondary mb-10 text-white float-sm-left mr-sm-5">
                              <a class="text-white" href="{{url('/'.(strtolower($featurePost->category->catg_name)).'/'.$featurePost->sefriendly)}}"><i class="text-primary mr-2 ti-arrow-circle-right"></i>{{Str::limit($featurePost->title,33,$end='...')}}</a>
                          </li>
                      </ul>
                      @endforeach
                           
                    </div>
                    <a href="{{url('/features')}}" class="btn btn-primary mt-4">Explore More</a>
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
         <div style="text-align:justify;min-height: 220px !important">
             {!! Str::limit($aboutPost->body,500,$end='...') !!}
         </div>
         <br>
         <a href="{{url('/'.(strtolower($aboutPost->category->catg_name)).'/'.$aboutPost->sefriendly)}}" class="btn btn-sm btn-primary"> Read More</a>
      </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!--<section class="section bg-gray p-4 pb-5">-->
<!--  <div class="container-fluid">-->
<!--    <div class="row">-->
<!--      <div class="col-lg-12 text-center">-->
<!--        <h2 class="section-title section-title-border-gray">Recent Blogs</h2>-->
<!--      </div>-->
<!--    </div>-->
    <!-- work slider -->
<!--    <div class="row work-slider">-->
<!--      {{-- <div class="col-lg-3 card px-0">-->
<!--        <div class="card-body p-0">-->
<!--          <img class=" w-100 h-100" src="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}" alt="work-image">-->
<!--          <div class="image-overlay p-4 w-100" style="position: absolute; top:118px">-->
            
<!--            <a class="h4 text-white" href="{{url('/'.(strtolower($blogPost->category->catg_name)).'/'.$blogPost->sefriendly)}}">{{Str::limit($blogPost->title,35,$end="...")}}</a>-->
<!--            <p class="text-white">by Admin</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div> --}}-->
<!--      @foreach($blogPosts as $blogPost)-->

<!--      <div class="col-lg-6 px-2">-->
<!--        <div class="work-slider-image" >-->
<!--          <img class="img-fluid w-100" src="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}" alt="work-image">-->
<!--          <div class="image-overlay">-->
<!--            {{-- <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}"> --}}-->
<!--              {{-- <i class="ti-search"></i> --}}-->
<!--            {{-- </a> --}}-->
<!--            <a class="h4" href="{{url('/'.(strtolower($blogPost->category->catg_name)).'/'.$blogPost->sefriendly)}}">{{Str::limit($blogPost->title,35,$end="...")}}</a>-->
<!--            <p>by Admin</p>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      @endforeach-->
     
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<section class="mission section p-4 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
           <div class="card shadow-sm card-border-top">
                <div class="card-header text-center p-2 "  style="border-radius: 0px !important">
                  <h2 class="card-title section-title-border-gray">Browse Lawyers in States</h2>
                </div>
                <div class="card-body p-5 bg-gray">
                    <div class="row" id="stateRow">
                        @foreach($states as $state)
                          <div class="col-md-4">
                              <a href="javascript:void(0)" class="text-dark stateView" id="{{$state->state_code}}" data-id="{{$state->state_name}}"> <i class="fa fa-map-marker "></i> {{$state->state_name}} </a><br>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
      </div>
   
    </div>
  </div>
</section>

<section class="promo-video overlay section" style="background-image: url({{asset('1234.webp')}});">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-white mb-20 font-weight-normal">Professional Identity <br>assocaited with Email </h1>
        <div class="d-flex">
          {{-- <a href="blog/professional-identity-assocaited-with-email.html"> --}}
            {{-- <i class="ti-control-play"></i> --}}
          {{-- </a> --}}
          <p class="text-white align-self-center h4">The only service in the world that provides professional identity with email address. 
            <br>
            <a href="blog/professional-identity-assocaited-with-email.html" class="btn btn-sm btn-primary mt-4">Read More</a>
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
                     slider item 
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                     slider item 
                    <div class="outline-0">
                        <i class="testimonial-icon ti-quote-left"></i>
                        <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                        <h4 class="font-weight-normal">Julia Robertson</h4>
                        <h6 class="font-secondary text-color">Happy Clients</h6>
                    </div>
                     slider item 
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
                <div class="col-lg-7">
                    <h3 class="text-white text-justify">AdvocateMail.com is the only email service that provides professional Identity with a professional blogging website and also promotes your service on web </h3>
                </div>
                <div class="col-lg-5 text-lg-right align-self-center " >
                    <a href="{{route('register')}}" class="btn btn-light f-26">REGISTER NOW</a>
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
      @foreach($newsPosts as $newsPost)
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card">
          <div class="card-img-wrapper overlay-rounded-top">
            <img class="card-img-top" src="{{asset($serivcePost->image_path !=null ? 'storage/'.$serivcePost->image_path : 'no_image.jpg')}}" alt="blog-thumbnail">
          </div>
          <div class="card-body p-0">
            <div class="d-flex">
              <div class="py-3 px-4 border-right text-center">
                <h3 class="text-primary mb-0">{{date('d',strtotime($newsPost->start_date))}}</h3>
                <p class="mb-0">Nov</p>
              </div>
              <div class="p-3">
                <a href="blog-single.html" class="h4 font-primary text-dark">{{$newsPost->title}}</a>
                <p>by Admin</p>
              </div>
            </div>
          </div>
        </div>
      </div>
     @endforeach
     
    </div>
  </div>
<script>
  $(document).ready(function(){
      $('.stateView').on('click',function(){
        var state_name = $(this).data('id');
        var state_code = $(this).attr('id');
      
            var str = state_name.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
            str = str.replace(/^\s+|\s+$/gm,'');
            str = str.replace(/\s+/g, '-');  
            window.location.href =  '/directory/'+str+'/'+state_code;
      })
    })
</script>
</section>