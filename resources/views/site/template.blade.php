<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="{{asset('site/img/fav.png')}}" type="image/x-icon"/>
		<link rel="icon" type="image/png" href="{{asset('site/img/fav.png')}}"/>
		<link rel="stylesheet" href="{{asset('site/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('site/fontawesome/css/all.css')}}">
		<link rel="stylesheet" href="{{asset('site/css/style.css')}}">
	</head>
	<body>
		<section id="topheader">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-7 col-sm-7">
						<i class="fas fa-phone" style="margin-left:10px;"></i> <span>Call Us +977 9857620327</span>
					</div>
					<div class="col-md-9 col-xs-5 col-sm-5 topheader-left">
							<i class="fas fa-envelope-square" style="margin-left: 10px;"></i> <a href="">Check Email</a>
					</div>
				</div>
			</div>
		</section>
		<section id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-9 col-sm-9">
						<img src="{{asset('site/img/logo.png')}}" class="img-fluid" alt="">
					</div>
					<div class="col-md-9 col-xs-3 col-sm-3 pull-right menubar">
						
						<nav class="navbar navbar-right navbar-expand-lg navbar-light" style="text-align: right;">
						  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  	</button>
						  	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right;">
							    <ul class="navbar-nav ml-auto" style="text-align: right;">
							      <li class="nav-item active">
							        <a class="nav-link" href="{{route('getHome')}}">Home <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="nav-item dropdown">
							        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							          About Us
							        </a>
							        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
							          <a class="dropdown-item" href="{{route('getPage','about-us')}}">About School</a>
							          <a class="dropdown-item" href="{{route('getPage','principle')}}">Principle Message</a>
							          <a class="dropdown-item" href="{{route('getTeam','ac')}}">Academic Team</a>
							          <a class="dropdown-item" href="{{route('getTeam','ad')}}">Administrative Team</a>
							        </div>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="{{route('getFeatures')}}">Our Features </span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="{{route('getNews')}}">News &amp; Events </span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="{{route('getGallery')}}">Gallery </span></a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="{{route('getContact')}}">Contact Us </span></a>
							      </li>
							    </ul> 
						  </div>
						</nav>
					</div>
				</div>
			</div>
		</section>
		@yield('content')
		<section id="footer" style="background: black;">
			<div class="container">
				<div class="row">
					<div class="col-md-6" style="color: white;">
						<h4 style="padding-bottom: 15px;color:#ffc107;">Contact Details</h4>
						<h5 style="padding-bottom: 10px; color: white;">Shree Deupur Namuna English Secondary Boardinh</h5>
						<small style="font-size: 17px; padding-bottom: 10px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px; color: white"></i >Modi-2, Patichaur, <br>
						<i class="fas fa-tty" style="margin-right: 5px; color: white"></i>Telephone:067410011 <br>
						<i class="fas fa-phone-square-alt" style="margin-right: 5px; color: white;"></i>Founder No: 9857620327 <br>
						<i class="fas fa-envelope-open-text" style="margin-right: 5px; color: white;"></i>Email:deupurnauma@gmail.com
						</small>
						<div class="col-md-4 footericon" style="padding-top: 20px; color:#ffc107; ">
							<i class="fab fa-facebook-square"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-youtube-square"></i>
							<i class="fas fa-camera-retro"></i>
						</div>
					</div>
					<div class="col-md-6">
						<div class="container" style="padding:20 0px; padding: center;">
							<div class="row">
								<h4> </h4>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3513.8460986249634!2d83.7378955145513!3d28.272683107027852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e5c00ee54185%3A0x26a84957c4da033e!2sDeupur%20Namuna%20Secondary%20Boarding%20School!5e0!3m2!1sen!2snp!4v1601196040108!5m2!1sen!2snp" width="500" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						Copyright 2020 &copy; Deupur Namuna English Boarding School, All rights reserved.
					</div>
					<div class="col-md-4 text-right">
						Develop by Bishnu Maya Dhakal
					</div>
				</div>
			</div>
		</section>
	<script src="{{asset('site/js/jQuery.js')}}"></script>
	<script src="{{asset('site/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('site/fontawesome/js/all.js')}}"></script>
	</body>
</html>