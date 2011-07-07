<?php
/*
--- Random Password Generator PHP ---
--- Written by modInfo ---
*/
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Random Password Generator</title>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta id="viewport" name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<link rel="stylesheet" href="iphone.css" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    	        
</head>
<body>
    <form id="form1" runat="server">
        
        <div id="intro">
<?php
function abc3($howlong) 
{ 
$howlong = $_GET['l'];
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};



function abc2($howlong) 
{ 
$howlong = $_GET['l'];
$chars = "abcdefghijklmnoprstuwxyzq"; 
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
}; 


function abc1($howlong) 
{ 
$howlong = $_GET['l'];
$chars = "abcdefghijklmnoprstuwxyzq"; 
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
}; 


function abcmix($howlong) 
{ 
$howlong = $_GET['l'];
$chars = "abcdefghijklmnoprstuwxyzq"; 
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 
$chars .= "1234567890"; 
$chars .= "~`!@#$%^&*()_+-={}[]:\";'<>?,./\|";
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};


function a3c($howlong) 
{ 
$howlong = $_GET['l'];
$chars = "abcdefghijklmnoprstuwxyzq"; 
$chars .= "ABCDEFGHIJKLMNOPRSTUWZYXQ"; 
$chars .= "1234567890"; 
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};


function a123($howlong) 
{ 
$howlong = $_GET['l'];
$chars .= "1234567890"; 
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};


function abc($howlong) 
{ 
$howlong = $_GET['l'];
$chars = "abcdefghijklmnoprstuwxyzq"; 
$pass = ""; 
$len = strlen($chars) - 1; 
for($i =0; $i < $howlong; $i++) 
  { 
   $random = rand(0, $len); 

       $output .=  $chars[$random]; 
   } 
return $output; 
};




echo '';

if ($_GET['s'] == 'ABC'){
echo 'Your generated password here: <h2>'.abc3($password).'</h2>';
}

elseif ($_GET['s'] == 'aBc'){
echo 'Your generated password here: <h2>'.abc2($password).'</h2>';
}

elseif ($_GET['s'] == 'abc'){
echo ' Your generated password here: <h2>'.abc1($password).'</h2>';
}

elseif ($_GET['s'] == 'a3'){
echo 'Your generated password here: <h2>'.abcmix($password).'</h2>';
}

elseif ($_GET['s'] == 'a3c'){
echo 'Your generated password here: <h2>'.a3c($password).'</h2>';
}

elseif ($_GET['s'] == '123'){
echo 'Your generated password here: <h2>'.a123($password).'</h2>';
}

elseif ($_GET['s'] == 'abc'){
echo 'Your generated password here: <h2>'.abc($password).'</h2>';
}

else{
echo '<br />Select Password length,<br /> then Symbol<br /><br />';
}

if (isset($_GET['l'])){
echo 'Symbols used: <h3>';

if ($_GET['s'] == 'abc') 
{ echo '<a class="selected" href="?s=abc&amp;l='.$_GET['l'].'">abc</a>'; }
else { echo '<a class="la" href="?s=abc&amp;l='.$_GET['l'].'">abc</a>'; }

if ($_GET['s'] == '123')
{ echo '<a class="selected" href="?s=123&amp;l='.$_GET['l'].'">123</a>'; }
else { echo '<a class="la" href="?s=123&amp;l='.$_GET['l'].'">123</a>'; }

if ($_GET['s'] == 'a3c')
{ echo '<a class="selected" href="?s=a3c&amp;l='.$_GET['l'].'">a3c</a>'; }
else { echo '<a class="la" href="?s=a3c&amp;l='.$_GET['l'].'">a3c</a>'; }


if ($_GET['s'] == 'a3')
{ echo '<a class="selected" href="?s=a3&amp;l='.$_GET['l'].'">a3#</a>'; }
else { echo '<a class="la" href="?s=a3&amp;l='.$_GET['l'].'">a3#</a>'; }


if ($_GET['s'] == 'aBc')
{ echo '<a class="selected" href="?s=aBc&amp;l='.$_GET['l'].'">aBc</a>'; }
else { echo '<a class="la" href="?s=aBc&amp;l='.$_GET['l'].'">aBc</a>'; }

if ($_GET['s'] == 'ABC')
{ echo '<a class="selected" href="?s=ABC&amp;l='.$_GET['l'].'">ABC</a>'; }
else { echo '<a class="la" href="?s=ABC&amp;l='.$_GET['l'].'">ABC</a>'; }


echo '</h3>';
}

else{

echo '
Symbols used: 
<h3>
<a class="la" href="?s=abc">abc</a> 
<a class="la" href="?s=123">123</a> 
<a class="la" href="?s=a3c">a3c</a> 
<a class="la" href="?s=a3">a3#</a> 
<a class="la" href="?s=aBc">aBc</a> 
<a class="la" href="?s=ABC">ABC</a>
</h3>
';
}



echo '<br />';



if (isset($_GET['s'])){

echo 'Password length:  <h3>';

if ($_GET['l'] == 6)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=6"> 6 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=6"> 6 </a>'; }
#####################################
if ($_GET['l'] == 7)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=7"> 7 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=7"> 7 </a>'; }
#####################################
if ($_GET['l'] == 8)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=8"> 8 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=8"> 8 </a>'; }
#####################################
if ($_GET['l'] == 9)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=9"> 9 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=9"> 9 </a>'; }
#####################################
if ($_GET['l'] == 10)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=10"> 10 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=10"> 10 </a>'; }
#####################################
if ($_GET['l'] == 11)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=11"> 11 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=11"> 11 </a>'; }
#####################################
if ($_GET['l'] == 12)
{ echo '<a class="selected" href="?s='.$_GET['s'].'&amp;l=12"> 12 </a>'; }
else { echo '<a class="la" href="?s='.$_GET['s'].'&amp;l=12"> 12 </a>'; }


echo '</h3> ';
}

else{

echo '

Password length:  <h3> 
<a class="la" href="?l=6"> 6 </a>  
<a class="la" href="?l=7"> 7 </a>  
<a class="la" href="?l=8"> 8 </a>  
<a class="la" href="?l=9"> 9 </a>  
<a class="la" href="?l=10"> 10 </a>  
<a class="la" href="?l=6"> 11 </a>  
<a class="la" href="?l=12"> 12 </a> 
</h3>
';
}
//echo $password;



?>
        </div>

	    <div class="footer">
	    
	       Code by ITUnix.eu 2011 <br /> Design iPhone Version. &copy; Peter Hinton Design, 2011
	    
	    </div>
    
    </form>
</body>
</html>
