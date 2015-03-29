<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	  
	  .container{
		max-width: 1000px;
	  }
	  
    </style>
    <link href="<?php echo base_url()?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url()?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url()?>ico/read.png">
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
          <a class="brand">ITS Punya Buku</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url() ?>index.php/profil/beranda/<?php echo $Mahasiswa[0]->NRP?>">Beranda</a></li>
              <li><a href="#">Buku Saya</a></li>
              <li class="active"><a href="<?php echo base_url() ?>index.php/profil/index/<?php echo $Mahasiswa[0]->NRP?>">Profile</a></li>
              <li><a href="#">Pengaduan</a></li>
              <li><a href="#">About Us</a></li>
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
            <a href="<?php echo base_url()?>index.php/profil/index/<?php echo $Mahasiswa[0]->NRP?>" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $Mahasiswa[0]->NamaUser?></a>
            <a href="<?php echo base_url()?>index.php/login" class="btn"><i class="icon-off"></i> Logout </a>            
            </div>
        </li>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
		<div class="page-header">
			<h1> <img src="<?php echo base_url()?>img/editprofile.png" class="img-rounded"> Edit Profile </h1>
		</div>
		
		<div class="hero-unit">
			<form class="form-signin" action="<?php echo base_url()?>index.php/profil/ubah/<?php echo $Mahasiswa[0]->NRP?>" method="POST">
        <h3 class="form-signin-heading">Masukkan Data Diri Anda</h3>
        <br>
        <label> <h5> Nama </h5> </label>
            <input type="text" class="input-block-level" id="Nama" name="Nama" value="<?php echo $Mahasiswa[0]->NamaUser?>">
        <label> <h5> NRP/NIP </h5> </label>
            <input type="text" class="input-block-level" placeholder="<?php echo $Mahasiswa[0]->NRP?>" readonly>
        <label> <h5> Pekerjaan </h5> </label>
            <input type="text" class="input-block-level" id="Pekerjaan" name="Pekerjaan" value="<?php echo $Mahasiswa[0]->Pekerjaan?>">
        <label> <h5> Nomor HP </h5> </label>
            <input type="text" class="input-block-level" id="HP" name="HP" value="<?php echo $Mahasiswa[0]->NoTelp?>">

        <label> <h5> Alamat </h5> </label>
        <textarea class="input-block-level" id="Alamat" name="Alamat" rows="3" ><?php echo $Mahasiswa[0]->Alamat?></textarea> 
        <label> <h5> Foto Diri </h5> </label>
        <input type="text" class="input-block-level">
        <button class="btn btn-primary">Browse</button>
        <br><br><br>
        <p class="text-right"><a href="signin.html" class="btn btn-large btn-primary" type="submit" >Cancel</a>
        <input class="btn btn-large btn-primary" type="submit" value="Submit"></p>
      </form>
		</div>
		
		<hr>
		
	  <footer>
        <p><h5>&copy; MPPL E03 2015</h5></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap-typeahead.js"></script>

  </body>
</html>
