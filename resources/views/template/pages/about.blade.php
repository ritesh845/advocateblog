<section class="bg-gray">
    <div class="container p-5">
        <div class="row">
                <!-- Blog Post -->
           	@foreach($posts as $post)
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card text-center">
                      <h4 class="card-title pt-3" style="height:60px !important">{{$post->title}}</h4>
                      <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="service-image" style="height: 242px  !important;">
                      </div>
                      <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                        <p class="card-text mx-2 mb-0">{!! Str::limit($post->body,40,$end="...") !!}</p>
                        <a href="{{url('/'.(strtolower($post->category->catg_name)).'/'.$post->sefriendly)}}" class="btn btn-secondary translateY-25">Read
                          More</a>
                      </div>
                    </div>
                </div>


               

             @endforeach           
        </div>
    </div>
</section>

<!-- <article class="bg-white rounded mb-40">
                        <a href="blog-single.html">
                            <img class="img-fluid w-100 rounded-top" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="{{$post->title}}">
                        </a>
                    <div>
                        <div class="d-flex align-items-center border-bottom">
                            <div class="text-center border-right p-4">
                                <h3 class="text-primary mb-0">
                                    {{date('d',strtotime($post->start_date))}}
                                    <span class="d-block paragraph">{{date('M',strtotime($post->start_date))}}</span>
                                    <span class="d-block paragraph">{{date('Y',strtotime($post->start_date))}}</span>
                                </h3>
                            </div>
                            <div class="px-4">
                                <a class="h4 d-block mb-10" href="blog-single.html">{{$post->title}}</a>
                                <ul class="list-inline">
                                    <li class="list-inline-item paragraph mr-5">By
                                        <a href="#" class="paragraph">{{$post->user->name}}</a>
                                    </li>
                                    <li class="list-inline-item paragraph">{{$post->category->catg_name}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            {{-- {!! Str::limit($post->body,200,$end='...') !!} --}}
                            
                            <a href="{{url('/'.(strtolower($post->category->catg_name)).'/'.$post->sefriendly)}}" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </article> -->