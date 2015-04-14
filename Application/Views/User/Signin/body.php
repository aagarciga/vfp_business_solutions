<div class="container">
    
    <form class="form-signin" name="Singin" action="<?php echo $View->FormAction($Controller, $Action);?>" method="POST" >
        
        <input type="hidden" name="hdnController" value="<?php echo $PreviousController ?>"/>
        <input type="hidden" name="hdnAction" value="<?php echo $PreviousAction ?>"/>
        
        <h2 class="form-signin-heading">VFP Business Solutions, LLC</h2>
        
        <div class="input-group text">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input name="txtUsername" type="text" class="form-control" placeholder="Username" autofocus />
        </div>
        
        <div class="input-group password">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input name="txtPassword" type="password" class="form-control" placeholder="Password" />
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
    </form>
    
</div>
