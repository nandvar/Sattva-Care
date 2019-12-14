<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Sattva Care">
		<meta name="author" content="Aanand Vardhan">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />


		<title>Sattva Care</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700italic,800,800italic,700,600italic" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

		<!-- Vendor Styles -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">

		<!-- Theme Styles -->
		<link href="css/ada.css" rel="stylesheet">
		<link href="css/ada-themes.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">

		<!-- HTML5 shiv for IE8 support -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="loading"></div>
	
		<div class="float">
			<ul class="list-unstyled">
				<li><a href="https://www.facebook.com/sattvacaresocial/" target="_blank" style="color: #7f7f7f;"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/sattvacare/" target="_blank"><i class="fa fa-twitter" style="color: #7f7f7f;"></i></a></li>
				<li><a href="https://www.instagram.com/sattvacare/" target="_blank"><i class="fa fa-instagram" style="color: #7f7f7f;"></i></a></li>
			</ul>
		</div>

		<div id="header">
			<div class="top">
				<a class="brand" href="/"><img src="img/logo.png" style="width: 10%; padding: 0.5%;" /></img></a>
				<img src="img/title.png"/></img>
			</div>			

			<nav class="navbar navbar-ada" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li class="dropdown"><a href="/">Home</a></li>
						<li class="dropdown"><a href="about">About</a></li>
						<li class="dropdown"><a href="admission">Admission</a></li>
						<li class="dropdown"><a href="faq">FAQ</a></li>
						<li class="dropdown"><a href="volunteer">Volunteer</a></li>
						<li class="dropdown"><a href="contact">Contact</a></li>

					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		
		@yield('content')

		<div id="footer">
			<!--<div id="subscribe">
				<div class="container">
					
					<div class="form-inline">
						<div class="form-group">
							<p>Stay updated on latest updates &amp; promotions</p>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Your email address">
								<span class="input-group-btn">
									<button class="btn btn-theme" type="button" style="margin-left: 5%;">Subscribe</button>
								</span>
							</div>
						</div>
					</div>

				</div>
			</div>-->

			<div id="links">
				<div class="container">
					
					<div class="col-sm-2">
						<p class="brand"><img src="img/logo.png" style="width: 50%;"/></img></p>
					</div>

					<div class="col-sm-8">
						<ul class="list-inline">
							<li><a href="/">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
						<p style="text-align: center;color: #7f7f7f;font-size: 100%;">© 2017 Sattva Care. All Rights Reserved.</p>
					</div>

					<div class="col-md-2">
						<ul class="list-inline">
							<li><a href="https://www.facebook.com/sattvacaresocial/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/sattvacare/" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/sattvacare/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<a id="scroll-to-top">
			<i class="fa fa-angle-up"></i>
		</a>


		<!-- Vendor Scripts -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/smoothScroll.js"></script>
		<script src="js/wow.min.js"></script>
		<!-- Theme Scripts -->
		<script src="js/main.js"></script>

	</body>
</html>