<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registrasi &middot; ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 500px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
	  .form-signin select[type="text"],
      .form-signin input[type="password"] {
        font-size: 14px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
	  
	  .table th,
	  .table td {
		  border-top: none;
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
  

    <div class="container">

        <form class="form-signin" action="<?php echo base_url()?>index.php/buku/editbuku/<?php echo $User[0]->NRP?>/<?php echo $buku[0]->ID_Buku?>" method="POST" enctype="multipart/form-data">
			<h3 class="form-signin-heading">Masukkan Data Buku</h3>
			<br><?php if($flag==0) echo('<div class="alert alert-danger" role="alert">'.$error.'</div>');?>    
			<label> <h5> Judul Buku </h5> </label>
			<input id="Nama_Buku" name="Nama_Buku" type="text" class="input-block-level" value="<?php echo $buku[0]->Nama_Buku?>">
			<label> <h5> Penulis </h5> </label>
			<input id="Penulis" name="Penulis" type="text" class="input-block-level" value="<?php echo $buku[0]->Penulis?>">
			<label> <h5> Penerbit </h5> </label>
			<input id="Penerbit" name="Penerbit" type="text" class="input-block-level" value="<?php echo $buku[0]->Penerbit?>">
			<label> <h5> Tahun Terbit </h5> </label>
			<input id="Tahun" name="Tahun" type="text" class="input-block-level" value="<?php echo $buku[0]->Tahun?>">
			<label> <h5> Deskripsi Singkat </h5> </label>
			<textarea id="Deskripsi" name="Deskripsi" class="input-block-level" rows="5" ><?php echo $buku[0]->Deskripsi?></textarea>
			<label> <h5> Kategori </h5> </label>
			<table class="table">
				<thead>
					<tr>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="kom" <?php if($buku[0]->Kategori=="kom") echo "checked"?> > Komputer 
						</label>
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="ind" <?php if($buku[0]->Kategori=="ind") echo "checked"?> > Industri
						</label> 
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="sci"  <?php if($buku[0]->Kategori=="sci") echo "checked"?> > Science 
						</label> 
					</td>
					<td> <label class="radio">		
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="sip" <?php if($buku[0]->Kategori=="sip") echo "checked"?> > Sipil
						</label>
					</td>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="kel"  <?php if($buku[0]->Kategori=="kel") echo "checked"?> > Kelautan 
						</label>
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="sen" <?php if($buku[0]->Kategori=="sen") echo "checked"?> > Seni
						</label> 
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="olr"  <?php if($buku[0]->Kategori=="olr") echo "checked"?> > Olahraga 
						</label> 
					</td>
					<td> <label class="radio">		
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="sej" <?php if($buku[0]->Kategori=="sej") echo "checked"?> > Sejarah
						</label>
					</td>
					</tr>
					<tr>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="bis" <?php if($buku[0]->Kategori=="bis") echo "checked"?>  > Bisnis 
						</label>
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="bio" <?php if($buku[0]->Kategori=="bio") echo "checked"?> > Biografi
						</label> 
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="hib" <?php if($buku[0]->Kategori=="hib") echo "checked"?>  > Hiburan 
						</label> 
					</td>
					<td> <label class="radio">		
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="lai" <?php if($buku[0]->Kategori=="lai") echo "checked"?> > Lain-lain
						</label>
					</td>
					</tr>
				</tbody>
			</table>
			
			<label> <h5> Status </h5> </label>
			<table class="table">
				<thead>
					<tr>
						<td> <label class="radio ">
							<input type="radio" name="Status" id="optionsRadios1" value="1" <?php if($buku[0]->Status==1) echo "checked"?>> Dipinjamkan 
							</label>
						</td>
						<td> <label class="radio ">
							<input type="radio" name="Status" id="optionsRadios2" value="2" <?php if($buku[0]->Status==2) echo "checked"?>> Dijual
							</label> 
						</td>
						<td> <label class="radio ">
							<input type="radio" name="Status" id="optionsRadios3" value="3" <?php if($buku[0]->Status==3) echo "checked"?>> Terpinjam
							</label> 
						</td>
					</tr>
				</thead>
			</table>
			<label> <h5> Foto Buku </h5> </label>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<br><br><br>
			<p class="text-right"><a href="<?php echo base_url()?>index.php/buku/daftarbuku/<?php echo $User[0]->NRP?>" class="btn btn-large btn-primary" type="submit" >Cancel</a>
			<input class="btn btn-large btn-primary" type="submit" value="Submit"></p>
		</form>

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
