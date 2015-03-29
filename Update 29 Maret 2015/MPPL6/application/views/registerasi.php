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
  <?php if($flag==0) echo('<div class="alert alert-danger" role="alert">'.$error.'</div>');
	?>
		<label> <h5> Nama </h5> </label>
        <input type="text" class="input-block-level" id="Nama" name="Nama" value="<?php if(isset($_POST['Nama'])) echo $_POST['Nama'];?>">
		<label> <h5> NRP/NIP </h5> </label>
        <input type="text" class="input-block-level" id="NRP" name="NRP" value="<?php if(isset($_POST['NRP'])) echo $_POST['NRP'];?>">
   	<label> <h5> Password </h5> </label>
        <input class="input-block-level" id="Pass1" name="Pass1" type="password">
   	<label> <h5> Ulangi Password </h5> </label>
        <input class="input-block-level" id="Pass2" name="Pass2" type="password">
    <label> <h5> Jenis Kelamin </h5> </label>
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" name="jenis_kel" id="radio1" class="" value="L" <?php if(isset($_POST['jenis_kel']) and $_POST['jenis_kel']=='L') echo 'checked';?>/>
            <input type="text" class="form-control" value="Laki-Laki" readonly="">
          </span>
          <br>
          <br>
          <span class="input-group-addon">
            <input type="radio" name="jenis_kel" id="radio2" class="" value="P" <?php if(isset($_POST['jenis_kel']) and $_POST['jenis_kel']=='P') echo 'checked';?>/>
            <input type="text" class="form-control" value="Perempuan" readonly="">
          </span>
        </div><!-- /input-group -->
		<label> <h5> Pekerjaan </h5> </label>
        <input type="text" class="input-block-level" id="Pekerjaan" name="Pekerjaan" value="<?php if(isset($_POST['Pekerjaan'])) echo $_POST['Pekerjaan'];?>">
		<label> <h5> Nomor HP </h5> </label>
        <input type="text" class="input-block-level" id="HP" name="HP" value="<?php if(isset($_POST['HP'])) echo $_POST['HP'];?>">
		<label> <h5> Email </h5> </label>
        <input type="text" id="email_1" name="email_1" value="<?php if(isset($_POST['email_1'])) echo $_POST['email_1'];?>"> @ 
		<select type="text" id="email_2" name="email_2">
			<option value="arch.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='arch.its.ac.id') echo 'selected';?> >arch.its.ac.id</option>
