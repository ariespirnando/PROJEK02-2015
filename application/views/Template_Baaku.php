
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SIPYuda :: Operator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/styl-Loader.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/ico/Graduation Cap-26.png">  
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/colorbox/colorbox.css" />
  
    <script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/application.js"></script>
  
  <script>
      $(document).ready(function(){
        //Examples of how to assign the ColorBox event to elements
        $(".medium-box").colorbox({rel:'group', iframe:true, width:"90%", height:"90%"});
      });
  </script>

  <script type="text/javascript">
    $(window).load(function() { $(".preload-wrapper").fadeOut("slow"); })
  </script>


  </head>

  <body>
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
          <a class="brand">SIPYuda</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url();?>index.php/con_baaku"><i class="icon-home icon-white"></i> Home</a></li>
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>index.php/con_baaku/laporanIT"><i class="icon-tag"></i> Laporan Pendaftararan TI</a></li>
                  <li><a href="<?php echo base_url();?>index.php/con_baaku/laporanSI"><i class="icon-tag"></i> Laporan Pendaftararan SI</a></li>
                  <li><a href="<?php echo base_url();?>index.php/con_baaku/noKursi"><i class="icon-tag"></i> Nomor Kursi</a></li>
                  <li><a href="<?php echo base_url();?>index.php/con_baaku/jadwal"><i class="icon-tag"></i> Penjadwalan</a></li>
                </ul>
              </li>
             </ul>
        <div class="btn-group pull-right">
          <button class="btn btn-primary"><i class="icon-user icon-white"></i></button>
          <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span> Operator
          </button>
        <ul class="dropdown-menu">
        <li><a href="<?php echo base_url()?>index.php/con_login/logout"><i class="icon-off"></i> Log Out</a></li>
        <li><a href="<?php echo base_url();?>index.php/con_baaku/Pengaturan"><i class="icon-wrench"></i> Setting</a></li>
        </ul>
      </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  
    <div class="container">
  
  <div class="well">
    <div class="row">
    <div class="span">
      <div class="image"><img src="<?php echo base_url(); ?>assets/img/test.png"></div>
    </div>
    </div>
  </div>

  <div class="well">
    <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">

   <?php echo $contents; ?>
  
    </div>
      <footer class="well" >
        <p><center>Copyright @ RPL_2015</center></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
