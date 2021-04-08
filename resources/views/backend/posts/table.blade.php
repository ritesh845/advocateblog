
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
