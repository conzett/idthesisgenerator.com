<?php include 'generator.php'; ?>

<!doctype html>
<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Industrial Design Thesis Generator</title>
        <meta name="description" content="">
        <meta name="author" content="Graham Conzett">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, target-densitydpi=160, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <!--[if (lt IE 9) & (!IEMobile)]>
        <script src="js/selectivizr-min.js"></script>
        <![endif]-->
        <script src="js/modernizr.custom.53767.js"></script>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/high/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/medium/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="img/low/apple-touch-icon-precomposed.png">
        <link rel="shortcut icon" href="img/low/apple-touch-icon.png">
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="apple-touch-startup-image" href="img/splash.png">
        <meta http-equiv="cleartype" content="on">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!--[if lt IE 7 ]><script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script><script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script><![endif]-->
        <meta property="og:title" content="Industrial Design Thesis Generator" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://idthesisgenerator.com/" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="Industrial Design Thesis Generator" />
        <meta property="fb:admins" content="12400149" />
        <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-29024486-1']);
                _gaq.push(['_trackPageview']);
                (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
        </script>
    </head>
    <body>
        <header role="banner">
            <h1>
                I<span class="ft">ndustrial </span>D<span class="ft">esign</span> 
                <span class="senior">Senior</span>
                Thesis Generator
            </h1>
        </header>
        <div role="main">
            <p>Coming up with a project for your senior year Industrial Design thesis/capstone project can be difficult. We suggest a: </p>

            <p class="result"><span> <?php echo generate(); ?> </span></p>

            <p>Already saw it on Coroflot? <a href="/">Try another</a></p>
        </div>
        <footer role="contentinfo">
                <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fidthesisgenerator.com%2F&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=dark&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:35px;" allowTransparency="true"></iframe>

                <div class="g-plusone" data-size="medium" data-width="200" data-annotation="inline" data-href="http://idthesisgenerator.com/"></div>
        </footer>
        <script src="js/scalefix.js"></script>
        <!--[if (lt IE 9) & (!IEMobile)]>
        <script src="js/imgsizer.js"></script>
        <![endif]-->
        <script>
            MBP.scaleFix();

            yepnope({
                test: Modernizr.mq('(min-width)'),
                nope: ['js/respond.min.js']
            });
        </script>
        <script type="text/javascript">
        (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
        </script>
    </body>
</html>