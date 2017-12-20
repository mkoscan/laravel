@extends('layouts.index')

@section('title', '- View Post')

@section('content')
<div class="post">
	<div class="row">
		<div class="col-md-8">
	<h1>{{ $post->title }}</h1>
	<p>{{ $post->body }}</p>
	</div>

	<div class="col-md-4">
		@if(Auth::check())
		<div class="well">
			
			<dl class="dl-horizontal">
				<label>Created At:</label>
				<p>{{ date('M j, Y. H:i', strtotime($post->created_at)) }}</p>
			</dl>
			<dl class="dl-horizontal">
				<label>Last Updated:</label>
				<p>{{ date('M j, Y. H:i',strtotime($post->updated_at)) }}</p>
			</dl>
			<dl class="dl-horizontal">
				<label>Category:</label>
				<p>{{ $post->category->name }}</p>
			</dl>
			<hr class="hr">
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' =>'btn btn-primary btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}

					{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}

					{!! Form::close() !!}
			</div>
		</div>
	</div>
	
	@else
<p></p>
	@endif
</div>
</div>
</div>	
@endsection