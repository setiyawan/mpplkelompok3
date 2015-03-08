<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	  
	  .container{
		max-width: 1000px;
	  }
	  
	  img {
		width: 100px;
		height: 100px;
	  }
	  
	  .input-small{
		width: 222px;
	  }
    </style>
    <link href="<?php echo base_url();?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url();?>/ico/read.png">
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
          <a href="beranda.html" class="brand"><img style="max-width:20px; max-height:20px;" src="<?php echo base_url();?>/img/read.png" class="img-rounded"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url()?>index.php/search/beranda/<?php echo $User[0]->NRP?>">Beranda</a></li>
              <li><a href="bukusaya.html">Buku Saya</a></li>
              <li><a href="profile.html">Profil</a></li>
			  <li><a href="<?php echo base_url()?>index.php/pengaduan/index/<?php echo $User[0]->NRP?>">Pengaduan</a></li>
			  <li><a href="<?php echo base_url()?>index.php/about/index/<?php echo $User[0]->NRP?>">Tentang Kami</a></li>
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
					<a href="profile.html" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $User[0]->NamaUser?></a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="editprofile.html"><i class="icon-pencil"></i> Ubah Profil </a></li>
						<li><a href="editprofile.html"><i class="icon-pencil"></i> Ganti Kata Sandi </a></li>
						<li><a href="<?php echo base_url() ?>index.php/login/index"><i class="icon-off"></i> Keluar </a></li>
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
			<h1> <img src="<?php echo base_url();?>/img/pc.png" class="img-rounded"> Komputer </h1>
		</div>
		
		<h5 class="text text-succes"> Cari buku berdasarkan: </h5>
		<form class="form-inline text-right" action="<?php echo base_url("index.php/search/cari"); echo "/";echo $User[0]->NRP?>" method="POST">
			<input id="judul" name="judul" type="text" class="input-small" placeholder="Judul">
			<input id="tahun" name="tahun" type="text" class="input-small" placeholder="Tahun">				
			<input type="text" class="input-small" placeholder="Penerbit">
			<input id="pengarang" name="pengarang" type="text" class="input-small" placeholder="Pengarang">
			<button type="submit" class="btn"><i class="icon-search"></i></button>
		</form>
			
		<div class="hero-unit">
			<table class="table table-condensed table-hover table-striped">
				<thead>
					<tr>
					<th> No. </th>
					<th> Judul Buku </th>
					<th> Penulis </th>
					</tr>
				</thead>
				<tbody>
				<?php $no=0;
				foreach ($Buku as $row) {
          				$no=$no+1;
						echo "<tr> <td> $no";
						echo "</td>	<td> $row->Nama_Buku"; 
						echo "</td>	<td> $row->Penulis" ;
						echo "</td> <td> <a class='btn btn-mini btn-primary pull-right' href='";
						echo base_url();
						echo "index.php/search/profilbuku/";
						echo $User[0]->NRP;
						echo "/";
						echo $row->ID_Buku;
						echo "'> </i>Detail</a> </td> </tr>";
          			}
				if($no==0)
					echo "<tr> <td>Tidak ada buku yang ditemukan </td></tr>"
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
    <script src="<?php echo base_url();?>/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-typeahead.js"></script>

  </body>
</html>
