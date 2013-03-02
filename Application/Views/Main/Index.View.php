<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Main Index</title>
    </head>
    <body>
        <?php
            echo $WelcomeMessage;
        ?>
        <form name="Form1" action="index.php?controller=main" method="POST">
            <label for="Name">Your name?</label>
            <input type="text" name="Name" value="" />
            <input type="submit" value="Send" />
        </form>
    </body>
</html>
