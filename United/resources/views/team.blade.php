@extends('home-master')
@section('content')
<div class="container-fluid" style="height:10px;">
<div id="canvas-shapes" width =getWidth() height=50></div>
</div>
<div class="container-fluid team-wrapper">
	<h2>OUR TEAM</h2>
	<p>"Team work makes a dream work"</p>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Michele Miller</h3>
          <h4 class="title">Web Developer</h4>
        </div>
       <ul class="social">
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Patricia Knott</h3>
          <h4 class="title">Web Developer</h4>
        </div>
       <ul class="social">
       
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Justin Ramos</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">
        	
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Mary Huntley</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">

        	
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
   <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Michele Miller</h3>
          <h4 class="title">Web Developer</h4>
        </div>
       <ul class="social">
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Patricia Knott</h3>
          <h4 class="title">Web Developer</h4>
        </div>
       <ul class="social">
       
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Justin Ramos</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">
        	
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
        </div>
        <div class="team-content">
          <h3 class="name">Mary Huntley</h3>
          <h4 class="title">Web Developer</h4>
        </div>
        <ul class="social">

        	
       	<li class="social_list_item"><a href="#"><i class="fa fa-phone"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        	<li class="social_list_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection



