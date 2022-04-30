<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="Guess My Number">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Hot and Cold</title>
	</head>
	<body>
    <center>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Hot and Cold</h1>";
		?>
		<!-- form to get the sides of the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblTemp">Enter a temperature here (°C):</label>
      <input type="text" name="temp" placeholder="Temperature" step="1" min="any" max ="any"><br><br>
      <input type="submit" value="Enter Temperature">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    <!-- Image -->
    <?php
      echo "<br><img src='./images/temp.png' alt='temperature' width='50%'>";
    ?>
	</body>
</html>