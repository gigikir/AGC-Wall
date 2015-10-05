<?php 

// $var = array('Ghani, sangat, keren, sekali, gituh');

session_start();
$_SESSION['gambar1'] = '1asdfasdfaskdfasdfasdf';
$_SESSION['gambar2'] = '2asdfasdfaskdfasdfasdf';
$_SESSION['gambar3'] = '3asdfasdfaskdfasdfasdf';
$_SESSION['gambar4'] = '4asdfasdfaskdfasdfasdf';
$_SESSION['gambar5'] = '5asdfasdfaskdfasdfasdf';
    foreach ($_SESSION as $key=>$value)
    {
        
    	echo $value."<br />";

    }


?>