<?php


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


?>
