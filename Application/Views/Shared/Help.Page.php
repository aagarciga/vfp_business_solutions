<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="application-name" content="<?php echo $Application; ?>">
        <title><?php echo $Title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <?php $View->Partial('meta'); ?>
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="<?php echo $View->SharedImagesContext('favicon.ico'); ?>" type="image/ico" />

        
        <link rel="stylesheet" href="<?php echo $View->SharedStylesContext('normalize.css'); ?>">
        <link rel="stylesheet" href="<?php echo $View->SharedStylesContext('main.css'); ?>">
        <link rel="stylesheet" href="<?php echo $View->SharedStylesContext('googlecode-highlight.css'); ?>">

        <?php $View->Partial('styles'); ?>
        
        <script src="<?php echo $View->SharedScriptsContext('modernizr-2.6.2.min.js'); ?>"></script>        
        <?php $View->Partial('scripts'); ?>
        
        <?php $View->Partial('head'); ?>        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Your site or application content go here -->
        <?php $View->Partial('body'); ?>
        <footer>
            <hr />
            <div class="powered">Powered by Dandelion MVC <?php echo MVC_VERSION; ?></div>            
        </footer>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $View->SharedScriptsContext('jquery-1.9.1.min.js'); ?>"><\/script>')</script>
        <script src="<?php echo $View->ScriptsContext('plugins.js'); ?>"></script>
        <script src="<?php echo $View->ScriptsContext('main.js'); ?>"></script>
        
        <script src="<?php echo $View->SharedScriptsContext('highlight.pack.js'); ?>"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>  
        
    </body>
</html>
