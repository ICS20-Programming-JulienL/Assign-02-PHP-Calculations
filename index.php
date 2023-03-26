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
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume and Surface Area of a Rectangular Prism</title>
  </head>
  <!--Header and Text-->
  <body>
    <center>
    <?php echo "<h1> Volume and Surface Area of a Rectangular Prism </h1>" ?>
    <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
    <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
    <br>
    <br>
    <!--User Input-->
    <?php echo "<h3>Please enter the following:</h3>" ?>
    <form action="./results.php" method="post" target="result">
      <label for="prismLength">Hours Worked</label>
      <input type="number" id="prismLength" step=".001" placeholder="Enter hours worked" name="prismLength"><br><br>
      <label for="prismWidth">Hourly Rate</label>
      <input type="number" id="prismWidth" step=".01" placeholder="Enter your hourly rate" name="prismWidth"><br><br>
      <label for="prismHeight">Prism Height</label>
      <input type="number" id="prismHeight" step=".01" placeholder="Enter your hourly rate" name="prismHeight"><br><br>
      <input type="submit" value="Enter">
    </center>
			<br><br>	
    </form>
      <div id="result"></div>
    <center>
      <!--Final Result of User Input-->
      <iframe id="result" name="result">
        You earned "" + $netIncome
        The government will take "" + $taxes
      </iframe>
    </center>
  </body>
</html>