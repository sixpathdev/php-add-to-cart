<?php
require("./include/head.php");

$firstname = $lastname = $email = $password = $phone = '';

$errors = array('firstname' => '', 'lastname' => '', 'email' => '', 'password' => '', 'phone' => '');

if (isset($_POST["submit"])) {
	if(empty($_POST["email"])){
		$errors["email"] = "Email field should not be empty";
	} else {
		$email = $_POST["email"];
	}

	if (empty($_POST["firstname"])) {
		$errors["firstname"] = "Firstname field should not be empty";
	} else {
		$firstname = $_POST["firstname"];
	}

	if (empty($_POST["lastname"])) {
		$errors["lastname"] = "Lastname field should not be empty";
	} else {
		$lastname = $_POST["lastname"];
	}

	if (empty($_POST["phone"])) {
		$errors["phone"] = "Phone field should not be empty";
	} else {
		$phone = $_POST["phone"];
	}

	if (empty($_POST["password"])) {
		$errors["password"] = "Password field should not be empty";
	} else {
		$password = $_POST["password"];
	}
}
?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/rawpixel.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>SignUp</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-5 animate-box">
				<div class="fh5co-contact-info">
					<h3>SignUp Information</h3>
					<p>
						Please Signup if you do not have an account
						<br>
						If you have an account please Click on the Login botton
						<br>
						Signup to take our Online Courses
					</p>
				</div>
			</div>

			<div class="col-md-7 animate-box text-center">
				<h3>SignUp</h3>
				<form method="POST" action="signup.php">
					<div class="row form-group">

						<div class="row form-group">
							<div class="col-md-12">

								<input type="name" name="firstname" placeholder="First Name">

								<input type="name" name="lastname" placeholder="Last Name">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">

								<input type="email" name="email" placeholder="Your Email Address">

							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="password" name="password" placeholder="Your Password">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="tel" name="phone" placeholder="Phone Number">
							</div>
						</div>

						<div class="form-group">
							<input type="submit" name="submit" value="Signup" class="btn btn-primary">
						</div>

					</div>
				</form>
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