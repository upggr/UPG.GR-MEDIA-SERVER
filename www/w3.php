<!DOCTYPE html>
<html lang="en">
<head>
<?php
$m3u8= $_GET["m3u8"];
$poster= $_GET["poster"];
$title= $_GET["channel"];
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta property="og:title" content="Greek TV by UPG.GR" />
<meta property="og:description" content="Watch Greek Channels on all your devices for free" />
<meta property="og:image" content="<?php echo $poster; ?>" />
<link rel="icon" href="favicon.ico">
<title>UPG.GR Media Player</title>
     <!-- The "functional" skin - choose from: "functional.css", "minimalist.css", "playful.css" -->
   <link rel="stylesheet" href="//releases.flowplayer.org/6.0.2/skin/functional.css">
   
   <!-- Minimal styling for this standalone page, can be removed -->
   <link rel="stylesheet" href="http://demos.flowplayer.org/media/css/demo.css">
   <!-- Syntax highlighting of source code, can be removed -->
   <link rel="stylesheet" href="http://demos.flowplayer.org/media/css/pygments.css">
   
      <!-- Flowplayer depends on jquery 1.7.2+ for html based setups -->
   <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
         <!-- Flowplayer library -->
   <script src="//releases.flowplayer.org/6.0.2/flowplayer.min.js"></script>
<style>
body {
	padding-top: 50px;
	color: #868688;
	background-color: #000000;
}
nav {
	background-color: #e7e7e7
}
nav a {
	color: #868688;
}
nav a:hover {
	color: #606062;
	text-decoration: none;
}
.navbar-toggle .icon-bar {
	background-color: #868688;
}
.starter-template {
	padding: 40px 15px;
	text-align: center;
}
.video-js {
	margin: 0 auto;
}
</style>
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        

</head>

<body>

<div class="container">
  <section class="starter-template">
    <h3><?php echo $title;?> by <a href="http://upg.gr" target="_blank">upg.gr</a></h3>
    
    <?php $rtmp = str_replace("http","rtmp",$m3u8);
        $rtmp = substr($rtmp,0,-5);?>
<div data-live="true"
     data-ratio="0.5625"
     class="flowplayer" data-rtmp="<?php echo $rtmp;?>" fixed-controls>
 
   <video data-title="Live stream" preload="none" autoplay>
<source  type="application/x-mpegurl" src="<?php echo $m3u8; ?>">
   </video>
 
</div>
    

    <h5><?php include('alts.php');?></h5>
    <br>
<?php echo $rtmp;?>
<br>
<?php echo $m3u8;?>

    <h5><a href="http://upg.gr/greek-tv-by-upg-gr-for-roku/" target="_blank">Watch on your Television Set</a></h5>
<h5><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="BPELD9F89SCN4">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</h5>
    <h6>We love your <a href="mailto:info@upg.gr">feedback</a></h6>
  </section>
</div>

    
    <php include('analytics.php'); ?>
</body>
</html>
