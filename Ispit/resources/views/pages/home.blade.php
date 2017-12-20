@extends('layouts.index')

@section('title', '- Home Page')
        
        @section('content') 
     
    <div class="jumbotron">
      <div class="container">
        <h1 class="center">HOME PAGE</h1>
        <p class="center">Welcome to the MK Blog where you are free to express your creativity and make yourself known worldwide!</p>
      </div>
    </div>
    <h1 class="text-center">Popular Posts</h1>
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                    </div>

                    <hr>

                @endforeach

            </div>

        </div>
    
 @endsection
       
        