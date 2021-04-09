<section class="bg-gray">
    <div class="container p-5">
        <div class="row">
           	@foreach($posts as $post)
                <div class="col-lg-4 col-sm-6 ">
                    <div class="card text-center">
                        <div class="card-header bg-white">
                            <h5 class="card-title">{{$post->title}}</h5>
                            
                        </div>
                        <div class="card-body p-0">
                            <img class="card-img-top rounded-0" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="service-image" style="height: 242px  !important;">
                            <p class="card-text mx-2 mb-0 mt-4">{!! Str::limit($post->body,40,$end="...") !!}</p>
                            <a href="{{url('/'.(strtolower($post->category->catg_name)).'/'.$post->sefriendly)}}" class="btn btn-secondary translateY-25">Read
  More</a>

                        </div>
                    </div>
                </div>
             @endforeach           
        </div>
    </div>

<script >
    $(document).ready(function(){
        var div = document.getElementById('strong');
        strong.remove();
    });
</script>
</section>


{{-- <h4 class="card-title pt-3" style="height:60px !important">{{$post->title}}</h4>
<div class="card-img-wrapper">
<img class="card-img-top rounded-0" src="{{asset($post->image_path !=null ? 'storage/'.$post->image_path : 'no_image.jpg')}}" alt="service-image" style="height: 242px  !important;">
</div>
<div class="card-body p-0">
<i class="square-icon translateY-33 rounded ti-bar-chart"></i>
<p class="card-text mx-2 mb-0">{!! Str::limit($post->body,40,$end="...") !!}</p>
<a href="{{url('/'.(strtolower($post->category->catg_name)).'/'.$post->sefriendly)}}" class="btn btn-secondary translateY-25">Read
  More</a>
</div> --}}