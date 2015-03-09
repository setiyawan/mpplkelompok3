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

        <form class="form-signin" action="<?php echo base_url()?>index.php/buku/insert/<?php echo $User[0]->NRP?>" method="POST">
			<h3 class="form-signin-heading">Masukkan Data Buku</h3>
			<br>
			<label> <h5> Judul Buku </h5> </label>
			<input id="Nama_Buku" name="Nama_Buku" type="text" class="input-block-level">
			<label> <h5> Penulis </h5> </label>
			<input id="Penulis" name="Penulis" type="text" class="input-block-level">
			<label> <h5> Penerbit </h5> </label>
			<input id="Penerbit" name="Penerbit" type="text" class="input-block-level">
			<label> <h5> Tahun Terbit </h5> </label>
			<input id="Tahun" name="Tahun" type="text" class="input-block-level">
			<label> <h5> Deskripsi Singkat </h5> </label>
			<textarea id="Deskripsi" name="Deskripsi" class="input-block-level" rows="5" ></textarea>
			<label> <h5> Kategori </h5> </label>
			<table class="table">
				<thead>
					<tr>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked> Komputer 
						</label>
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="2"> Industri
						</label> 
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="3" checked> Science 
						</label> 
					</td>
					<td> <label class="radio">		
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="4"> Sipil
						</label>
					</td>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="5" checked> Kelautan 
						</label>
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="6"> Seni
						</label> 
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="7" checked> Olahraga 
						</label> 
					</td>
					<td> <label class="radio">		
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="8"> Sejarah
						</label>
					</td>
					</tr>
					<tr>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="9" checked> Bisnis 
						</label>
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="10"> Biografi
						</label> 
					</td>
					<td> <label class="radio ">
						<input type="radio" name="optionsRadios" id="optionsRadios1" value="11" checked> Hiburan 
						</label> 
					</td>
					<td> <label class="radio">		
						<input type="radio" name="optionsRadios" id="optionsRadios2" value="12"> Lain-lain
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
							<input type="radio" name="Status" id="optionsRadios1" value="1" checked> Dipinjamkan 
							</label>
						</td>
						<td> <label class="radio ">
							<input type="radio" name="Status" id="optionsRadios2" value="2"> Dijual
							</label> 
						</td>
					</tr>
				</thead>
			</table>
			<label> <h5> Foto Buku </h5> </label>
			<input type="text" class="input-block-level">
			<button class="btn btn-primary">Browse</button>
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
