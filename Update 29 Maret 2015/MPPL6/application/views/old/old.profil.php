<!DOCTYPE html>
<html lang="en">
  <head>
  	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
	<script src="<?php echo base_url() ?>js/script.js"></script>
    <meta charset="utf-8">
    <title>ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	  
	  .container{
		max-width: 1000px;
	  }
	  
    </style>
    <link href="<?php echo base_url() ?>/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url() ?>/ico/read.png">
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
          <div>
            <ul class="nav">
              <li><a href="<?php echo base_url() ?>index.php/profil/beranda/<?php echo $Mahasiswa[0]->NRP?>">Beranda</a></li>
              <li><a href="#">Buku Saya</a></li>
              <li class="active"><a href="<?php echo base_url() ?>index.php/profil">Profile</a></li>
			        <li><a href="#">Pengaduan</a></li>
			        <li><a href="#">About Us</a></li>
            </ul>
			<div>
				<ul class="nav pull-right">
					<!--li>
						<form class="form-search nav">
							<div class=" navbar-search input-prepend">
							<button type="submit" class="btn"><i class="icon-search"></i></button>
							<input type="text" class="search-query span2" placeholder="Find User">
							</div>
						</form>
					</li-->
					<li>
						<div class="btn-group">
						<a href="<?php echo base_url()?>index.php/profil/index/<?php echo $Mahasiswa[0]->NRP?>" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $Mahasiswa[0]->NamaUser?></a>
						<a href="<?php echo base_url()?>index.php/login" class="btn"><i class="icon-off"></i> Logout </a>  				
						</div>
					</li>

				</ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
		<div class="page-header">
			<h1> <img src="<?php echo base_url() ?>/img/myprofil.png" class="img-rounded"> Profil Saya </h1>
		</div>
		
		<div class="hero-unit">
			<div class="container">
		    	<div class="row">
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo base_url()?>image/man.jpg" class="img-circle" width="100px"> </div>
          			<div class="col-md-9 col-lg-9">
          			<?php foreach ($Mahasiswa as $row) {
          				$data['Nama'] = $row->NamaUser;
          				$data['Pekerjaan'] = $row->Pekerjaan;
          				$data['Alamat'] = $row->Alamat;
          				$data['Email'] = $row->Email;
          				$data['Telp'] = $row->NoTelp;
          				$data['NRP'] = $row->NRP;
          				if($row->JenisKel == 'L')
          					$data['JK'] = 'Laki-laki';
          				else $data['JK'] = 'Perempuan';

          			}?>
          			<table class="table table-user-information">
            			<tbody>
              				<tr>
		                        <td>Nama</td>
		                        <td><?php echo $data['Nama']?></td>
		                    </tr>
		                    <tr>
		                        <td>NRP / NIP</td>
		                        <td><?php echo $data['NRP']?></td>
		                    </tr>
		                    <tr>
		                        <td>Pekerjaan</td>
		                        <td><?php echo $data['Pekerjaan']?></td>
              				</tr>
           
                     		<tr>
		                        <td>Jenis Kelamin</td>
		                        <td><?php echo $data['JK']?></td>
              				</tr>

                			<tr>
		                        <td>Alamat rumah</td>
		                        <td><?php echo $data['Alamat']?></td>
		                    </tr>

              				<tr>
                				<td>Email</td>
                				<td><a href="<?php echo $data['Email']?>"><?php echo $data['Email']?></a></td>
              				</tr>

              				<tr>
                				<td>No. HP</td>
                				<td><?php echo $data['Telp']?></td>
              				</tr>
              				<tr>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
                				<td></td>
              				</tr>
                    	</tbody>
                    	
                  	</table>
                  		<a href="<?php echo base_url()?>index.php/profil/editprofile/<?php echo $data['NRP']?>" class="btn btn-primary">Ubah Profil</a>
						          <a href="<?php echo base_url()?>index.php/profil/beranda/<?php echo $Mahasiswa[0]->NRP?>" class="btn btn-primary">Kembali ke beranda</a>
                  	</div>
        		</div>
      		</div>
    	</div>
	
		
		<hr>
		
	  <footer>
        <p><h5>&copy; MPPL E03 2015</h5></p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap-typeahead.js"></script>

  </body>
</html>

	
	
