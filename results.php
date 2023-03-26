<?php
	// get the hourly rate and the work hours from textfield
	$length = $_POST["prismLength"];
	$width = $_POST["prismWidth"];
  $height = $_POST["prismHeight"];

	// calculate the other variables
  
	$volume= $length*$width*$height;
  $roundedVolume= round($volume, 2);
  $widthLength = 2*$width*$length;
  $heightLength = 2*$height*$length;
  $heightWidth = 2*$height*$width;
  $surfaceArea = $widthLength+$heightLength+$heightWidth;
  $roundedSurfaceArea = round($surfaceArea, 2);
?>
<h3>Results:</h3>
The volume of your rectangular prism is<?php echo "$roundedVolume" ?>cm<sup>3</sup>  
<br>
The surface area of your rectangular prism is <?php echo " $roundedSurfaceArea" ?>cm<sup>2</sup> 