<option value="bio.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='bio.its.ac.id') echo 'selected';?>>bio.its.ac.id</option>
<option value="ce.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='ce.its.ac.id') echo 'selected';?>>ce.its.ac.id</option>
<option value="chem.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='chem.its.ac.id') echo 'selected';?>>chem.its.ac.id</option>
<option value="chem-eng.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='chem-eng.its.ac.id') echo 'selected';?>>chem-eng.its.ac.id</option>
<option value="cs.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='cs.its.ac.id') echo 'selected';?>>cs.its.ac.id</option>
<option value="ee.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='ee.its.ac.id') echo 'selected';?>>ee.its.ac.id</option>
<option value="elect-eng.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='elect-eng.its.ac.id') echo 'selected';?>>elect-eng.its.ac.id</option>
<option value="enviro.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='enviro.its.ac.id') echo 'selected';?>>enviro.its.ac.id</option>
<option value="ep.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='ep.its.ac.id') echo 'selected';?>>ep.its.ac.id</option>
<option value="gemastik.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='gemastik.its.ac.id') echo 'selected';?>>gemastik.its.ac.id</option>
<option value="geodesy.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='geodesy.its.ac.id') echo 'selected';?>>geodesy.its.ac.id</option>
<option value="geofisika.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='geofisika.its.ac.id') echo 'selected';?>>geofisika.its.ac.id</option>
<option value="grad.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='grad.its.ac.id') echo 'selected';?>>grad.its.ac.id</option>
<option value="ie.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='ie.its.ac.id') echo 'selected';?>>ie.its.ac.id</option>
<option value="if.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='if.its.ac.id') echo 'selected';?>>if.its.ac.id</option>
<option value="interior.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='interior.its.ac.id') echo 'selected';?>>interior.its.ac.id</option>
<option value="is.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='is.its.ac.id') echo 'selected';?>>is.its.ac.id</option>
<option value="mat-eng.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mat-eng.its.ac.id') echo 'selected';?>>mat-eng.its.ac.id</option>
<option value="matematika.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='matematika.its.ac.id') echo 'selected';?>>matematika.its.ac.id</option>
<option value="mb.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mb.its.ac.id') echo 'selected';?>>mb.its.ac.id</option>
<option value="me.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='me.its.ac.id') echo 'selected';?>>me.its.ac.id</option>
<option value="mku.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mku.its.ac.id') echo 'selected';?>>mku.its.ac.id</option>
<option value="mmt.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mmt.its.ac.id') echo 'selected';?>>mmt.its.ac.id</option>
<option value="na.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='na.its.ac.id') echo 'selected';?>>na.its.ac.id</option>
<option value="ne.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='ne.its.ac.id') echo 'selected';?>>ne.its.ac.id</option>
<option value="oe.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='oe.its.ac.id') echo 'selected';?>>oe.its.ac.id</option>
<option value="physics.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='physics.its.ac.id') echo 'selected';?>>physics.its.ac.id</option>
<option value="prodes.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='prodes.its.ac.id') echo 'selected';?>>prodes.its.ac.id</option>
<option value="seatrans.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='seatrans.its.ac.id') echo 'selected';?>>seatrans.its.ac.id</option>
<option value="spmb-reg3.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='spmb-reg3.its.ac.id') echo 'selected';?>>spmb-reg3.its.ac.id</option>
<option value="statistika.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='statistika.its.ac.id') echo 'selected';?>>statistika.its.ac.id</option>
<option value="te.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='te.its.ac.id') echo 'selected';?>>te.its.ac.id</option>
<option value="urplan.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='urplan.its.ac.id') echo 'selected';?>>urplan.its.ac.id</option>
<option value="mhs.bio.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.bio.its.ac.id') echo 'selected';?>>mhs.bio.its.ac.id</option>
<option value="mhs.me.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.bio.its.ac.id') echo 'selected';?>>mhs.me.its.ac.id</option>
<option value="mhs.arch.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.arch.its.ac.id') echo 'selected';?>>mhs.arch.its.ac.id</option>
<option value="mhs.ce.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.ce.its.ac.id') echo 'selected';?>>mhs.ce.its.ac.id</option>
<option value="mhs.chem.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.chem.its.ac.id') echo 'selected';?>>mhs.chem.its.ac.id</option>
<option value="mhs.chem-eng.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.chem-eng.its.ac.id') echo 'selected';?>>mhs.chem-eng.its.ac.id</option>
<option value="mhs.enviro.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.enviro.its.ac.id') echo 'selected';?>>mhs.enviro.its.ac.id</option>
<option value="mhs.ee.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.ee.its.ac.id') echo 'selected';?>>mhs.ee.its.ac.id</option>
<option value="mhs.ep.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.ep.its.ac.id') echo 'selected';?>>mhs.ep.its.ac.id</option>
<option value="mhs.geodesy.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.geodesy.its.ac.id') echo 'selected';?>>mhs.geodesy.its.ac.id</option>
<option value="mhs.geofisika.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.geofisika.its.ac.id') echo 'selected';?>>mhs.geofisika.its.ac.id</option>
<option value="mhs.grad.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.grad.its.ac.id') echo 'selected';?>>mhs.grad.its.ac.id</option>
<option value="mhs.ie.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.ie.its.ac.id') echo 'selected';?>>mhs.ie.its.ac.id</option>
<option value="mhs.if.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.if.its.ac.id') echo 'selected';?>>mhs.if.its.ac.id</option>
<option value="mhs.is.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.is.its.ac.id') echo 'selected';?>>mhs.is.its.ac.id</option>
<option value="interior.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='interior.its.ac.id') echo 'selected';?>>interior.its.ac.id</option>
<option value="mhs.mat-eng.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.mat-eng.its.ac.id') echo 'selected';?>>mhs.mat-eng.its.ac.id</option>
<option value="mhs.matematika.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.matematika.its.ac.id') echo 'selected';?>>mhs.matematika.its.ac.id</option>
<option value="mhs.mb.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.mb.its.ac.id') echo 'selected';?>>mhs.mb.its.ac.id</option>
<option value="mhs.mku.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.mku.its.ac.id') echo 'selected';?>>mhs.mku.its.ac.id</option>
<option value="mhs.mmt.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.mmt.its.ac.id') echo 'selected';?>>mhs.mmt.its.ac.id</option>
<option value="mhs.na.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.na.its.ac.id') echo 'selected';?>>mhs.na.its.ac.id</option>
<option value="mhs.ne.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.ne.its.ac.id') echo 'selected';?>>mhs.ne.its.ac.id</option>
<option value="mhs.oe.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.oe.its.ac.id') echo 'selected';?>>mhs.oe.its.ac.id</option>
<option value="mhs.physics.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.physics.its.ac.id') echo 'selected';?>>mhs.physics.its.ac.id</option>
<option value="mhs.prodes.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.prodes.its.ac.id') echo 'selected';?>>mhs.prodes.its.ac.id</option>
<option value="mhs.statistika.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.statistika.its.ac.id') echo 'selected';?>>mhs.statistika.its.ac.id</option>
<option value="mhs.urplan.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.urplan.its.ac.id') echo 'selected';?>>mhs.urplan.its.ac.id</option>
<option value="mhs.seatrans.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.seatrans.its.ac.id') echo 'selected';?>>mhs.seatrans.its.ac.id</option>
<option value="mhs.te.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.te.its.ac.id') echo 'selected';?>>mhs.te.its.ac.id</option>
<option value="mhs.interior.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='mhs.interior.its.ac.id') echo 'selected';?>>mhs.interior.its.ac.id</option>
<option value="alumni.its.ac.id" <?php if(isset($_POST['email_2']) and $_POST['email_2']=='alumni.its.ac.id') echo 'selected';?>>alumni.its.ac.id</option>
		</select>
		<label> <h5> Alamat </h5> </label>
		<textarea name="Alamat" id="Alamat" class="input-block-level" rows="3"><?php if(isset($_POST['Alamat'])) echo $_POST['Alamat'];?></textarea>	
		<label> <h5> Foto Diri </h5> </label>
		<input type="file" class="input-block-level" name="fileToUpload" id="fileToUpload">
		<br><br><br>
		<img src="<?php echo base_url() ?>index.php/login/captcha"/><br>
		Masukkan Angka pada gambar : <input type="text" id="kode" name="kode" />
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
