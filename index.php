<?php
require("./include/head.php");
?>
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url('images/destwork.jpg');" data-stellar-background-ratio=0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>ANKARA TEXTILES <br> AND <br>LEATHERS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-blog">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>PURCHASE OUR PRODUCTS</h2>
				<p>We give the best prices and offers you desire.</p>
			</div>
		</div>
		<div class="row">
			<?php
			$sql = "SELECT * FROM products";
			$stmt = $pdo->prepare($sql);

			if ($stmt->execute()) {
				if ($stmt->rowCount() > 0) {
					while ($row = $stmt->fetch()) { ?>
						<form method="POST" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box">
									<a href="#">
										<img class="img-responsive" src="<?php echo $row["pimg"]; ?>" alt="Image" style="display:inline-block; height:26em !important;">
									</a>
									<div class="blog-text">
										<h3><?php echo $row["pname"]; ?></h3>
										<h3><a>N<?php echo $row["pprice"]; ?></a></h3>
										<span class="comment"><a><?php echo $row["pyards"]; ?> Yards</a></span>
										<br>
										<input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
										<input type="hidden" name="hidden_price" value="<?php echo $row["pprice"]; ?>">
										<input type="hidden" name="hidden_qty" value="<?php echo $row["qty"]; ?>">
										<button type="submit" name="add" class="btn btn-primary">Add to Cart</button>
									</div>
								</div>
							</div>
						</form>

			<?php
					}
				}
			}


			?>
			<!-- End of Products -->
			<div style="clear: both"></div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/bead4.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/bead2.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/bead3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/ankara4.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/bead1.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/darktan.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="images/project-3.jpg" alt=""></a>
					<div class="blog-text">
						<h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
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
				<p>Get the best prices and offers you desire.</p>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p><a href="#" class="btn btn-default btn-lg">Buy A Product</a></p>
			</div>
		</div>
	</div>
</div>

<?php include("./include/footer.php"); ?>