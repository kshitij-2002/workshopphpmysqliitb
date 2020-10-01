<html>
<h> Enter the first number </h>

<form action = 'q3.php' method = 'GET'>
	<input type = 'number' name = 'num1'><br><br> 
<h> Enter the first number </h>

	<br><input type = 'number' name = 'num2'><br><br> 
	<input type = 'submit' value = 'Enter'>
</form>
</html>
<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "Addition = ".($num1 + $num2)."<br>";
echo "Subtraction = ".($num1 - $num2)."<br>";
echo "Multiplication = ".($num1 * $num2)."<br>";
echo "Division = ".($num1 / $num2)."<br>";

?>