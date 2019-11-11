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
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-pudsh-1 animate-box">

				<div class="fh5co-contact-info">
					<h3>Login Information</h3>
					<p>
						Login to register for our IT Classes
						<br>
						If you do not have an account please Click on the Signup botton
						<br>
						Login to take our Online Courses
					</p>
				</div>
			</div>

			<div class="col-md-6 animate-box">
				<h3>Login</h3>
				<form action="#">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				<div class="col-12 text-center">
					<a href="#" class="nav-link">Forgot Password</a>
				</div>
				<div class="col-12 text-center" style="padding: 1em 0;">OR</div>
				<div class="col-12 text-center">
					<a href="signup.php">
						<button class="btn btn-primary">REGISTER</button>
					</a>
				</div>

			</div>
		</div>
	</div>
</div>

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