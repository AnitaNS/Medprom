x<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	 <?php $this->load->view("aftr/part/head.php") ?>
		<head>
        <link href="<?= base_url() ?>assets/css/btn.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<style type="text/css">
/*
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
*/

* {
margin: 0;
padding: 0;
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-font-smoothing: antialiased;
-moz-font-smoothing: antialiased;
-o-font-smoothing: antialiased;
font-smoothing: antialiased;
text-rendering: optimizeLegibility;
}


.containerr {
max-width: 500px;
width: 100%;
margin: 0 auto;
position: relative;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="url"],
textarea,
#img button[type="submit"] {
font: 400 12px  Helvetica, Arial, sans-serif;
}

#img {
background: #F9F9F9;
padding: 25px;
margin: 50px 0;
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

h3 {
display: block;
font-size: 30px;
font-weight: 300;
margin-bottom: 10px;
text-align: center;
}

h4 {
margin: 5px 0 15px;
display: block;
font-size: 13px;
font-weight: 400;
text-align: center;
}

a {
	text-decoration: none;
	color: #777;
}

a:hover {
	font-weight: bold;
}
fieldset {
border: medium none !important;
margin: 0 0 10px;
min-width: 100%;
padding: 0;
width: 100%;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="url"],
textarea {
width: 100%;
border: 1px solid #ccc;
background: #FFF;
margin: 0 0 5px;
padding: 10px;
}

input[type="text"]:hover,
input[type="email"]:hover,
input[type="tel"]:hover,
input[type="url"]:hover,
textarea:hover {
-webkit-transition: border-color 0.3s ease-in-out;
-moz-transition: border-color 0.3s ease-in-out;
transition: border-color 0.3s ease-in-out;
border: 1px solid #aaa;
}

textarea {
height: 100px;
max-width: 100%;
resize: none;
}

input[type="file"] {
cursor: pointer;

border: none;
color: #FFF;
margin: 0 0 5px;
padding: 10px;
font-size: 15px;
}

button[type="submit"] {
cursor: pointer;
width: 100%;
border: none;
background: #4c576e;
color: #FFF;
margin: 0 0 5px;
padding: 10px;
font-size: 15px;
}

button[type="submit"]:hover {
background: #39455e;
-webkit-transition: background 0.3s ease-in-out;
-moz-transition: background 0.3s ease-in-out;
transition: background-color 0.3s ease-in-out;
}

button[type="submit"]:active {
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.creator {
text-align: center;
}

input:focus,
textarea:focus {
outline: 0;
border: 1px solid #aaa;
}

::-webkit-input-placeholder {
color: #888;
}

:-moz-placeholder {
color: #888;
}

::-moz-placeholder {
color: #888;
}

:-ms-input-placeholder {
color: #888;
}

	</style>
</head>
<body>


       

	
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
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
						<li><a href="a_member"><i class="fa fa-user-o"></i> My Account</a></li>
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
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Daftar Harapan</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
								
									<a href="a_payment">
										<i class="fa fa-shopping-cart"></i>
										<span>Kartu Anda</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="checkout">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
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
				<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Member</h3>
						<ul class="breadcrumb-tree">
							<li class="active">Dashboard</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
	<div class="containerr">
		<?php echo form_open_multipart('a_konfirmasi/image_upload/' , array('id' => 'img'));?>
	    <h3>Konfirmasi Pembayaran</h3>
	    
		<div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" name="kodeorder" placeholder="Kode Order" required="required"></div>
				<div class="col-xs-6"><input type="text" class="form-control" name="no_invoice" value="<?php echo $invoice;?>" required="required" readonly value=""></div>
			</div>        	
        </div>
	
		<fieldset>
	      <input type="text" name="nama" placeholder="Nama" tabindex="1" required>
	    </fieldset>
		<fieldset>
	      <input type="email" name="email" placeholder="Email" tabindex="1" required>
	    </fieldset>
		<fieldset>
	      <input type="text" name="tf" placeholder="Jumlah TF" tabindex="1" required>
	    </fieldset>
			<fieldset>
	      <input type="file" name="pic" tabindex="2" required>
	    </fieldset>
			

	    <fieldset>
	      <button name="submit" type="submit" id="img-submit" data-submit="...Sending">Submit</button>
	    </fieldset>
	   </form>
	</div>
<!-- NEWSLETTER -->
		
                


    <?php $this->load->view("web/part/footer.php") ?>
	<?php $this->load->view("web/part/js.php") ?>

	</body>
</html>
