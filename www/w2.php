


<!doctype html>
<html>
<head>
    
    <title>Flash HLS Live : Flowplayer</title>

    <link rel="shortcut icon" href="http://flash.flowplayer.org/favicon.ico">
    <!-- standalone page styling. can be removed -->
    <style>
        body{
            width:982px;
            margin:50px auto;
            font-family:sans-serif;
        }
        a:active {
            outline:none;
        }
        :focus { -moz-outline-style:none; }

        .palert {
            padding: 12px;
            color: black;
            background-color: #ededed;
            box-shadow: none;
        }
    </style>

    
    
    <!-- flowplayer javascript component -->
    <script src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>

    </head>

<body>
    <style>
#flashls_live {
     display: block;
     width: 640px;
     height: 360px;
     margin: 0 auto;
     cursor: pointer;
}
#flashls_live *:focus {
     outline-style: none;
}
</style>

<script src="http://releases.flowplayer.org/js/flowplayer.ipad-3.2.13.min.js" type="text/javascript"></script>

<!-- container with splash image -->
<div id="flashls_live">
    <img src="/media/img/home/flow_eye.jpg" width="640" height="360" alt="Flow Eye"/>
</div>

<script>
// install flowplayer into container
$f("flashls_live", "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf", {
    plugins: {
        flashls: {
            // load the flashls plugin
            url: "http://greektv.upg.gr/flashlsFlowPlayer.swf",
            hls_maxbufferlength: 20
        }
    },
    clip: {
        url: "http://wms.shared.streamshow.it/telesanremo/telesanremo/playlist.m3u8",
        live: true,
        
        // configure the flashls plugin as the clip's provider and urlResolver
        provider: "flashls",
        urlResolvers: "flashls",

        scaling: "fit"
    }
}).ipad(); // sets up the player on iOS
</script>

</body>

</html>