@extends('home-master')
@section('content')
<div class="container-fluid videos-wrapper">
	<h2>Video Gallery</h2>
	<div class="row">
		<div class="col-md-4">
			<div class="videos">
				<video width="400" height="400px"controls>
					<source src="{{ url('public/videos/press.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="col-md-4">
			<div class="videos">
				<video width="400" height="400px"controls>
					<source src="{{ url('public/videos/press.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="col-md-4">
			<div class="videos">
				<video width="400" height="400px"controls>
					<source src="{{ url('public/videos/press.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
			<div class="row">
		<div class="col-md-4">
			<div class="videos">
				<video width="400" height="400px"controls>
					<source src="{{ url('public/videos/press.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="col-md-4">
			<div class="videos">
				<video width="400" height="400px"controls>
					<source src="{{ url('public/videos/press.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="col-md-4">
			<div class="videos">
				<video width="400" height="400px"controls>
					<source src="{{ url('public/videos/press.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</div>




@endsection