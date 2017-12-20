@extends('layouts.index')

@section('title', '- Edit Post')

@section('content')

<div class="post">
	<div class="row">
	{!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) !!}
		<div class="col-md-8">
	{{Form::label('title', 'Title:')}}
	{{ Form::text('title', null, array('class' => 'form-control input-lg'))}}<br>

	 {{ Form::label('category_id', 'Category')}}

          <select class="form-control" name="category_id">

            @foreach($categories as $category)

            <option value="{{ $category->id }}">{{ $category->name }}</option>

            @endforeach

          </select>

	{{Form::label('body', "Body:")}}
	{{ Form::textarea('body', null, array('class' => 'form-control'))  }}
	
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<dt>Created At:</dt>
				<dd>{{ date('M j, Y. H:i', strtotime($post->created_at)) }}</dd>
			</dl>
			<dl class="dl-horizontal">
				<dt>Last Updated:</dt>
				<dd>{{ date('M j, Y. H:i',strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr class="hr">
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' =>'btn btn-danger btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
					 <br><br><br>
					
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}
</div>
</div>

@endsection