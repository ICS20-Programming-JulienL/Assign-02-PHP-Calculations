<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume and Surface Area of a Rectangular Prism">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index_php/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index_php/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index_php/favicon-16x16.png">
    <link rel="manifest" href="./fav_index_php/site.webmanifest">
    <!--Link to MDL-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume and Surface Area of a Rectangular Prism</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Header and Text-->
    <center>
      <?php echo "<h1> Volume and Surface Area of a Rectangular Prism </h1>" ?>
      <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
      <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
      <br>
      <!--User Input-->
      <?php echo "<p>With this calculator, which was coded in PHP, you will be able to solve any rectangular prism. Whether you're trying to calculate the volume of a box or that shelf that you've been meaning to install, this calculator has got you covered! </p>" ?>
      <?php echo "<h3>Please enter the following:</h3>" ?>
      <form action="./results.php" method="post" target="result">
        <label for="prismLength">Length (cm):</label>
        <input type="number" id="prismLength" step=".001" placeholder="Enter the length" name="prismLength"><br><br>
        <label for="prismWidth">Width (cm):</label>
        <input type="number" id="prismWidth" step=".001" placeholder="Enter the width" name="prismWidth"><br><br>
        <label for="prismHeight">Height (cm):</label>
        <input type="number" id="prismHeight" step=".001" placeholder="Enter the height" name="prismHeight"><br><br>
        <input type="submit" value="Enter"><br><br>	
      </form>
      <iframe id="result" name="result">
        <?php echo "The surface area of your rectangular prism is "."$roundedVolume"."cm<sup>3</sup>.";?>
        <br>
        <?php echo "The surface area of your rectangular prism is "."$roundedSurfaceArea"."cm<sup>2</sup>.";?>
      </iframe>
      <br>
      <!--Image-->
      <img src="./images/volumeRectangularPrismPhp.png" alt="PHP Rectangular Prism" width = "500" height="350">
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </center>
  </body>
</html>