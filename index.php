<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Random Password Generator</title>
<link type="text/css" href="css/style.css" rel="stylesheet" />
<link rel="icon" type="image/png" href=""/>
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>
<body>

<div class="wrapper">

	<div class="logo">
		<h2>Random Password Generator</h2>
	</div>


	<div class="counter">
	

	<div class="title">
		<?php if ($_GET['s'] and $_GET['l']) { ?>
		Your generated password here:
		<?php } else { ?>
		Select Password length and then Symbol
		<?php } ?>
	</div>



	<div class="password">
<?php include('function.php'); 


$types = array(0 => 'ABC', 'aBc', 'abc', 'a3', 'a3c', '123', 'abc');


switch ($_GET['s'])
{

	case 'ABC':
		echo abc3($password);
		break;

	case 'aBc':
		echo abc2($password);
		break;

	case 'abc':
		echo abc1($password);
		break;

	case 'a3':
		echo abcmix($password);
		break;

	case 'a3c':
		echo a3c($password);
		break;

	case '123':
		echo a123($password);
		break;

	case 'abc':
		echo abc($password);
		break;

	default:
		echo '';
}
?>

	</div>

<?php	if (isset($_GET['l'])) 
	{ 
?>

	<div class="types">
		Symbols used:
	<p>

	<?php
		for ($i = 0; $i < 6; $i++)
		{

			if ($_GET['s'] == $types[$i])
			{ 
				echo '<a class="selected button" href="?s='.$types[$i].'&amp;l='.$_GET['l'].'">'.reMe($types[$i]).'</a>';
			}
			else
			{
				echo '<a class="button" href="?s='.$types[$i].'&amp;l='.$_GET['l'].'">'.reMe($types[$i]).'</a>';
			}
	

		}

	?>

	</p>
	</div>

	<?php
	} 

	else 
	{ 

		echo 'Symbols used: <h3>';


		for ($i = 0; $i < 6; $i++)
		{

			echo '<a href="?s='.$types[$i].'" class="button">'.reMe($types[$i]).'</a>';

		}


		echo '</h3>';

	} 

echo '<br />';

if (isset($_GET['s'])) 
{ 
		echo 'Password length:  <h3>';


		for ($i = 6; $i < 13; $i++) 
		{
	
			if ($_GET['l'] == $i) 
			{ 
				echo '<a href="?s='.$_GET['s'].'&amp;l='.$i.'" class="selected button">'.$i.'</a>';
			}
			else 
			{
				 echo '<a class="button" href="?s='.$_GET['s'].'&amp;l='.$i.'"> '.$i.' </a> ';
			}

		}


 } else { ?> 


	<div class="length">
		Password length:
	<p>

	<?php
		for ($i = 6; $i < 13; $i++) 
		{
			echo '<a class="button" href="?l='.$i.'"> '.$i.' </a>';  

		}
	?>

	</p>
	</div>
<?php } ?>
	</div>
</div>

</body>
</html>
