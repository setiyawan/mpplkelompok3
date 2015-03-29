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
        
    </style>
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
    <?php 
      $data['ID_Buku'] = "";
      $data['NRP'] = "";
      $data['Nama_Buku'] = "";
      $data['Deskripsi'] = "";
      $data['Kategori'] = "";
      $data['Penulis'] = "";
      $data['Status'] = "";
      $data['JReservasi'] = "";
      $num = 1;
    ?>
    <?php 
      $data['NRP'] = $Other[0]->NRP;
      $data['NamaUser'] = $Other[0]->NamaUser;
      foreach ($Mahasiswa as $row) {
                  $data['ID_Buku'] = $row->ID_Buku;
                  $data['Nama_Buku'] = $row->Nama_Buku;
                  $data['Deskripsi'] = $row->Deskripsi;
                  $data['Kategori'] = $row->Kategori;
                  $data['Penulis'] = $row->Penulis;
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
              <li><a href="<?php echo base_url()?>index.php/buku/statistik/<?php echo $data['NRP']?>">Statistik</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/pengaduan/<?php echo $data['NRP']?>">Pengaduan</a></li>
              <li><a href="<?php echo base_url()?>index.php/sistem/aboutus/<?php echo $data['NRP']?>">Tentang Kami</a></li>
            </ul>
      <div class="nav-collapse collapse">
      <ul class="nav pull-right">
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
      <h1> <img src="<?php echo base_url(); ?>img/mybook.png" class="img-rounded"> Daftar Buku Saya </h1>
    </div>
    
    <p class="text-right"><a class="btn btn-medium btn-primary" href="<?php echo base_url(); ?>index.php/buku/tambah/<?php echo $data['NRP']; ?>"><i class="icon-plus"></i>Tambah Buku</a></p>
    
    <div class="hero-unit">
      <table class="table table-condensed table-hover">
        <thead> 
          <tr>
          <th> No. </th>
          <th> Judul Buku </th>
          <th> Penulis </th>
          <th> Kategori </th>
          <th> Status </th>
          <th> Jumlah </th>
          <th> Opsi </th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($Mahasiswa as $row) {
                echo "<tr>";
                echo "<td>";
                echo $num;
                echo "</td>";
                echo "<td>";
                echo $row->Nama_Buku;
                $id = $row->Nama_Buku;
                echo "</td>";
                echo "<td>";
                echo $row->Penulis;
                echo "</td>";
                echo "<td>";
               if($row->Kategori=="kom")
                  echo "Komputer";
              else if($row->Kategori=="ind")
                  echo "Industri";
              else if($row->Kategori=="sci")
                  echo "Science";
              else if($row->Kategori=="sip")
                  echo "Sipil";
              else if($row->Kategori=="kel")
                  echo "Kelautan";
              else if($row->Kategori=="sen")
                  echo "Seni";
              else if($row->Kategori=="olr")
                  echo "Olahraga";
              else if($row->Kategori=="sej")
                  echo "Sejarah";
              else if($row->Kategori=="bis")
                  echo "Bisnis";
              else if($row->Kategori=="bio")
                  echo "Biografi";
              else if($row->Kategori=="hib")
                  echo "Hiburan";
              else if($row->Kategori=="lai")
                  echo "Lain-lain";
                echo "</td>";
                echo "<td>";
                if ($row->Status == 1) echo "Dipinjamkan";
                else if ($row->Status == 2) echo "Dijual";
                else echo "Terpinjam";
                echo "</td>";
                echo "<td>";
                echo "<a href='".base_url()."index.php/buku/detailReservasi/".$row->NRP."/".$row->ID_Buku."'>";
				echo $row->JReservasi;
                echo "</a></td>";
                echo "<td> 
                        <a class='btn btn-mini btn-primary' href='".base_url()."index.php/buku/edit/".$row->NRP."/".$row->ID_Buku."'></i>Edit</a> 
                        <a class='btn btn-mini btn-primary' href='".base_url()."index.php/buku/detailbuku/".$row->NRP."/".$row->ID_Buku."'></i>Detail</a> 
                      </td>";
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