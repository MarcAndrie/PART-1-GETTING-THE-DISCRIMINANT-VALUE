<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quadratic Discriminant Result</title>
</head>
<body>

<h2>Quadratic Discriminant Result</h2>

<?php  
if (isset($_GET['submit'])) {
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];

	$discriminant = ($b * $b) - (4 * $a * $c);

	echo "<p>The discriminant of the quadratic equation is: $discriminant</p>";
}
else{
	echo "<p>No data submitted.</p>";
}

?>

</body>
</html>