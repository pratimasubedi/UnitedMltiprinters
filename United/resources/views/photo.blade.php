@extends('home-master')
@section('content')
<div class="container-fluid photo-wrapper">
	<h2>Photo Gallery</h2>
	<div class="row">	
		<div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/bil.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/bil.jpg')}}">
                </a>
			</div>
        </div>
        <div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/car.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/car.jpg')}}">
                </a>
			</div>
        </div>
        <div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/city.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/city.jpg')}}">
                </a>
			</div>
        </div>
	</div>
	<div class="row">	
		<div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/ro.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/ro.jpg')}}">
                </a>
			</div>
        </div>
        <div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/uj.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/uj.jpg')}}">
                </a>
			</div>
        </div>
        <div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/bil.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/bil.jpg')}}">
                </a>
			</div>
        </div>
        
	</div>
	<div class="row">	
		<div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/ro.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/ro.jpg')}}">
                </a>
			</div>
        </div>
        <div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/car.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/car.jpg')}}">
                </a>
			</div>
        </div>
        <div class="col-md-4">
			<div class="photoimages">
				<a  href="{{ url('public/images/ro.jpg')}}" data-lightbox="mygallery">
              
				<img  class="img-fluid" src="{{ url('public/images/ro.jpg')}}">
                </a>
			</div>
        </div>
	</div>
</div>
	@endsection