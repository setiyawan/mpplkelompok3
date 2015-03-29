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
          <a class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url()?>img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url() ?>index.php/profil/beranda/<?php echo $User[0]->NRP?>">Beranda</a></li>
      			  <li class="active"><a href="<?php echo base_url() ?>index.php/profil/index/<?php echo $User[0]->NRP?>">User</a></li>
              <li><a href="<?php echo base_url()?>index.php/buku/statistik/<?php echo $User[0]->NRP?>">Statistik</a></li>
      			  <li><a href="<?php echo base_url()?>index.php/sistem/pengaduan/<?php echo $User[0]->NRP?>">Daftar Pengaduan</a></li>
      			  <li><a href="<?php echo base_url()?>index.php/sistem/aboutus/<?php echo $User[0]->NRP?>">Tentang Kami</a></li>
            </ul>
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
				<li>
					<div class="btn-group">
					<a href="<?php echo base_url() ?>index.php/profil/index/<?php echo $User[0]->NRP?>" class="btn btn-primary"><i class="icon-user icon-white"></i> &nbsp Admin</a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()?>index.php/login/ganti_pass/<?php echo $User[0]->NRP?>"><i class="icon-pencil"></i> Ganti Kata Sandi </a></li>
						<li><a href="<?php echo base_url()?>index.php/login"><i class="icon-off"></i> Keluar </a></li>
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
			<h1> <img src="<?php echo base_url()?>img/myprofil.png" class="img-rounded"> Daftar User </h1>
		</div>
		<div class="hero-unit">
      <table class="table table-condensed table-hover">
        <thead> 
          <tr>
          <th> No. </th>
          <th> Nama </th>
          <th> NRP </th>
          <th> Jenis Kelamin </th>
          <th> No HP </th>
          <th> Opsi </th>

          </tr>
        </thead>
        <tbody>
          <?php 
          $num=1;
         foreach ($Mahasiswa as $row) {
                echo "<tr>";
                echo "<td>";
                echo $num;
                echo "</td>";
                echo "<td>";
                echo $row->NamaUser;
                $id = $row->NRP;
                echo "</td>";
                echo "<td>";
                echo $row->NRP;
                echo "</td>";
                echo "<td>";
                if ($row->JenisKel == 'L') echo "Laki-laki";
                else echo "Perempuan";
                echo "</td>";
                echo "<td>";
                echo $row->NoTelp;
                echo "</td>";
                echo "<td> 
                        <a class='btn btn-mini btn-primary' href='";
                echo base_url();
                echo "index.php/profil/lihat_User/";
                echo $User[0]->NRP;
                echo "/";
                echo $row->NRP;
                echo "'></i>Lihat</a>

                        <a class='btn btn-mini btn-danger' href='";
                echo base_url();
                echo "index.php/profil/hapus/";
                echo $row->NRP;
                echo "/";
                echo 1;
                echo "'></i>Hapus</a> ";
				if($row->StatusUser==0)
					echo "<a class='btn btn-mini btn-danger' href='".base_url()."index.php/profil/Accept/".$User[0]->NRP."/".$row->NRP."'>Accept</a>";
				echo "</td>";
                echo "</tr>";
                $num = $num + 1;
                }?>

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
