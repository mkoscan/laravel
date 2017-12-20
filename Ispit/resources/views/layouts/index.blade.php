<!doctype html> 
<html lang="{{ app()->getLocale() }}"> 
<head>

@include('includes.head') 

</head>  
  <body>
  @include('includes.navbar')
  
  <div class="container-fluid">
  @include('includes.messages')
 
  @yield('content') 
  

  @include('includes.footer')

</div>
  @include('includes.skripte')

  @yield('scripts')

  </body>
</html>
  