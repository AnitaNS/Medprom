<!DOCTYPE html>
<html lang="en">
	<head>
		<?php $this->load->view("aftr/part/head.php") ?>

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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title"><b>Iklan Anda</b></h3>
							</div>
							<form method="POST" action="<?php echo base_url(). 'C_userpost/tambah_aksi'; ?>" enctype="multipart/form-data">
							<div class="form-group">
								<p><b>Nama Usaha</b></p>
								<input class="input" type="text" name="judul" placeholder="Judul Post" required="">
							</div>
							<!-- Order notes -->
							<p><b>Deskripsi</b></p>
							<div class="isipost">
								<textarea id="summernote" class="input" name="isipost" placeholder="Isikan Artikel Menarik" required="">
									
								</textarea>
							</div>
							<div class="form-group">
								<p><b>Nama Pengirim</b></p>
								<select name="id_author" class="form-control" required="">
									<?php foreach($post as $row) : ?>
									<option value="<?php echo $row['id'] ?>">
										<?php echo $row['fname'] ?>
									</option>
									<?php endforeach ?>
								</select>
								
							</div>
							<div class="form-group">
								<p><b>Gambar</b></p>
								<input type="file" name="userfile" required="">
							</div>
							<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Kirim Iklan</button>
								<button class="btn btn-sekunder btn-flat"><i class="fa fa-check-circle"></i><a href="A_aftr"> Kembali ke Menu Utama</a></button>
							</div>
						</div>
							</form>
							</div>
						</div>
					</div>
				</div>
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
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<?php $this->load->view("aftr/part/footer.php") ?>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<?php $this->load->view("aftr/part/js.php") ?>

	</body>
</html>


