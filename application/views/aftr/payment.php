<!DOCTYPE html>
<html lang="en">
	
        <?php $this->load->view("aftr/part/head.php") ?>
        <head> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/formmul.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/cart/css/bootstrap.css'?>">
	<script src="<?= base_url() ?>assets/css/paym2.js"></script>
<script src="<?= base_url() ?>assets/css/paym.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/paym.css'?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/paym2.css'?>">
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
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		
		<div align="center">
	<h1 align="center">Select Your Advertising Plan</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
			foreach ($products as $product){
				$id = $product['serial'];
				$name = $product['name'];
				$description = $product['description'];
				$price = $product['price'];
		?>
    	<tr>
        	
            <td><b><?php echo $name; ?></b><br />
            		<?php echo $description; ?><br />
                    Price:<big style="color:green">
                    $<?php echo $price; ?></big><br /><br />
                    <?php
					echo form_open('A_cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Pilih');
					echo form_close();
					?>
			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } ?>
    </table>
</div>



		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
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
