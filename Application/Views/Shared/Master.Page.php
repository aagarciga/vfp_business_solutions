<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php $View->Partial('meta'); ?>
        
        <title><?php echo $Title; ?></title>
        
        <?php $View->Partial('styles'); ?>
        <?php $View->Partial('scripts'); ?>
        <?php $View->Partial('head'); ?>
        
    </head>
    <body>
        <?php $View->Partial('body'); ?>
    </body>
</html>
