<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url()?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	  
	  .container{
		max-width: 1000px;
	  }
	  
    </style>
    <link href="<?php echo base_url()?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url()?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url()?>/ico/read.png">
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
          <a href="beranda.html" class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url()?>/img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url()?>index.php/search/beranda/<?php echo $User[0]->NRP?>">Beranda</a></li>
              <li><a href="bukusaya.html">Buku Saya</a></li>
              <li><a href="profile.html">Profil</a></li>
			  <li><a href="pengaduan.html">Pengaduan</a></li>
			  <li><a href="aboutus.html">Tentang Kami</a></li>
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
					<a href="profile.html" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $User[0]->NamaUser ?> </a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="editprofile.html"><i class="icon-pencil"></i> Edit profile </a></li>
            <li><a href="gantipass_user.html"><i class="icon-pencil"></i> Ganti Kata Sandi </a></li>
						<li><a href="signin.html"><i class="icon-off"></i> Keluar </a></li>
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
			<h1> <img src="<?php echo base_url()?>/img/bookdes.png" class="img-rounded"> Detail Buku </h1>
		</div>
		
		<div class="hero-unit">
      <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url();?>image/<?php echo $Detail[0]->Gambar_Buku?>.jpg" class="img-circle">
      </div>
      <div class="col-md-8">
        <table class="table">        
        <tr>
          <td>
            Judul Buku
          </td>
          <td>
            <?php echo $Detail[0]->Nama_Buku;?>
          </td>
        </tr>
        <tr>
          <td>
            Penulis
          </td>
          <td>
			<?php echo $Detail[0]->Penulis;?>
          </td>
        </tr>
        <tr>
          <td>
            Penerbit
          </td>
          <td>
            <?php echo $Detail[0]->Penerbit;?>
          </td>
        </tr>
        <tr>
          <td>
            Tahun Terbit
          </td>
          <td>
            <?php echo $Detail[0]->Tahun;?>
          </td>
        </tr>
        <tr>
          <td>
            Deskripsi Singkat
          </td>
          <td>
            <?php echo $Detail[0]->Deskripsi;?>
          </td>
        </tr>
        <tr>
          <td>
            Kategori
          </td>
          <td>
            <?php if($Detail[0]->Kategori=="kom")
					echo "Komputer";
			?>
          </td>
        </tr>
		</table>
      </div>
    </div>
	  <table class="table">        
      <thead>
					<tr>
					<th> No. </th>
					<th> Nama Pemilik</th>
					<th></th>
					</tr>
		</thead>
		<tbody>
		<?php $no=0;
		foreach($Detail as $row)
		{
		  if($row->NRP != $User[0]->NRP){
		  $no=$no+1;
		  echo "<tr> <td>";
		  echo $no;
		  echo "</td> <td>";
		  foreach($dbUser as $nama)
			  {
				if($nama->NRP == $row->NRP)
				  echo $nama->NamaUser;
			  }
		  echo "</td> <td> <a class='btn btn-mini btn-primary pull-right' href='";
		  echo base_url();
		  echo "index.php/search/reservasi/";
		  echo $User[0]->NRP;
		  echo "/";
		  echo $Detail[0]->ID_Buku;
		  echo "'> </i>Reservasi</a> </td> </tr>";
		  } 
		}
		if($no==0)
		  echo"<tr><td>Tidak ada pemilik yang ditemukan</td></tr>";
		?>
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
    <script src="<?php echo base_url()?>/js/jquery.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>/js/bootstrap-typeahead.js"></script>

  </body>
</html>
