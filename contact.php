<?php
require("./include/head.php");
?>
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/rawpixel.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>You Can Contact Us By Sending Us A Message</h1>

					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-push-1 animate-box">

				<div class="fh5co-contact-info">
					<h3>Contact Information</h3>
					<ul>
						<li class="address"> 15 Chief Amadi Street, Mile 4, PHC, <br> Rivers State, Nigeria</li>
						<li class="phone"><a href="tel://+2340898344373, +2348062527661"> +2348098344373, +23462527661</a></li>
						<li class="email"><a href="mailto:arotechnology@gmail.com">arotechnology@gmail.com</a></li>
						<li class="url"><a href="http://arotechnology.com">arotechnology.com</a></li>
					</ul>
				</div>

			</div>
			<div class="col-md-6 animate-box">
				<h3>Get In Touch</h3>
				<form action="#">
					<div class="row form-group">
						<div class="col-md-6">
							<!-- <label for="fname">First Name</label> -->
							<input type="text" id="fname" class="form-control" placeholder="Your firstname">
						</div>
						<div class="col-md-6">
							<!-- <label for="lname">Last Name</label> -->
							<input type="text" id="lname" class="form-control" placeholder="Your lastname">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="email">Email</label> -->
							<input type="text" id="email" class="form-control" placeholder="Your email address">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="subject">Subject</label> -->
							<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<!-- <label for="message">Message</label> -->
							<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="map" class="fh5co-map"></div>
<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Lets Get Started</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p><a href="#" class="btn btn-default btn-lg">Create A Free Course</a></p>
			</div>
		</div>
	</div>
</div>
<?php include("./include/footer.php"); ?>