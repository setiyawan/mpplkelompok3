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
    <?php $kom = 0; $ind = 0; $sci = 0; $sip = 0; $kel = 0;$kom = 0;$sen = 0;$olr = 0;$sej = 0;$bis = 0;$bio = 0;$hib = 0;$lai = 0;
    foreach ($Mahasiswa as $row){
      if($row->Kategori=="kom")
          $kom++;
      else if($row->Kategori=="ind")
          $ind++;
      else if($row->Kategori=="sci")
          $sci++;
      else if($row->Kategori=="sip")
          $sip++;
      else if($row->Kategori=="kel")
          $kel++;
      else if($row->Kategori=="sen")
          $sen++;
      else if($row->Kategori=="olr")
          $olr++;
      else if($row->Kategori=="sej")
          $sej++;
      else if($row->Kategori=="bis")
          $bis++;
      else if($row->Kategori=="bio")
          $bio++;
      else if($row->Kategori=="hib")
          $hib++;
      else if($row->Kategori=="lai")
          $lai++;
      }
    ?>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url()?>img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url()?>index.php/sistem/beranda/<?php echo $User[0]->NRP?>">Beranda</a></li>
              <li><a href="<?php echo base_url()?>index.php/profil/index/<?php echo $User[0]->NRP?>">User</a></li>
              <li class="active"><a href="<?php echo base_url()?>index.php/buku/statistik/<?php echo $User[0]->NRP?>">Statistik</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/pengaduan/<?php echo $User[0]->NRP?>">Daftar Pengaduan</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/aboutus/<?php echo $User[0]->NRP?>">Tentang Kami</a></li>
            </ul>
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
			<li>
					<div class="btn-group">
					<a href="<?php echo base_url()?>index.php/profil/index/<?php echo $User[0]->NRP?>" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $User[0]->NamaUser?></a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()?>index.php/profil/editprofile/<?php echo $User[0]->NRP?>"><i class="icon-pencil"></i> Ubah Profil </a></li>
            <li><a href="<?php echo base_url()?>index.php/login/ganti_pass/<?php echo $User[0]->NRP?>"><i class="icon-cog"></i> Ganti Kata Sandi </a></li>
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
			<h1> <img src="<?php echo base_url()?>img/statistik.png" class="img-rounded"> Statistik Buku </h1>
		</div>
		
		<div class="hero-unit">
      <h2>Berdasarkan kategori</h2>
      <br>
      <form method="POST" action="<?php echo base_url()?>pChart2.1.4/grafik.php">
        <input type="hidden" name="kom" value="<?php echo $kom?>">
        <input type="hidden" name="ind" value="<?php echo $ind?>">
        <input type="hidden" name="sip" value="<?php echo $sip?>">
        <input type="hidden" name="sci" value="<?php echo $sci?>">
        <input type="hidden" name="kel" value="<?php echo $kel?>">
        <input type="hidden" name="sen" value="<?php echo $sen?>">
        <input type="hidden" name="olr" value="<?php echo $olr?>">
        <input type="hidden" name="sej" value="<?php echo $sej?>">
        <input type="hidden" name="bis" value="<?php echo $bis?>">
        <input type="hidden" name="bio" value="<?php echo $bio?>">
        <input type="hidden" name="hib" value="<?php echo $hib?>">
        <input type="hidden" name="lai" value="<?php echo $lai?>">
        <input type="hidden" name="nama" value="<?php echo $User[0]->NRP?>">
        <input type="submit" value="Jumlah buku per Kategori">  
      </form>
      <br><br>
      <h2>5 Peringkat buku teratas </h2>
      <table class="table table-condensed table-hover">
        <thead>
          <tr>
            <th>Peringkat</th>
            <th>Nama Buku</th>
            <th>Jumlah Pereservasi</th>
          </tr>
          <?php
            $i=0;
            foreach ($urutan as $row) {
              if($i==5) break;
              ?>
              <tr>
                <td><?php echo $i+1?></td>
                <td><?php echo $urutan[$i]->Nama_Buku?></td>
                <td><?php echo $urutan[$i]->JReservasi?></td>
              </tr><?php
              $i++;
            }
          ?>
        </thead>
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
