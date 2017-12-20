<!doctype html> 
<html lang="{{ app()->getLocale() }}"> 
<head>

@include('includes.head') 

</head>  
  <body>

  <nav class="navbar navbar-color">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <p class="navbar-brand">MK Blog</p>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login">Login</a></li>
          <li><a href="home">Home</a></li>
        </ul>
      </div>
    </nav>
  
  <div class="container-fluid">
  	<br>
  @include('includes.messages')
 
  @yield('content') 
  

  @include('includes.footer')

</div>
  @include('includes.skripte')

  @yield('scripts')

  </body>
</html>
  