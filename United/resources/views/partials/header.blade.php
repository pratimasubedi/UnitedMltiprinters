 {{-- topnav --}}
  
  <div class="container-fluid hdr">
    <div class="row topnavmanage">
      <div class="col-sm">
        <a href="" target="_blank"><span class="icon-manage"><i class="fab fa-facebook fa-lg"></i></span></a>
            <a href=""><span class="icon-manage"><i class="fab fa-instagram fa-lg"></i></span></a>
            <a href=""><span class="icon-manage"><i class="fab fa-twitter fa-lg"></i></span></a>
      </div>
      <div class="col-sm">
        <marquee style="color: #fff;">Request a quote?</marquee>
      </div>
      <div class="col-sm">
        <a href=""><span class="manage-phone"><i class="fa fa-phone fa-sm">980000000</i></span></a>
            <a href=""><span class="manage-phone"><i class="fa fa-envelope fa-sm">UnitedLtd.@gmail.com</i></span></a>
      </div>
    </div>
  </div>
  {{-- end of topnav --}}

  {{-- navbar --}}
<div class="ABC">
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark ftco-navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
     <a href="#" title="" style="
    padding-top: -51px;
    margin-top: -35px;
">
        <div class="header-image">
                 <img class="img-fluid" src="{{url('public/images/logo.jpg')}}">
        </div>
       
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" dropdown-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="{{url('Clients')}}">Our Client</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('infra')}}">Our Infrastructure</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('Whyus')}}">Why United Press</a>
            </li>

          </ul>
        </li>
        

          <li class="nav-item">
            <a class="nav-link" href="{{url('services')}}">Our Services</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('team')}}">Our Team</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" dropdown-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Gallery
          </a>
          <ul class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="{{url('photo')}}">Photo Gallery</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{url('videos')}}">Video Gallery</a>
            </li>

          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{url('askquotes')}}">Ask Quotes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
        </li>   
      </ul>
    </div>

</nav>
</div>
</div>

