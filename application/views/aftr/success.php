<!DOCTYPE html>
<html lang="en">
	
        <?php $this->load->view("aftr/part/head.php") ?>
        <head> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/formmul.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/cart/css/bootstrap.css'?>">
	<script src="<?= base_url() ?>assets/css/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/css/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/success/bootstrap.min.css'?>">
</head>

   
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/jogmed.png" style="width: 142px" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
	
				<ul class="nav navbar-nav navbar-right">
    			<li data-toggle="modal" ><a href="<?php echo base_url() ?>a_member/logout">Keluar</a></li>
		
   				</ul>
					<!-- /NAV -->
                </div>
</div>
</nav>


        <div class="jumbotron text-center">
  <h1 class="display-3">Thanks you, your order has ben received!</h1>
  <p class="lead"><strong>Segera Transfer dan konfirmasi pembayaran </strong></p>
  <hr>
  
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
  </p>
<br>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="a_konfirmasi" role="button">Konfirmasi</a>
  </p>
</div>


		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
                


    <?php $this->load->view("web/part/footer.php") ?>
	<?php $this->load->view("web/part/js.php") ?>

	</body>
</html>
