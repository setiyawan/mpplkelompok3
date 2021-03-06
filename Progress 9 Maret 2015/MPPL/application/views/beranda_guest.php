<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	  
	  img {
		width: 100px;
		height: 100px;
	  }
	  
	  .table th,  
	  .table td{
		text-align: center;
	  }
	  
	  .container{
		max-width: 1000px;
	  }
	  
	  .input-small{
		width: 222px;
	  }
	  	  
    </style>
    <link href="<?php echo base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url() ?>ico/read.png">
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
          <a class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url()?>/img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Beranda</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/pengaduan/Guest">Pengaduan</a></li>
			  <li><a href="<?php echo base_url()?>index.php/sistem/aboutus/Guest">Tentang Kami</a></li>
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
					<a href="<?php echo base_url()?>index.php/login" class="btn btn-primary"><i class="icon-user icon-white"></i> Login </a>
					</div>
				</li>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="container">
	
	<div class="page-header">
		<h1> <img src="<?php echo base_url() ?>img/book_stack.png" class="img-rounded"> Klasifikasi Buku </h1>
	</div>
	
	<h5 class="text text-succes"> Cari buku berdasarkan: </h5>
		<form class="form-inline text-right">
			<input type="text" class="input-small" placeholder="Judul">
			<input type="text" class="input-small" placeholder="Tahun">				
			<input type="text" class="input-small" placeholder="Penerbit">
			<input type="text" class="input-small" placeholder="Pengarang">
			<a href="searchresult.html" type="submit" class="btn"><i class="icon-search"></i></a>
		</form>
		
	<div class="hero-unit">
				
		<table class="table">
		<thead>
			<tr>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/pc.png" class="img-rounded"></a> </td>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/factory.png" class="img-rounded"></a> </td>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/science.png" class="img-rounded"></a> </td>		
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/sipil.png" class="img-rounded"></a> </td>
			</tr>
		</thead>
		<tbody>
			<tr>
			<td> <a href="klasifikasi.html" class="text-info"> Komputer </td>
			<td> <a href="klasifikasi.html" class="text-info"> Industri </td>
			<td> <a href="klasifikasi.html" class="text-info"> Science </td>
			<td> <a href="klasifikasi.html" class="text-info"> Sipil </td>
			</tr>
			<tr>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/ship.png" class="img-rounded"></a> </td>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/seni.png" class="img-rounded"></a> </td>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/football.png" class="img-rounded"></a> </td>		
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/historical.png" class="img-rounded"></a> </td>
			</tr>
			<tr>
			<td> <a href="klasifikasi.html" class="text-info"> Kelautan </td>
			<td> <a href="klasifikasi.html" class="text-info"> Seni </td>
			<td> <a href="klasifikasi.html" class="text-info"> Olahraga </td>
			<td> <a href="klasifikasi.html" class="text-info"> Sejarah </td>
			</tr>
			<tr>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/bisnis.png" class="img-rounded"></a> </td>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/biografi.png" class="img-rounded"></a> </td>
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/komik.png" class="img-rounded"></a> </td>		
			<td> <a href="klasifikasi.html"><img src="<?php echo base_url() ?>img/other.png" class="img-rounded"></a> </td>
			</tr>
			<tr>
			<td> <a href="klasifikasi.html" class="text-info"> Bisnis </td>
			<td> <a href="klasifikasi.html" class="text-info"> Biografi </td>
			<td> <a href="klasifikasi.html" class="text-info"> Hiburan </td>
			<td> <a href="klasifikasi.html" class="text-info"> Lain-lain </td>
			</tr>
			<tr>
			<td></td><td></td><td></td><td></td>
			</tr>
		</tbody>
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
    <script src="<?php echo base_url() ?>js/jquery.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-button.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-typeahead.js"></script>

  </body>
</html>
