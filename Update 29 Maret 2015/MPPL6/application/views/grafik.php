 <?php    
  include("C:/wamp/www/MPPL/pChart2.1.4/class/pData.class.php"); 
 include("C:/wamp/www/MPPL/pChart2.1.4/class/pDraw.class.php"); 
 include("C:/wamp/www/MPPL/pChart2.1.4/class/pImage.class.php"); 
 /* CAT:Line chart */ 
    /*$kom = 0; $ind = 0; $sci = 0; $sip = 0; $kel = 0;$kom = 0;$sen = 0;$olr = 0;$sej = 0;$bis = 0;$bio = 0;$hib = 0;$lai = 0;
    foreach ($Mahasiswa as $row){
      if($row->Kategori=="kom")
          $kom++;
      else if($row->Kategori=="ind")
          $ind++;
      else if($row->Kategori=="sci")
          $sci++;
      else if($row->Kategori=="sip")
          $sip++;
      else if($row->Kategori=="kel")
          $kel++;
      else if($row->Kategori=="sen")
          $sen++;
      else if($row->Kategori=="olr")
          $olr++;
      else if($row->Kategori=="sej")
          $sej++;
      else if($row->Kategori=="bis")
          $bis++;
      else if($row->Kategori=="bio")
          $bio++;
      else if($row->Kategori=="hib")
          $hib++;
      else if($row->Kategori=="lai")
          $lai++;
    }*/
 /* pChart library inclusions */ 


 /* Create and populate the pData object $kom,$ind,$sci,$sip,$kel,$kom,$sen,$olr,$sej,$bis,$bio,$hib,$lai  ,"Sipil","Kelautan","Seni","Olahraga","Sejarah","Bisnis","Biografi","Hiburan","Lain - Lain"*/ 
 $MyData = new pData();   
 $MyData->addPoints(array(100,23,13,10,1),"Bulan ini"); 
 $MyData->addPoints(array(-100,-23,-13,-10,-1),"Bulan lalu");  
 $MyData->setSerieWeight("Bulan ini",2); 
 $MyData->setSerieTicks("Bulan lalu",4); 
 $MyData->setAxisName(0,"Jumlah Buku"); 
 $MyData->addPoints(array("A linear Algebra","Cooking Master","Halo Polisi","Margono diluk","Opo iki gak eruh"),"Labels"); 
 $MyData->setSerieDescription("Labels","Months"); 
 $MyData->setAbscissa("Labels"); 
 //echo var_dump($MyData->Data['Series']);
 /* Create the pChart object */ 
 $myPicture = new pImage(700,230,$MyData); 

 /* Turn of Antialiasing */ 
 $myPicture->Antialias = FALSE; 

 /* Draw the background */ 
 $Settings = array("R"=>170, "G"=>183, "B"=>87, "Dash"=>1, "DashR"=>190, "DashG"=>203, "DashB"=>107); 
 $myPicture->drawFilledRectangle(0,0,700,230,$Settings); 

 /* Overlay with a gradient */ 
 $Settings = array("StartR"=>219, "StartG"=>231, "StartB"=>139, "EndR"=>1, "EndG"=>138, "EndB"=>68, "Alpha"=>50); 
 $myPicture->drawGradientArea(0,0,700,230,DIRECTION_VERTICAL,$Settings); 
 $myPicture->drawGradientArea(0,0,700,20,DIRECTION_VERTICAL,array("StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>80)); 

 /* Add a border to the picture */ 
 $myPicture->drawRectangle(0,0,699,229,array("R"=>0,"G"=>0,"B"=>0)); 
  
 /* Write the chart title */  
 $myPicture->setFontProperties(array("FontName"=>"C:/wamp/www/MPPL/pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>8,"R"=>255,"G"=>255,"B"=>255)); 
 $myPicture->drawText(10,16,"Grafik jumlah buku per Kategori",array("FontSize"=>14,"Align"=>TEXT_ALIGN_BOTTOMLEFT)); 

 /* Set the default font */ 
 $myPicture->setFontProperties(array("FontName"=>"C:/wamp/www/MPPL/pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>6,"R"=>0,"G"=>0,"B"=>0)); 

 /* Define the chart area */ 
 $myPicture->setGraphArea(60,40,650,200); 

 /* Draw the scale */ 
 $scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE); 
 $myPicture->drawScale($scaleSettings); 

 /* Turn on Antialiasing */ 
 $myPicture->Antialias = TRUE; 

 /* Enable shadow computing */ 
 $myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10)); 

 /* Draw the line chart */ 
 $myPicture->drawLineChart(); 
 $myPicture->drawPlotChart(array("DisplayValues"=>TRUE,"PlotBorder"=>TRUE,"BorderSize"=>2,"Surrounding"=>-60,"BorderAlpha"=>80)); 

 /* Write the chart legend */ 
 $myPicture->drawLegend(590,9,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL,"FontR"=>255,"FontG"=>255,"FontB"=>255)); 

 /* Render the picture (choose the best way) */
 //$myPicture->autoOutput("C:/wamp/www/MPPL/pChart2.1.4/pictures/example.drawLineChart.plots.png"); 
 echo var_dump($myPicture->DataSet->Data);
?>