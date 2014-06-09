<form name="Singin" action="<?php echo $View->FormAction($Controller, $Action);?>" method="POST" class="viewport">
    <h1>VFP Business Solutions, LLC</h1>
    <input type="hidden" name="hdnController" value="<?php echo $PreviousController ?>"/>
    <input type="hidden" name="hdnAction" value="<?php echo $PreviousAction ?>"/>

    <label for="txtUsername">Username</label>
    <input type="text" name="txtUsername" placeholder="Ex. ADMIN"/>

    <label for="txtPassword">Password</label>
    <input type="password" name="txtPassword" />

    <input type="submit" value="Sing in" />
    
    <footer>
        <div class="powered">&copy; 2014. VFP Business Solutions, LLC</div>
    </footer>
</form>
