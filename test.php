<?php

	echo "This is a test page.";

	
	for( $i = 0; $i < 10 ; $i++){
		for( $j = 0; $j < $i ; $j++){
			print " * ";
		}
		print "<br />";
	}
?>

<html>
<head>
	<title>TEST PAGE</title>
	<meta charset = "utf-8" /> 
</head>
<body>

<form action = "test2.php">
<button>"PRESS ME!!"</button>
</form>
</body>
</html>