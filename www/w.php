<!DOCTYPE html>
<html lang="en">
<head>
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="https://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1463191647329292";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
  <section class="starter-template">
    <h3><?php echo $title;?> by <a href="http://upg.gr" target="_blank">upg.gr</a></h3>
    
    
    <video id=example-video width="100%" height="300" autoplay=true poster="<?php echo $poster;?>" preload=auto class="video-js vjs-default-skin" controls>
      <source
             src="http://localhost/hls/livestream.m3u8 "
             type="application/x-mpegURL">
    </video>
    
        <h5>8</h5>
    <h5><9</h5>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="http://videojs.github.io/videojs-contrib-hls/node_modules/video.js/dist/video-js/video.dev.js"></script>
<script src="http://videojs.github.io/videojs-contrib-hls/node_modules/videojs-contrib-media-sources/src/videojs-media-sources.js"></script>
<script src="https://github.com/videojs/videojs-contrib-hls/releases/download/v0.17.1/videojs.hls.min.js"></script>
<script>
      var player = videojs('example-video');
    </script>
    
  0
</body>
</html>
