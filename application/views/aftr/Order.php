<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
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

		
		<div class="container"><br/>
	
	<div class="row">
		<div class="col-md-8">
		<form name="order" method="post" action="<?php echo base_url().'a_order/save_order' ?>" >
	    <h3>Order</h3>
	  
        <fieldset>
        <td>Order Total:</td><td><strong>$<?php echo number_format($grand_total,2); ?></strong></td>
		</fieldset>
		<br>
		<fieldset>
	      <input type="text" name="nama" placeholder="Nama" tabindex="1" required>
		</fieldset>
		<br>
        <fieldset>
	      <input type="text" name="alamat" placeholder="alamat" tabindex="1" required>
	    </fieldset>
		<br>
		<fieldset>
	      <input type="email" name="email" placeholder="Email" tabindex="1" required>
	    </fieldset>
		<br>
		<fieldset>
	      <input type="text" name="phone" placeholder="phone" tabindex="phone" required>
	    </fieldset>
		
			<br>

	    <fieldset>
	      <button name="submit" type="submit" id="img-submit" data-submit="...Sending">Submit</button>
	    </fieldset>
	   </form>
				
		

		</div>
		<div class="col-md-4">
			                

		
	
	 <div class="row">
                
                    <div class="box">
                        <h3 class="box-title">Pilih bank kamu</h3>
						
						<hr>
                       
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input id="question2" name="question" type="radio" class="with-font" value="sel" />
                                <label for="question2">Bank BCA</label>
                                <input type="image" src="<?= base_url() ?>assets/cart/images/2.png" style="float:left;" alt="Submit" width="150"><br>Transfer ke nomor rekening 0860528363, setelah melakukan transfer silakan lakukan konfirmasi
									</p>
                            </div>
                        </div>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input id="question3" name="question" type="radio" class="with-font" value="sel" />
                                <label for="question3">Bank BNI</label>
								 <input type="image" src="<?= base_url() ?>assets/cart/images/3.png" style="float:left;" alt="Submit" width="150"><br>Transfer ke nomor rekening  5557717777, setelah melakukan transfer silakan lakukan konfirmasi
									</p>
                            </div>
                        </div>
						<div class="plan-selection">
                            <div class="plan-data">
                                <input id="question4" name="question" type="radio" class="with-font" value="sel" />
                                <label for="question4">Bank BRI Virtual Account</label>
                                <input type="image" src="<?= base_url() ?>assets/cart/images/4.png" style="float:left;" alt="Submit" width="150">Transfer ke nomor rekening 0433-01-004131-50-1, setelah melakukan transfer silakan lakukan konfirmasi
									</p>
                            </div>
                        </div>
						
                    </div>
                  
                   
                </div>
            </div>
			</div>
			</div>
			</div>
			</div>
<script type="text/javascript" src="<?php echo base_url().'assets/cart/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/cart/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id    = $(this).data("produkid");
			var produk_nama  = $(this).data("produknama");
			var produk_harga = $(this).data("produkharga");
			var quantity     = $('#' + produk_id).val();
			$.ajax({
				url : "<?php echo base_url();?>cart/add_to_cart",
				method : "POST",
				data : {produk_id: produk_id, produk_nama: produk_nama, produk_harga: produk_harga, quantity: quantity},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});

		// Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>cart/load_cart");

		//Hapus Item Cart
		$(document).on('click','.hapus_cart',function(){
			var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
			$.ajax({
				url : "<?php echo base_url();?>cart/hapus_cart",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#detail_cart').html(data);
				}
			});
		});
	});
</script>



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
