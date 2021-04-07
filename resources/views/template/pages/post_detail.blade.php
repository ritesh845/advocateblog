<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-100">
                <div class="border rounded bg-white">
                    <img class="img-fluid w-100 rounded-top" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="{{$post->title}}">
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
            <div class="col-lg-4">
                <!-- Sidebar -->
                <div class="bg-white px-4 py-100 sidebar-box-shadow">
                    <!-- Search Widget -->
                    {{-- <div class="mb-50">
                        <h4 class="mb-3">Search Here</h4>
                        <div class="search-wrapper">
                            <input type="text" class="form-control" name="search" placeholder="Type Here...">
                        </div>
                    </div> --}}
                    <!-- categories -->
                    <div class="mb-50">
                        <h4 class="mb-3">Categories</h4>
                        <ul class="pl-0 mb-0">
                            <li class="border-bottom">
                                <a href="#" class="d-block text-color py-10">Business Analysis</a>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- Widget Recent Post -->
                    <div class="mb-50">
                        <h4 class="mb-3">Recent News</h4>
                        <div class="d-flex py-3 border-bottom">
                            <div class="mr-4">
                                <a href="blog-single.html">
                                    <img class="rounded" src="images/blog/post-thumb-sm-01.jpg" alt="post-thumb">
                                </a>
                            </div>
                            <div>
                                <h6 class="mb-3">
                                    <a class="text-dark" href="blog-single.html">Marketing Strategy 2017-2018.</a>
                                </h6>
                                <p class="meta">16 Dec, 2018</p>
                            </div>
                        </div>
                       
                    </div>
                    <!-- Widget Tags -->
                </div>
            </div>
        </div>
    </div>
</section>