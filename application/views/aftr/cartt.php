<!DOCTYPE html>
<html lang="en">
	
        <?php $this->load->view("aftr/part/head.php") ?>
        <head> 
<script>
function clear_cart() {
	var result = confirm('Are you sure want to clear all bookings?');
	
	if(result) {
		window.location = "<?php echo base_url(); ?>a_cart/remove/all";
	}else{
		return false; // cancel button
	}
}
</script>
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

        <div style="margin:0px auto; width:600px;" >
	<div style="padding-bottom:10px">
		<h1 align="center">Your Advertising plan</h1>
		<input type="button" value="Select Your Advertising plan" onclick="window.location='a_payment'" />
	</div>
	<div style="color:#F00"><?php echo $message?></div>
	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
		<?php if ($cart = $this->cart->contents()): ?>
		<tr bgcolor="#FFFFFF" style="font-weight:bold">
			<td>Serial</td>
			<td>Name</td>
			<td>Price</td>
			<td>Qty</td>
			<td>Amount</td>
			<td>Options</td>
		</tr>
		<?php
		echo form_open('a_cart/update_cart');
		$grand_total = 0; $i = 1;
		
		foreach ($cart as $item):
			echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
			echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
			echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
			echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
			echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
		?>
		<tr bgcolor="#FFFFFF">
			<td>
				<?php echo $i++; ?>
			</td>
			<td>
				<?php echo $item['name']; ?>
			</td>
			<td>
				$ <?php echo number_format($item['price'],2); ?>
			</td>
			<td>
				<?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
			</td>
			<?php $grand_total = $grand_total + $item['subtotal']; ?>
			<td>
				$ <?php echo number_format($item['subtotal'],2) ?>
			</td>
			<td>
				<?php echo anchor('a_cart/remove/'.$item['rowid'],'Cancel'); ?>
			</td>
			<?php endforeach; ?>
		</tr>
		<tr>
			<td><b>Order Total: $<?php echo number_format($grand_total,2); ?></b></td>
			<td colspan="5" align="right"><input type="button" value="Clear Plan" onclick="clear_cart()">
					<input type="submit" value="Update Plan">
					<?php echo form_close(); ?>
					<input type="button" value="Countinue Order" onclick="window.location='a_order'"></td>
		</tr>
		<?php endif; ?>
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
