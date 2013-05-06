<form name="Form1" action="<?php echo $View->FormAction($Controller);?>" method="POST">
            <label for="Name">Your name?</label>
            <input type="text" name="Name" value="" id="Name" />
            <input type="submit" value="Send" />
        </form>

        <nav>
            <ul>
                <li>
                    <a href="<?php echo $View->Href('Help', 'Markup');?>" title="The Dandelion MVC <?php echo MVC_VERSION;?> Html5 Boilerplate" >Html5 Boilerplate</a>
                </li>
                <li>
                    <a href="<?php echo $View->Href('Help', 'ExtendingMarkup');?>" title="Extend and customize Dandelion MVC <?php echo MVC_VERSION;?> Html5 Boilerplate" >Extend Html5 Boilerplate</a>
                </li>
            </ul>
        </nav>

