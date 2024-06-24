<!DOCTYPE document>
<html>
<body>

<title>
	Detroit Diner
</title>

<h1>
	Detroit Diner
</h1>


<?php
	// Breakfast: 	5:40 - 11:50 AM
	// Lunch: 		11:31 AM - 4:35 PM
	// Dinner: 		4:36 - 5:39
	
	
	// detroit is in EST time
	date_default_timezone_set("US/Eastern");

	$hr = date("G");		//variable hr is hours in 0-24
	$min = date("i");		//variable min gives us minutes
	$day = date("l");		//variable day gives us day of week
	
	//$tim = 1150
	$tim = date("Gi");		//variable tim gives us time so 3:32 PM becomes 1532
	
    echo "The day is " . $day . "\n<br>";
	echo "It is now " . $hr . ":" . $min . "\n<br>";
	echo "Today is " . date("M d<br>");
	
	
	// breakfast between 5:40 - 11:30
	if( (isBreakfast($tim)) ){		//we can use a function to check true or false
		doBreakfast();				// if breakfast, do breakfast function
	}
	// brunch between 10:30 - 1:45 PM and only sunday
	elseif( ($tim >= 1030) && ($tim <= 1345) && ($day = "Sunday") ) {
		doBrunch();
	}
	//lunch between 11:31 - 4:35
	elseif ( ($tim >= 1131)  && ($tim <= 1635) ){	//less code this way
		doLunch();
	}
	// dinner between 4:36 - 5:39
	else{
		doDinner();
	}
	
	function isBreakfast($tim){					//check if its breakfast time
		if( ($tim >= 0540) & ($tim <= 1130) ){	//we can also make strtotime variables
			return true;
		}
		else {
			return false;
		}
	}
	
	function doBreakfast() {
		echo("<br> <br> It is Breakfast time\n");
		echo "<h2> Breakfast </h2>\n";				//make header Breakfast
		
		//open myfile
		$myfile = fopen("breakfast.txt", "r") or die("Unable to open file!");
		//$brek will read the whole file
		$brek = fread($myfile, filesize("breakfast.txt") );
		fclose($myfile);
	
		//echo "<br> $brek </br>";
	
		//converts brek into an array menu
		$menu = explode("\n" , $brek);		//$menu is array
	
	
		//print all as a list
		echo "<ul>\n";
			foreach( $menu as $food ) {
				echo "<li> $food </li>\n"; 	//prints each item from array as list
			}
		echo "</ul>\n";
		
		} // end function breakfast
		
	function doLunch() {
		echo("<br> <br> It is Lunch time\n");
		echo "<h2> Lunch </h2>\n";
		
		//open myfile
		$myfile = fopen("lunch.txt", "r") or die("Unable to open file!");
		//$brek will read the whole file
		$brek = fread($myfile, filesize("lunch.txt") );
		fclose($myfile);
	
		//echo "<br> $brek </br>";
	
		//converts brek into an array menu
		$menu = explode("\n" , $brek);		//$menu is array
	
	
		//print all as a list
		echo "<ul>\n";
			foreach( $menu as $food ) {
				echo "<li> $food </li>\n"; 	//prints each item from array as list
			}
		echo "</ul>\n";
		
		} // end function lunch
		
		
	function doDinner() {
		echo("<br> <br> It is Dinner time\n");
		echo("\nIt is Dinner time\n");
		echo "<h2> Dinner </h2>\n";
		
		//open myfile
		$myfile = fopen("dinner.txt", "r") or die("Unable to open file!");
		//$brek will read the whole file
		$brek = fread($myfile, filesize("dinner.txt") );
		fclose($myfile);
	
		//echo "<br> $brek </br>";
	
		//converts brek into an array menu
		$menu = explode("\n" , $brek);		//$menu is array
	
	
		//print all as a list
		echo "<ul>\n";
			foreach( $menu as $food ) {
				echo "<li> $food </li>\n"; 	//prints each item from array as list
			}
		echo "</ul>\n";
		
		} // end function dinner
		
		
	function doBrunch() {
		echo("<br> <br> It is Brunch time\n");
		echo "<h2> Brunch </h2>\n";
		
		//open myfile
		$myfile = fopen("brunch.txt", "r") or die("Unable to open file!");
		//$brek will read the whole file
		$brek = fread($myfile, filesize("brunch.txt") );
		fclose($myfile);
	
		//echo "<br> $brek </br>";
	
		//converts brek into an array menu
		$menu = explode("\n" , $brek);		//$menu is array
	
	
		//print all as a list
		echo "<ul>\n";
			foreach( $menu as $food ) {
				echo "<li> $food </li>\n"; 	//prints each item from array as list
			}
		echo "</ul>\n";
		
		} // end function brunch
		
		
	

?>

</body>
</html>