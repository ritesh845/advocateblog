<div class="col-lg-3">
	<div class="section-title">
		<h2>Popular Posts</h2>
	</div>
	@foreach($posts as $key =>  $post)
	<div class="trend-entry d-flex">
		<div class="number align-self-start">{{($key + 1) <=9 ? '0'.($key+1) : ($key+1)}}</div>
		<div class="trend-contents">
			<h2><a href="blog-single.html">{{$post->title}}</a></h2>
			<div class="post-meta">
			<span class="d-block"><a href="#">By {{$post->user->name}}</a> in <a href="#">{{$post->category->catg_name}}</a></span>
							<span class="date-read">{{date('M d Y ', strtotime($post->start_date))}} </span>
			</div>
		</div>
	</div>
	@endforeach
	<a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
	</p>
</div>