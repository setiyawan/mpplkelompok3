<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registrasi &middot; ITS Punya Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .form-signin {
        max-width: 500px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: rgba(250,250,250,1);
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

    </style>
    <link href="<?php echo base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url() ?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo base_url() ?>ico/read.png">
  </head>

  <body>
  

    <div class="container">

        <form class="form-signin" action="<?php echo base_url()?>index.php/login/daftar" method="POST" enctype="multipart/form-data">
        <h3 class="form-signin-heading">Masukkan Data Diri Anda</h3>
		<br>
    <?php if($flag==0) echo('<div class="alert alert-danger" role="alert">'.$error.'</div>');?>
		<label> <h5> Nama </h5> </label>
        <input type="text" class="input-block-level" id="Nama" name="Nama">
		<label> <h5> NRP/NIP </h5> </label>
        <input type="text" class="input-block-level" id="NRP" name="NRP">
    <label> <h5> Jenis Kelamin </h5> </label>
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" name="jenis_kel" id="radio1" class="" value="L" checked="" />
            <input type="text" class="form-control" value="Laki-Laki" readonly="">
          </span>
          <br>
          <br>
          <span class="input-group-addon">
            <input type="radio" name="jenis_kel" id="radio2" class="" value="P" />
            <input type="text" class="form-control" value="Perempuan" readonly="">
          </span>
        </div><!-- /input-group -->
		<label> <h5> Pekerjaan </h5> </label>
        <input type="text" class="input-block-level" id="Pekerjaan" name="Pekerjaan">
		<label> <h5> Nomor HP </h5> </label>
        <input type="text" class="input-block-level" id="HP" name="HP">
		<label> <h5> Email </h5> </label>
        <input type="text" id="email_1" name="email_1"> @ 
		<select type="text" id="email_2" name="email_2">
			<option>if.its.ac.id</option>
			<option>math.its.ac.id</option>
			<option>chem.its.ac.id</option>
			<option>bio.its.ac.id</option>
			<option>me.its.ac.id</option>
			<option>despro.its.ac.id</option>
			
		</select>
		<p class="text-info">*Kami akan mengirimkan kode ke alamat email anda sebagai password awal.</p>
		<label> <h5> Alamat </h5> </label>
		<textarea name="Alamat" class="input-block-level" rows="3"></textarea>	
		<label> <h5> Foto Diri </h5> </label>
		<input type="file" class="input-block-level" name="fileToUpload" id="fileToUpload">
		<br><br><br>
		<p class="text-right"><a href="<?php echo base_url()?>index.php/login" class="btn btn-large btn-primary" type="submit" >Cancel</a>
		<input class="btn btn-large btn-primary" type="submit" value="Submit"></p>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url() ?>js/jquery.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-button.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-typeahead.js"></script>

  </body>
</html>
