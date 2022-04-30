<?php
// This function displays a message when the user inputs a temperature
	// get user input from textfields
	$temp = $_POST['temp'];

		// if the temperature is below 15 degrees, display "It is cold outside!"
	if ($temp < 15) {
		echo "It is cold outside!";
	} 
	// otherwise, if the temperature is greater than or equal to 15 degrees, display "It is warm outside!"	
  else if ($temp >= 15) {
	  echo "It is warm outside!";
  }
?>