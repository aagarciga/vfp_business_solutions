<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $Title; ?></title>
    </head>
    <body>
        <form name="Form1" action="<?php echo $View->Action($Controller);?>" method="POST">
            <label for="Name">Your name?</label>
            <input type="text" name="Name" value="" id="Name" />
            <input type="submit" value="Send" />
        </form>        
    </body>
</html>
