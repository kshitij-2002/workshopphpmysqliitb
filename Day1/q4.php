<html>
<h> Enter the first number </h>

<form action = 'q4.php' method = 'GET'>
	<input type = 'number' name = 'num1'><br><br> 
<h> Enter the first number </h>

	<br><input type = 'number' name = 'num2'><br><br> 
	<input type = 'submit' value = 'Enter'>
</form>
</html>
<?php

@$num1 = $_GET['num1'];
@$num2 = $_GET['num2'];

if($num1 && $num2)
{
if($num1 > $num2)
	echo $num1." is greater than $num2";
else if($num1 < $num2)
	echo $num2." is greater than $num1";
else if($num1 == $num2)
	echo $num1." is equal to $num2";
}
else
{
	echo "Enter both the numbers";
}
?>