<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo $Title; ?></title>
    <meta name="application-name" content="Dandelion MVC Creator">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo $View->SharedImagesContext('favicon.ico'); ?>" type="image/ico" />
    
    <?php $View->Partial('meta'); ?>
    <!-- Bootstrap -->
    <link href="<?php echo $View->PublicVendorContext('bootstrap-3/css/bootstrap.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $View->PublicVendorContext('bootstrap-3/css/bootstrap-theme.css'); ?>" rel="stylesheet" media="screen">
    
    <link href="<?php echo $View->StylesContext('Creator/common.css'); ?>" rel="stylesheet" media="screen">
    <?php $View->Partial('styles'); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="<?php echo $View->PublicVendorContext('assets/js/html5shiv.js'); ?>"></script>
        <script src="<?php echo $View->PublicVendorContext('assets/js/respond.min.js'); ?>"></script>
    <![endif]-->
    <?php $View->Partial('head'); ?>
  </head>
  <body>

    <?php $View->Partial('body'); ?>
    
    
    <!-- jQuery -->
    <script src="<?php echo $View->SharedScriptsContext('jquery-1.10.2.min.js'); ?>"></script>
    <!--Knocback Full Stack : Knockback, Backbone and Underscore -->
    <script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
    <!--    <script src="//code.jquery.com/jquery.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $View->PublicContext('scripts/Dandelion/dandelion.js'); ?>"></script>
    <script src="<?php echo $View->ScriptsContext('Creator/creator.js'); ?>"></script>
    <?php $View->Partial('scripts'); ?>
  </body>
</html>