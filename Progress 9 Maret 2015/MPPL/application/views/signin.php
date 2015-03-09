<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; ITS Punya Buku</title>
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
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: rgba(250,250,250,0.5);
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
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="<?php echo base_url() ?>css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=""<?php echo base_url() ?>js/html5shiv.js"></script>
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

		<p class="text-center"> <img src="<?php echo base_url() ?>img/read.png" class="img-rounded"> </p>
		<h3><p class="form-signin-heading text-center text-info"> SI ITS Punya Buku </p></h3>
      <form class="form-signin" action="<?php echo base_url("index.php/login/signin")?>" method="POST">
      <?php if($flag==0) 
        echo ('<div class="alert alert-danger" role="alert">Maaf, Email atau Password Salah</div>');?>
		<h4 class="form-signin-heading text-left text-info">Silahkan Login</h4>
        
          <input id="email" name="email" type="text" class="input-block-level" placeholder="Email address">
          <input id="password" name="password" type="password" class="input-block-level" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
          <input class="btn btn-large btn-primary" type="submit" value="Login">	
        
		    <a href="<?php echo base_url()?>index.php/login/registerasi" class="btn btn-large btn-primary" type="submit">Registrasi</a>
        <a href="<?php echo base_url()?>index.php/login/guest" class="btn btn-large btn-primary" type="submit" >Guest</a>	
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
