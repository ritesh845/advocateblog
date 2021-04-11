<section class="bg-gray">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 py-100">
                <!-- Blog Post -->
                <article class="bg-white rounded mb-40">
                    <!-- Post Thumbnail -->
                        <a href="blog-single.html">
                            <img class="img-fluid w-100 rounded-top" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="{{$post->title}}" style="min-height: 250px !important;max-height: 250px !important;">
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

           
            </div>
             @endforeach
           
        </div>
    </div>
</section>