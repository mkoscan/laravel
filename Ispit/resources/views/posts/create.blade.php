@extends('layouts.index')
@section('title', '- Create New Post')    
        
        @section('content') 
           <div class="container forma">
           		<h1 class="title-posts black">Create New Post</h1>
           		<hr class="hr">
           		{!! Form::open(['route' => 'posts.store']) !!}
    				{{ Form::label('title','Title:', array('class' =>'black')) }}
    				{{ Form::text('title', null, array('class' =>'form-control'))}}
            {{ Form::label('category_id', 'Category')}}

          <select class="form-control" name="category_id">

            @foreach($categories as $category)

            <option value="{{ $category->id }}">{{ $category->name }}</option>

            @endforeach

          </select>

      
    				{{ Form::label('body', 'Post Body:',array('class' =>'black'))}}
    				{{ Form::textarea('body', null, array('class' =>'form-control'))}}
    				<br>
    				{{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
				{!! Form::close() !!}
        <br><br><br>

           </div>
        @endsection
        
