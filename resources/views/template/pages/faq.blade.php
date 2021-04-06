<section class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 py-100">
                <!-- Blog Post -->
           	@foreach($posts as $post)
                <article class="bg-white rounded mb-40">
                    <!-- Post Thumbnail -->
                        <a href="blog-single.html">
                            <img class="img-fluid w-100 rounded-top" src="{{asset('storage/'.$post->image_path)}}" alt="{{$post->title}}">
                        </a>
                    <!-- Post Content -->
                    <div>
                        <div class="d-flex align-items-center border-bottom">
                            <!-- Published Date -->
                            <div class="text-center border-right p-4">
                                <h3 class="text-primary mb-0">
                                    {{date('d',strtotime($post->start_date))}}
                                    <span class="d-block paragraph">{{date('M',strtotime($post->start_date))}}</span>
                                    <span class="d-block paragraph">{{date('Y',strtotime($post->start_date))}}</span>
                                </h3>
                            </div>
                            <div class="px-4">
                                <!-- Post Title -->
                                <a class="h4 d-block mb-10" href="blog-single.html">{{$post->title}}</a>
                                <!-- Post Meta -->
                                <ul class="list-inline">
                                    <li class="list-inline-item paragraph mr-5">By
                                        <a href="#" class="paragraph">{{$post->user->name}}</a>
                                    </li>
                                    <li class="list-inline-item paragraph">{{$post->category->catg_name}}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Post Excerpts -->
                        <div class="p-4">
                            {{-- {!! Str::limit($post->body,200,$end='...') !!} --}}
                            
                            <a href="{{url('/'.(strtolower($post->category->catg_name)).'/'.$post->sefriendly)}}" class="btn btn-sm btn-primary">Read More</a>
                        </div>
                    </div>
                </article>

             @endforeach
           
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
                        	@foreach(collect(session('catgs'))->where('is_post',1) as $catg)
                            <li class="border-bottom">
                                <a href="#" class="d-block text-color py-10">{{$catg->catg_name}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <!-- Widget Recent Post -->
                    <div class="mb-50">
                        <h4 class="mb-3">Recent Post</h4>
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
                </div>
            </div>
        </div>
    </div>
</section>