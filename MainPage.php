<html>
<head>
<title>War Dragons Breeding Guide</title>
<link rel="stylesheet" type="text/css" href="DragonStyle.css">
</head>
<body>
<center>
<h2 id="Welcome">Welcome to Dragon Breeding!</h2>

<?php
	$dragonz=fopen("Dragons.txt", "r");
	$tempUser=fgets($dragonz);
	$dragons=explode(",", $tempUser);
	
	$counterz=0;
	foreach($dragons as $dragon){
		$dragons[$counterz]=trim($dragon);
		$counterz++;
	}
	fclose($dragonz);
	//Dragon #1
	print "<form action=\"Dragon Breeding.php\" method=\"post\">\n";
  	print "<input list=\"browsers\"	 name=\"choice1\">\n";
  	print "<datalist id=\"browsers\">\n";
  	
  	foreach($dragons as $dragon){
  		print "<option value=\"$dragon\">\n";
  	}
  	print "</datalist>\n";
  	//Dragon #2
  	print "<input list=\"browsers\"	 name=\"choice2\">\n";
  	print "<datalist id=\"browsers\">\n";
  	
  	foreach($dragons as $dragon){
  		print "<option value=\"$dragon\">\n";
  	}
  	print "</datalist>\n";
  	//End Form
  	print "<br>";
  	print "<input type=\"submit\" value=\"SUBMIT\"/>\n";
  	print "</form>\n";
?>

<?php
	$choic1 = filter_input(INPUT_POST, "choice1");
	$choic2 = filter_input(INPUT_POST, "choice2");
	print "<table border=1><tr><td>$choic1</td><td>$choic2</td></tr></table>";
?>

</body>
</html>
