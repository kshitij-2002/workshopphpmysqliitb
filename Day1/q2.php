<html>
<h1> Enter the alphabet </h1>

<form action = 'q2.php' method = 'GET'>
	<input type = 'alphabet' name = 'alpha'><br><br> 
	<input type = 'submit' value = 'Enter'>
</form>
</html>
<?php

@$alphabet = $_GET['alpha'];

if($alphabet)
{
switch($alphabet)
{
	case 'a':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'e':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'i':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'o':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'u':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'A':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'E':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'I':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'O':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	case 'U':
	{
		echo $alphabet." is an vowel.";
		break;
	}
	default :
	{
		echo $alphabet." is an consonant.";
	}
}
}
?>