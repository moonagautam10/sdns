@extends('site.template')
@section('content')
<div id="page" style="margin-top: 102px;">
	<section id="pageheading">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3> Contact Page </h3>
							<span><a href="">Home</a>/ <a href="">About us</a> / <a href="">Cotact Us</a> </span>
						</div>
					</div>
				</div>
			</section>
	<section id="contactpage" style=" padding-top: 15px;">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<span style="color: #ffc107;text-align: center; padding: 20 0px; font-style: italic;"><h2 style="padding-bottom: 20px;">Contact Us</h2></span>
		</div>
		<div class="col-md-6" style="">
			<h4 style="padding-bottom: 15px;color:#ffc107;">Contact Details</h4>
			<h5 style="padding-bottom: 10px; ">Shree Deupur Namuna English Secondary Boardinh</h5>
			<small style="font-size: 17px; padding-bottom: 10px;">
			<i class="fas fa-map-marker-alt" style="margin-right: 5px; color: white"></i >Modi-2, Patichaur, <br>
			<i class="fas fa-tty" style="margin-right: 5px; "></i>Telephone:067410011 <br>
			<i class="fas fa-phone-square-alt" style="margin-right: 5px; "></i>Founder No: 9857620327 <br>
			<i class="fas fa-envelope-open-text" style="margin-right: 5px; "></i>Email:deupurnauma@gmail.com
		</small>
		<div class="col-md-4" style="padding-top: 20px; color:#ffc107; ">
			<i class="fab fa-facebook-square" style="font-size: 20px;"></i>
			<i class="fab fa-twitter-square"style="font-size: 20px;" ></i>
			<i class="fab fa-youtube-square"style="font-size: 20px;"></i>
			<i class="fas fa-camera-retro" style="font-size: 20px;"></i>
		</div>

		</div>
		<div class="col-md-6" style="">
			<h4 style="color: #ffc107;">Send us a message</h4>
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Your Name</label>
			    <input type="name" class="form-control"  aria-describedby="emailHelp" placeholder="Type Your Name">
			    
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type Your Email address">
			  </div>
			  	<div class="form-group">
	            	<label for="exampleInputPassword1">Your Message</label>
	                <textarea class="form-control"  name="message" placeholder="Type Your Message"></textarea>
	            </div>
			 
			  <button type="submit" class="btn btn-primary">Send a message</button>
			</form>
		</div>
	</div>
</div>
</section>
<section id="map">
	<div class="container" style="padding:20 0px; padding: center;">
		<div class="row">
			<h4> </h4>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3513.8460986249634!2d83.7378955145513!3d28.272683107027852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e5c00ee54185%3A0x26a84957c4da033e!2sDeupur%20Namuna%20Secondary%20Boarding%20School!5e0!3m2!1sen!2snp!4v1601196040108!5m2!1sen!2snp" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</section>

</div>
@stop
