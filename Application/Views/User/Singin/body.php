<form name="Singin" action="<?php echo $View->FormAction($Controller, $Action);?>" method="POST">
    <h1>Sing in</h1>
    <input type="hidden" name="hdnController" value="<?php echo $PreviousController ?>"/>
    <input type="hidden" name="hdnAction" value="<?php echo $PreviousAction ?>"/>

    <label for="txtUsername">Username</label>
    <input type="text" name="txtUsername" />

    <label for="txtPassword">Password</label>
    <input type="password" name="txtPassword" />

    <input type="submit" value="Sing in" />
</form>
