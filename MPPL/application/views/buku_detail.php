
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    
    .container{
    max-width: 1000px;
    }

    img{
      width: 100px;
      height: 100px;
    }
    
    </style>
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url(); ?>ico/read.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url(); ?>img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>index.php/home">Beranda</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/buku">Buku Saya</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/profile">Profile</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/pengaduan">Pengaduan</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/about">About Us</a></li>
            </ul>
      <div class="nav-collapse collapse">
      <ul class="nav pull-right">
        <li>
          <form class="form-search nav">
            <div class=" navbar-search input-prepend">
            <button type="submit" class="btn"><i class="icon-search"></i></button>
            <input type="text" class="search-query span2" placeholder="Find User">
            </div>
          </form>
        </li>
        <li>
          <div class="btn-group">
          <a href="<?php echo base_url(); ?>index.php/profile" class="btn btn-primary"><i class="icon-user icon-white"></i>Wimba</a>
          <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/profile/ubah"><i class="icon-pencil"></i> Edit profile </a></li>
            <li><a href="<?php echo base_url(); ?>index.php"><i class="icon-off"></i> Logout </a></li>
          </ul>
          </div>
        </li>
      </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <div class="page-header">
      <h1> <img src="<?php echo base_url(); ?>img/bookdes.png" class="img-rounded"> Detail Buku </h1>
    </div>
    
    <div class="hero-unit">
      <div class="row">

      <table class="table">
        <td>
          <div class="col-md-4">
            <img src="<?php echo base_url(); ?>img/hp.jpg" class="img-rounded">
          </div>
        </td>
        <td>
         <div class="col-md-8">
        <table class="table table-striped">        
        <tr>
          <td>
            Judul Buku
          </td>
          <td>
            Harry Potter
          </td>
        </tr>
        <tr>
          <td>
            Penulis
          </td>
          <td>
            J. K. Rowling
          </td>
        </tr>
        <tr>
          <td>
            Penerbit
          </td>
          <td>
            Bloomsbury
          </td>
        </tr>
        <tr>
          <td>
            Tahun Terbit
          </td>
          <td>
            2010
          </td>
        </tr>
        <tr>
          <td>
            Deskripsi Singkat
          </td>
          <td>
            Seri terakhir dari petualangan Harry Potter 
          </td>
        </tr>
        <tr>
          <td>
            Kategori
          </td>
          <td>
            Hiburan 
          </td>
        </tr>
      </table>
      </div>
        <a href="<?php echo base_url(); ?>index.php/buku/edit" class="btn btn-primary">Edit Buku</a>
            <a href="<?php echo base_url(); ?>index.php/buku/hapus" class="btn btn-primary">Hapus Buku</a> 
        </td>
      </table>
    </div>
    
    <hr>
    
    <footer>
        <p><h5>&copy; MPPL E03 2015</h5></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>

  </body>
</html>
