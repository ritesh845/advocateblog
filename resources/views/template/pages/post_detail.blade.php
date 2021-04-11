<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-100">
                <div class="border rounded bg-white">
                    <img class="img-fluid w-100 rounded-top" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="{{$post->title}}" style="min-height: 250px; max-height: 250px">
                    <div class="p-4">
                        <h3>{{$post->title}}</h3>
                        <ul class="list-inline d-block pb-4 border-bottom mb-3">
                            <li class="list-inline-item text-color">Posted By Admin</li>
                            <li class="list-inline-item text-color">On {{date('d M Y',strtotime($post->start_date))}}</li>
                            <li class="list-inline-item text-color">in {{$post->category->catg_name}}</li>
                        </ul>
                        {!! $post->body !!}
                    </div>
                </div>
                {{-- <div class="py-4 border-bottom mb-100">
                    <div class="row">
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <!-- share-icon -->
                            <div class="d-flex">
                                <span class="font-weight-light mt-2 mr-3">Share:</span>
                                <ul class="list-inline d-inline-block">
                                    <li class="list-inline-item">
                                        <a class="share-icon bg-facebook" href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="share-icon bg-twitter" href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="share-icon bg-linkedin" href="#">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="share-icon bg-google" href="#">
                                            <i class="ti-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div> --}}
            </div>
            @include('template.pages.post-sidebar')
        </div>
    </div>
</section>