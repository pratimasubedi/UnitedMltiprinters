@extends('home-master')
@section('content')
<div class="container-fluid contact-section">
		
			<div class="Contact-us-heading">
				 <h2 style="color: #fff;">Stay Connected</h2>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-form" style=" margin-top: 10%;">
	
						<div class="container">
				            
				        </div>
				      
						
						<form action="{{ url('/storecontact') }}" method="POST">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-12">
									<span class="pf-title">Full Name</span>
									<div class="pf-field">
										<input type="text" value="" name="name" placeholder="Your Name" required="required">
										<i class="fas fa-user"></i>
										<span class="text-color">
											<br>
										</span>
									</div>
								</div>
								<div class="col-lg-12">
									<span class="pf-title">Email</span>
									<div class="pf-field">
										<input type="email" value="" name="email" placeholder="Your Email" required="required">
										<i class="fas fa-envelope"></i>
										<span class="text-color">
											<br>
										</span>
									</div>
								</div>
								
								<div class="col-lg-12">
									<span class="pf-title">Subject</span>
									<div class="pf-field">
										<input type="text"  value="" name="subject" placeholder="Subject" required="required">
										<i class="fas fa-file"></i>
										<span class="text-color">
											<br>
										</span>
									</div>
								</div>
								<div class="col-lg-12">
									<span class="pf-title">Message</span>
									<div class="pf-field">
										<textarea placeholder="Message" name="message" required="required"></textarea>
										<i class="fas fa-comment"></i>
										<span class="text-color">
											<br>
										</span>
									</div>
								</div>
							<div class="col-lg-12">
								<div class="nav-button" style="padding-bottom: 33%;
    padding-top: 10%;">
					<ul>
						<li>View More</li>
						
					</ul>
				</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-6">
					<div class="contact-text">
					 <div class="main">
					
               <div class="contact-logo">
            
              <img  class="img-fluid" src="{{ url('public/images/logo.jpg')}}">
          </div>
      
 
</div>
					<h3>United Auto Printers Pvt. Ltd.</h3>
					<ul>
						<li>
							<i class="fas fa-map-marker-alt fa-1x"></i>
							<span>Lalitpur, Nepal </span>
						</li>
						<li>
							<i class="fas fa-phone fa-1x"></i>
							<span>Call Us :+977980000000 </span>
						</li>
						<li>
							<i class="fas fa-envelope fa-1x"></i>
							<span>Email :Unitedautopress@gmail.com</span></li>
						</ul>
					</div>
			</div>
		</div>
	</div>
	
@endsection