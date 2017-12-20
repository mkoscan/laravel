@extends('layouts.index')
@section('title', '- Contact Page')    
        @section('content') 
           <div class="jumbotron">
      <div class="container">
        <h1 class="center">CONTACT PAGE</h1>
        <p class="center">Here you can send us an e-mail and get in touch with us!</p>
      </div>
    </div>
    <div class="container-f">
        <form class="center">
          <div class="form-group">
            <label name="email">Email: </label>
            <input id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label name="subject">Subject: </label>
            <input id="subject" name="subject" class="form-control">
          </div>
          <div class="form-group">
            <label name="message">Message: </label>
            <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
          </div>
          <input type="submit" value="Send Message" class="btn btn-success">
        </form>
      </div>
        @endsection
        
