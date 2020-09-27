
<?php 
require 'includes/header.php'
?>

<main>
	<link rel="stylesheet" href="css/login.css">
	<div class="bg-cover">
		<div class="row">
			<div id="carousel" class="carousel slide col-md-2 offset-md-5" data-ride="carousel"
				style="margin-top: 20px;">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
					<li data-target="#carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/draco.jpg" class="d-block mx-auto" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Constellation Draco</h5>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/orion.jpg" class="d-block mx-auto" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Constellation Orion</h5>
						</div>
					</div>
					<div class="carousel-item">
						<img src="images/leo.jpg" class="d-block mx-auto" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Constellation Leo</h5>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="h-100 center-me">
			<div class="my-auto">
				<form class="form-signin" action="includes/login-helper.php" method="post" style="background: white; margin: 10px;">
					<img src="images/star.png" style="width:60px; height:75px; padding:5px;">
					<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
					<label for="inputEmail" class="sr-only">Username or Email Address</label>
					<input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/Email" required=""
						autofocus="">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required="">
					<div class="checkbox mb-3" style="margin: 10px">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-dark btn-block" name="login-submit" type="submit">Sign in</button>
					<p class="mt-5 mb-3 text-muted">© 2020-2020</p>
				</form>
			</div>
		</div>

	</div>
</main>

