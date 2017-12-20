@extends ('layouts.index')

@section('title', "- All Posts")

@section('content')
	<div class="post">
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
@if(Auth::check())
		<div class="col-md-2">
			<a href={{ route('posts.create') }} class="btn btn-lg btn-block btn-primary spacing">Create New Post</a>
@endif
	</div>
	<div class="col-md-12">
		<hr class="hr">
	</div>
	
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created At</th>
				<th></th>
				<th></th>
			</thead>

			<tbody>
				
				@foreach ($posts as $post)	
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ substr($post->body, 0, 50)}}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
						<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
						<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a>  @if(Auth::check()) <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
						<td><a> {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}

					{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-sm')) !!}

					{!! Form::close() !!}</a></td>@endif
				</tr>
				@endforeach

			</tbody>
		</table>
		<div class="text-center">
			{!! $posts->links(); !!}
		</div>
	</div>
</div>
</div>

@endsection