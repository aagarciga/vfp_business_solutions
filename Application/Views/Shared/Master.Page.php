<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo $Title; ?></title>
    <meta name="application-name" content="<?php echo $Application; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="<?php echo $View->SharedImagesContext('favicon.ico'); ?>" type="image/ico" />
    
    <?php $View->Partial('meta'); ?>
    <link href="<?php echo $View->PublicVendorContext('bootstrap-3/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $View->PublicVendorContext('bootstrap-3/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $View->PublicVendorContext('select2/css/select2.min.css'); ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $View->PublicVendorContext('select2/css/select2-bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
    
    <link href="<?php echo $View->SharedStylesContext('main.min.css'); ?>" rel="stylesheet" media="screen">
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
    
    <div class="loading"></div>

    <script src="<?php echo $View->SharedScriptsContext('jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo $View->PublicContext('scripts/Dandelion/dandelion.min.js'); ?>"></script>
    <script src="<?php // echo $View->PublicContext('scripts/Dandelion/dandelion.MVC.min.js'); ?>"></script>
    <script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo $View->ScriptsContext('main.min.js'); ?>"></script>
    <?php $View->Partial('scripts'); ?>
  </body>
</html>