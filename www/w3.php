<!DOCTYPE html>
<html lang="en">
<head>
<?php
$m3u8= $_GET["m3u8"];
$poster= $_GET["poster"];
$title= $_GET["channel"];
$rtmp = str_replace("http","rtmp",$m3u8);
$rtmp = substr($rtmp,0,-5);?>
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta property="og:title" content="UPG.GR MEDIA SERVER" />
<meta property="og:description" content="UPG.GR MEDIA SERVER" />
<meta property="og:image" content="<?php echo $poster; ?>" />
<link rel="icon" href="favicon.ico">
<title>UPG.GR Media Player</title>
<link rel="stylesheet" href="//releases.flowplayer.org/6.0.2/skin/functional.css">
<link rel="stylesheet" href="http://demos.flowplayer.org/media/css/demo.css">
<link rel="stylesheet" href="http://demos.flowplayer.org/media/css/pygments.css">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
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
    <div data-live="true"
     data-ratio="0.5625"
     class="flowplayer" data-rtmp="<?php echo $rtmp;?>" fixed-controls>
      <video data-title="Live stream" preload="none" autoplay>
        <source  type="application/x-mpegurl" src="<?php echo $m3u8; ?>">
      </video>
    </div>
    <br> <br> <br> <br> <br>
   <h5> <?php echo $rtmp;?></h5>
    <h5><a href="<?php echo $m3u8;?>"><?php echo $m3u8;?></a></h5>
    <h6>We love your <a href="mailto:info@upg.gr">feedback</a></h6>
  </section>
</div>
</body>
</html>
