 <!DOCTYPE html>  
  <html lang="en">  
  <head>  
   <title>Registration</title>  
   <meta charset="utf-8">  
   <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
   <!-- Latest compiled and minified CSS -->  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
   <style type="text/css">  
    .form-box{  
     max-width: 900px;  
    position: relative;  
     margin: 5% auto;  
    }
   </style>
   <!-- CSS -->  
<!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/style.css"/>

    <!-- CSS --> 
  </head>  
  <body> 
  <!-- TEMPLATE --> 
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
            <?php $this->load->view("aftr/search.php") ?>
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
          <ul class="main-nav nav navbar-nav">
          <li><a href="w_web">Menu Utama</a></li>
          <li><a href="w_blank">Tentang Kami</a></li>
          <li><a href="w_product">Harga</a></li>
          <li><a href="w_blank">Hubungi Kami</a></li>
          <li><a href="w_store">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li data-toggle="modal"><a href="user">Daftar</a></li>
    
          <li data-toggle="modal"><a href="login">Login</a></li>
    
          </ul>
          <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
  <!-- TEMPLATE END -->
   <div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-default">  
        <div class="panel-heading text-center">  
         <h3>Register Member</h3>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo base_url(); ?>user/registration" method="post">  
          <div class="row">  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fname">Nama Depan</label>  
                      <div >  
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Nama Depan" required="">  
                        <span class="text-danger"><?php echo form_error('fname'); ?></span>  
                      </div>  
                  </div>  
           </div>  
           <div class="col-sm-6">  
            <div class="form-group">  
                    <label class="control-label" for="fname">Nama Belakang</label>  
                      <div >  
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Nama Belakang" required="">  
                        <span class="text-danger"><?php echo form_error('lame'); ?></span>  
                      </div>  
                  </div>  
           </div>  
          </div>  
          <div class="form-group">  
                  <label class="control-label" for="pswd">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('email'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="pswd">Telepon</label>  
                    <div>  
                      <input type="number" class="form-control" id="telepon" name="telepon" placeholder="telepon" required="">  
                      <span class="text-danger"><?php echo form_error('telepon'); ?></span>  
                    </div>  
                </div> 
                <div class="form-group">
                <label class="control-label" for="pswd">Alamat</label> 
                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>" name="alamat" placeholder="Alamat lengkap"></textarea> <div class="invalid-feedback">
                  <?php echo form_error('alamat') ?>

                </div>
                <div class="form-group">  
                  <label class="control-label" for="pswd">Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="pswd" name="password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">  
                  <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" required="">  
                      <span class="text-danger"><?php echo form_error('confirmpswd'); ?></span>  
                    </div>  
                </div>  
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
        </div>  
        <div class="panel-footer text-center">  
          <h5>Sudah punya akun? Silahkan Klik dibawah ini!</h5>
         <h5><a href="login">LOGIN</a> 
        </div>  
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

      <!-- FOOTER -->
    <footer id="footer">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Keuntungan Menjadi Member </h3>
                <p>Daftarkan bisnis anda di Jogmedia Promotion, Anda mempunyai potensi pelanggan lebih banyak. Kami menampilkan bisnis anda dengan detail. Label Prioritas untuk bisnis anda. Posisi teratas di setiap kategori, Tampilan bisnis yang di sorot.</p>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Kategori</h3>
                <ul class="footer-links">
                  <li><a href="#">Jasa Pembuatan Web</a></li>
                  <li><a href="#">Jasa Retal Mobil</a></li>
                  <li><a href="#">Dll.</a></li>
                </ul>
              </div>
            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Informasi</h3>
                <ul class="footer-links">
                  <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Kontak Kami</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Layanan</h3>
                <ul class="footer-links">
                  <li><a href="#">Bantuan</a></li>
                  <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->

      <!-- bottom footer -->
      <div id="bottom-footer" class="section">
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="footer-payments">
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
              </ul>
              <span class="copyright">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </span>
            </div>
          </div>
            <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /bottom footer -->

<!-- Register -->


    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/js/nouislider.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.zoom.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
  </body>  
  </html>  