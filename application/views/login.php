
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SIPYuda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/styl-Loader.css" rel="stylesheet">
	  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/Graduation Cap-26.png"> 

    <script src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/application.js"></script>
   
    <script type="text/javascript">
      $(window).load(function() { $(".preload-wrapper").fadeOut("slow"); })
    </script>

  </head>

  <body background="<?php echo base_url(); ?>../../assets/img/1.jpg">
    <div class="preload-wrapper">
    <div id="preloader5"></div>
  </div>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">SIPYuda</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
              </li>
              </li>
            </ul>
			<?php echo form_open('con_login','class="navbar-form pull-right"'); ?>
              <input class="span2" type="text" name="username" placeholder="Username...">
              <input class="span2" type="password" name="password" placeholder="Password...">
              <button type="submit" class="btn btn-primary " name="submit"><i class="icon-share icon-white"></i> Log in</button>
           <?php echo form_close(); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">

      <div class="hero-unit">
        
        <h2>Selamat Datang di SIPYuda</h2>
        <p>SIPYuda ( Sistem Informasi Pendaftaran Yudisium atau Wisuda ) merupakan sebuah 
          aplikasi untuk melakukan pendaftaran yudisium dan wisuda di Perguruan Tinggi. 
          Silahkan masukkan username dan password anda 
          untuk mulai menggunakan aplikasi ini</p>
          <p>
            <p>Terimakasih....
      </div>


      <footer class="well" >
        <p><center>Copyright @ RPL_2015</center></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
