<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN SUKSES</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/imagesuser/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/imagesuser/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/imagesuser/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/imagesuser/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/imagesuser/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo base_url() ?>assets/imagesuser/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=#><i class="fa fa-lock"></i> Hai <?php echo $this->session->userdata("nama"); ?></a></li>
								<li><a href=#><i class="fa fa-lock"></i> Login Sukses</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								
								
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Batik</span> Indonesia</h1>
									<h2>Marketplace Batik No. 1 Indonesia</h2>
									<p>Segala jenis batik dan warisan budaya yang sangat tak ternilai harganya, temukan semuanya disini!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url() ?>assets/imagesuser/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url() ?>assets/imagesuser/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Batik</span> Indonesia</h1>
									<h2>Marketplace Batik No. 1 Indonesia</h2>
									<p>Segala jenis batik dan warisan budaya yang sangat tak ternilai harganya, temukan semuanya disini!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									
									<img src="<?php echo base_url() ?>assets/imagesuser/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url() ?>assets/imagesuser/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Batik</span> Indonesia</h1>
									<h2>Marketplace Batik No. 1 Indonesia</h2>
									<p>Segala jenis batik dan warisan budaya yang sangat tak ternilai harganya, temukan semuanya disini!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url() ?>assets/imagesuser/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url() ?>assets/imagesuser/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					
				</div>
				
				
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 Batik Indonesia Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/price-range.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>
</html>