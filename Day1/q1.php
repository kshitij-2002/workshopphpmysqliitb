<html>
<h1> Enter the number </h1>

<form action = 'q1.php' method = 'GET'>
	<input type = 'number' name = 'number'><br><br> 
	<input type = 'submit' value = 'Enter'>
</form>
</html>
<?php

	@$num = $_GET['number'];
	@$check = ($num % 2);
	if($num)
	{
		if($check == 1)
		echo "The number $num"." is odd";
	else
		echo "The number $num"." is even";
	}
?>