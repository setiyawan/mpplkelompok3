<?php
  $image = @imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");

		  // set background to white and allocate drawing colours
		  $background = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
		  imagefill($image, 0, 0, $background);
		  $linecolor = imagecolorallocate($image, 0xCC, 0xCC, 0xCC);
		  $textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);

		  // draw random lines on canvas
		  for($i=0; $i < 6; $i++) {
			imagesetthickness($image, rand(1,3));
			imageline($image, 0, rand(0,30), 120, rand(0,30), $linecolor);
		  }

		  // add random digits to canvas
		  $digit = '';
		  for($x = 15; $x <= 95; $x += 20) {
			$digit .= ($num = rand(0, 9));
			imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
		  }

		  // record digits in session variable
			session_start();
			$_SESSION['digit']=$digit;
		  // display image and clean up
		  header('Content-Type: text/html');
		  imagepng($image);
		  imagedestroy($image);
?>