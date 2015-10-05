<?php 
session_start();
// echo $_SESSION['gambar1']."<br />";
// echo $_SESSION['gambar2']."<br />";
// echo $_SESSION['gambar3']."<br />";
// echo $_SESSION['gambar4']."<br />";
// echo $_SESSION['gambar5']."<br />";
// echo $_SESSION['gambar6']."<br />";
// echo $_SESSION['gambar7']."<br />";
// echo $_SESSION['gambar8']."<br />";

if (isset($_GET['search'])) {
    $_SESSION['key'] = $_GET['search'];
    $_SESSION['rsz'] = $_GET['idPage'];
} else {
    $_SESSION['key'] = 'nature+wallpaper';
    $_SESSION['rsz'] = 12;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <title>Dvorax.com | 
    <?php 
        // if (isset($_GET['search'])) {
        //     echo $_GET['search']." Category";
        // } 
        // if (isset($_GET['post_image'])) {
        //     $t = preg_replace('/[^a-zA-Z]/', ' ', $_GET['title']);
        //     echo $t;
        // } 
        // if (isset($_GET['post_video'])) {
        //     $d = preg_replace('/[^a-zA-Z]/', ' ', $_GET['title']);
        //     echo $d;  
        // } else {
        //     echo 'Download Infinity HD Wallpapers';
        // }
    ?>

    </title>
    
    <?php 
        // if (isset($_GET['search'])) {
        //     echo '<meta name="description" content="'.$_GET['search'].'">';
        //     echo '<meta name="robots" content="index,follow" />';

        // } if (isset($_GET['post_image'])) {
        //     echo '<meta name="description" content="'.$_GET['title'].'">';
        //     echo '<meta name="robots" content="index,follow" />';
        // } 
        // if (isset($_GET['post_video'])) {
        //     $e = preg_replace('/[^a-zA-Z]/', ' ', $_GET['title']);
        //     echo '<meta name="description" content="'.$e.'">';
        //     echo '<meta name="robots" content="index,follow" />';  
        // }
        // if (isset($_GET['p'])) {
        //     echo '<meta name="description" content="Download Infinity HD Wallpapers">';
        //     echo '<meta name="robots" content="noindex,nofollow" />';   
        // } else {
        //     echo '<meta name="description" content="Download Infinity HD Wallpapers">';
        //     echo '<meta name="robots" content="index,follow" />';
        // }
    ?>


    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <style type="text/css">
    h1.judulHome {
        font-size: 12px;
    }
    h1.judulAttachment {
        font-size: 22px;
    }
    .btn-default{
        border:none;
        background-color: transparent;
    }
    .ratio{
        position:relative;
        width: 100%;
        height: 0;
        padding-bottom: 60% ; /* % of width, defines aspect ratio*/
        
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;  
    }
    .pagination>li>a, .pagination>li>span { 
        border-radius: 50% !important;margin: 0 5px;
    }
    /* This only works with JavaScript, 
    if it's not present, don't show loader */
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(images/g_preloader.gif) center no-repeat #fff;
    }
    .h2small {
        font-size: 14px;
    }



    </style>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script type="text/javascript">
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>
</head>
<body>
<div class="se-pre-con"><center>

<br /><br /><br /><br /><br />
<h3>Please Wait...</h3>
</center></div>