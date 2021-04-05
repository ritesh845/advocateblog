@extends('backend.layouts.main')
@section('content')
<div class="card mb-5">
  <div class="card-header">
      <h5 class="card-title">Posts</h5>
  </div>
  <div class="card-body">
  		<div class="row">
  			<div class="col-md-12">
  				
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12 table-responsive">
  				<table class="table table-bordered table-striped">
  					<thead>
  						<tr>
  							<th>#</th>
  							<th>Title</th>
  							<th>Body</th>
  							<th>Image</th>
  							<th>status</th>
  							<th>Action</th>
  						</tr>
  					</thead>
  					<tbody>
  						@php $count = 1; @endphp
  						@foreach($posts as $post)
	  						<tr>
	  							<td>{{$count++}}</td>
	  							<td>{{$post->title}}</td>
	  							<td>{!! Str::limit($post->body,150,$end='...') !!}</td>
	  							<td></td>
	  							<td>{{$post->status == '1' ? 'Active' : 'Not Active' }}</td>
	  							<td>
	  								<a href="{{route('post.show',$post->article_id)}}"><i class="fa fa-eye text-primary"></i></a>

	  								<a href="{{route('post.edit',$post->article_id)}}"><i class="fa fa-edit text-success"></i></a>

	  								<a href="{{route('post.delete',$post->article_id)}}" onclick="return confirm('Are you sure you want to delete this post')"><i class="fa fa-trash text-danger"></i></a>
	  							</td>
	  						</tr>
  						@endforeach
  					</tbody>
  				</table>
  			</div>
  		</div>
  </div>
</div>
@endsection