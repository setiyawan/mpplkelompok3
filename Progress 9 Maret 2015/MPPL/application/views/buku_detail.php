
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
    <?php 
      $data['NRP'] = $Other[0]->NRP;
      $data['NamaUser'] = $Other[0]->NamaUser;
      foreach ($Mahasiswa as $row) {
                  $data['ID_Buku'] = $row->ID_Buku;
                  $data['Nama_Buku'] = $row->Nama_Buku;
                  $data['Deskripsi'] = $row->Deskripsi;
                  $data['Kategori'] = $row->Kategori;
                  $data['Penulis'] = $row->Penulis;
                  $data['Penerbit'] = $row->Penerbit;
                  $data['Tahun'] = $row->Tahun;
                  $data['Status'] = $row->Status;
                  $data['JReservasi'] = $row->JReservasi;
                  $num = 1;
                }?>
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
             <li><a href="<?php echo base_url() ?>index.php/profil/beranda/<?php echo $data['NRP']?>">Beranda</a></li>
              <li class="active"><a href="<?php echo base_url()?>index.php/buku/daftarbuku/<?php echo $data['NRP']?>">Buku Saya</a></li>
              <li><a href="<?php echo base_url() ?>index.php/profil/index/<?php echo $data['NRP']?>">Profil</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/pengaduan/<?php echo $data['NRP']?>">Pengaduan</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/aboutus/<?php echo $data['NRP']?>">Tentang Kami</a></li>
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
            <a href="<?php echo base_url()?>index.php/profil/index/<?php echo $data['NRP']?>" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $data['NamaUser']?></a>
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">            
            <li><a href="<?php echo base_url()?>index.php/profil/editprofile/<?php echo $data['NRP']?>"><i class="icon-pencil"></i> Ubah Profil </a></li>
            <li><a href="<?php echo base_url()?>index.php/login/ganti_pass/<?php echo $data['NRP']?>"><i class="icon-cog"></i> Ganti Kata Sandi </a></li>
            <li><a href="<?php echo base_url()?>index.php/login" class="btn"><i class="icon-off"></i> Keluar </a></li>
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
            <?php echo $data['Nama_Buku'];  ?>
          </td>
        </tr>
        <tr>
          <td>
            Penulis
          </td>
          <td>
            <?php echo $data['Penulis'];  ?>
          </td>
        </tr>
        <tr>
          <td>
            Penerbit
          </td>
          <td>
            <?php echo $data['Penerbit'];  ?>
          </td>
        </tr>
        <tr>
          <td>
            Tahun Terbit
          </td>
          <td>
            <?php echo $data['Tahun'];  ?>
          </td>
        </tr>
        <tr>
          <td>
            Deskripsi Singkat
          </td>
          <td>
            <?php echo $data['Deskripsi'];  ?>
          </td>
        </tr>
        <tr>
          <td>
            Kategori
          </td>
          <td>
            <?php echo $data['Kategori'];  ?> 
          </td>
        </tr>
      </table>
      </div>
            <a href="<?php echo base_url()?>index.php/buku/editbuku/<?php echo $data['NRP']?>/<?php echo $ID_Buku?>" class="btn btn-primary">Edit Buku</a>
            <a href="<?php echo base_url()?>index.php/buku/hapusbuku/<?php echo $data['NRP']?>" class="btn btn-primary">Hapus Buku</a> 
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
