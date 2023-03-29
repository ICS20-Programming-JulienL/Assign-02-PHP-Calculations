<?php
	// get the length, width, and height from user input
	$length = $_POST["prismLength"];
	$width = $_POST["prismWidth"];
  $height = $_POST["prismHeight"];

	// calculate the volume
	$volume= $length*$width*$height;
  $roundedVolume= round($volume, 2);
  //calculate surface area
  $widthLength = 2*$width*$length;
  $heightLength = 2*$height*$length;
  $heightWidth = 2*$height*$width;
  $surfaceArea = $widthLength+$heightLength+$heightWidth;
  $roundedSurfaceArea = round($surfaceArea, 2);
?>
<center>
  <h3>Results:</h3>
The volume of your rectangular prism is <?php echo "$roundedVolume"."cm<sup>3</sup>";?>
  <br>
  The surface area of your rectangular prism is <?php echo " $roundedSurfaceArea"."cm<sup>2</sup>";?>
</center>