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
	<?php
		if(isset($Flag) && $Flag==1)
			{
				$nrp="guest";
				$nama="guest";
			}
		else
			{
				$nrp=$User[0]->NRP;
				$nama=$User[0]->NamaUser;
			}
		$url=base_url();
	?>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo base_url() ?>index.php/profil/beranda/<?php echo $nrp;?>" class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url()?>/img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php
            if(isset($Flag) && $Flag==1)
				{
					echo "<li class='active'><a href='";
					echo base_url();
					echo "index.php/login/guest'>Beranda</a></li>
							<li><a href='";
					echo base_url();
					echo "index.php/sistem/pengaduan/guest'>Pengaduan</a></li>";
					echo "<li><a href='";
					echo base_url();
					echo "index.php/buku/statistik/guest'>Statistik</a></li>";
					echo "<li><a href='";
					echo base_url();
					echo "index.php/sistem/aboutus/guest'>Tentang Kami</a></li>";
				}
			else
				{
					echo "<li><a href='";
					echo base_url();
					echo "index.php/profil/beranda/$nrp'>Beranda</a></li>";
					echo "<li><a href='$url";
					echo "index.php/buku/daftarbuku/$nrp'>Buku Saya</a></li>
						  <li><a href='$url";
					echo "index.php/profil/index/$nrp'>Profil</a></li>
						  <li><a href='$url";
					echo "index.php/buku/statistik/$nrp'>Statistik</a></li>
						  <li><a href='$url";
					echo "index.php/sistem/pengaduan/$nrp'>Pengaduan</a></li>
						  <li><a href='$url";
					echo "index.php/sistem/aboutus/$nrp'>Tentang Kami</a></li>";
				}
			?> 
            </ul>
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
				<li>
					<div class="btn-group">
          	<?php
				if(isset($Flag) && $Flag==1)
					{
						echo "<li>
							<div class='btn-group'>
							<a href='$url";
						echo "index.php/login' class='btn btn-primary'><i class='icon-user icon-white'></i>Login</a>
							</div>
							</li>";
					}
				else
					{
						echo "<a href='$url";
						echo "index.php/profil/index/$nrp' class='btn btn-primary'><i class='icon-user icon-white'></i>$nama</a>
						  <a class='btn btn-primary dropdown-toggle' data-toggle='dropdown' href='#'><span class='caret'></span></a>
						  <ul class='dropdown-menu'>";								
						echo "<li><a href='$url";
						echo "index.php/profil/editprofile/$nrp'><i class='icon-pencil'></i> Ubah Profil </a></li>
						<li><a href='$url";
						echo "index.php/login/ganti_pass/$nrp'><i class='icon-cog'></i> Ganti Kata Sandi </a></li>
						<li><a href='$url";
						echo "index.php/login' class='btn'><i class='icon-off'></i> Logout </a></li>";
					}
				?>
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
        <img src="<?php echo base_url();?>image/buku/<?php echo $Detail[0]->Gambar_Buku?>" class="img-circle">
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
            <?php 
			if($Detail[0]->Kategori=="kom")
					echo "Komputer";
			else if($Detail[0]->Kategori=="ind")
					echo "Industri";
			else if($Detail[0]->Kategori=="sci")
					echo "Science";
			else if($Detail[0]->Kategori=="sip")
					echo "Sipil";
			else if($Detail[0]->Kategori=="kel")
					echo "Kelautan";
			else if($Detail[0]->Kategori=="sen")
					echo "Seni";
			else if($Detail[0]->Kategori=="olr")
					echo "Olahraga";
			else if($Detail[0]->Kategori=="sej")
					echo "Sejarah";
			else if($Detail[0]->Kategori=="bis")
					echo "Bisnis";
			else if($Detail[0]->Kategori=="bio")
					echo "Biografi";
			else if($Detail[0]->Kategori=="hib")
					echo "Hiburan";
			else if($Detail[0]->Kategori=="lai")
					echo "Lain-lain";
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
		  if($row->NRP != $nrp){
		  $no=$no+1;
		  echo "<tr> <td>";
		  echo $no;
		  echo "</td> <td>";
		  foreach($dbUser as $nama)
			  {
				if($nama->NRP == $row->NRP)
				  {
					echo "<a href='";
					echo base_url();
					echo "index.php/profil/view/";
					echo $nrp;
					echo "/";
					echo $nama->NRP;
					echo "'>";
					echo $nama->NamaUser;
					echo "</a>";
				  }
			  }
		  if(isset($Flag) && $Flag==2)
			  {
				  echo "</td> <td> <a class='btn btn-mini btn-primary pull-right' href='";
				  echo base_url();
				  echo "index.php/buku/hapusBukuAdmin/";
				  echo $nrp;
				  echo "/";
				  echo $Detail[0]->ID_Buku;
				  echo "'> </i>Hapus</a> </td> </tr>";
			  }
		  else if($nrp!='guest')
			  {
				  echo "</td> <td> <a class='btn btn-mini btn-primary pull-right' href='";
				  echo base_url();
				  echo "index.php/search/reservasi/";
				  echo $nrp;
				  echo "/";
				  echo $Detail[0]->ID_Buku;
				  echo "'> </i>Reservasi</a> </td> </tr>";
			  }
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
