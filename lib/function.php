<?php

$types = array(0 => 'ABC', 'aBc', 'abc', 'a3', 'a3c', '123', 'abc');


function abc3($howlong) 
{ 
	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}


$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};


/*

*/


function abc2($howlong) 
{ 

	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}


$chars = "abcdefghijklmnoprstuwxyzq"; 
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
}; 



/*

*/


function abc1($howlong) 
{ 
	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}


$chars = "abcdefghijklmnoprstuwxyzq"; 

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
}; 


/*

*/


function abcmix($howlong) 
{ 
	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}


$chars = "abcdefghijklmnoprstuwxyzq"; 
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 
$chars .= "1234567890"; 
$chars .= "~`!@#$%^&*()_+-={}[]:\";'<>?,./\|";

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};


/*

*/



function a3c($howlong) 
{ 
	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}

$chars = "abcdefghijklmnoprstuwxyzq"; 
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 
$chars .= "1234567890"; 

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};



/*

*/



function a123($howlong) 
{ 
	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}

$chars .= "1234567890"; 

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};


/*

*/



function abc($howlong) 
{ 
	$howlong = $_GET['l'];

	if($howlong >= 1 and $howlong <= 20) 
	{
		$howlong = $_GET['l'];
	}
	else 
	{
		$howlong = 3;
	}


$chars = "abcdefghijklmnoprstuwxyzq"; 

$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};



/*

*/


function reMe($typePass) 
{

	if ($typePass == 'a3')
	{
		$typePass = 'a3#';
	}

return $typePass;
}


function passwords($s) {
	switch ($s)
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
}


?>
