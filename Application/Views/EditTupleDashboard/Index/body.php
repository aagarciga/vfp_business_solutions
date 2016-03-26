<?php
/**
 * User: Victor
 * Date: 12/01/2016
 * Time: 15:01
 */
?>

<div class="container">

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?php echo $View->UploadsContext($CompanyLogo) ?>"/>
                Edit Tuple <?php echo $FieldIdName ?>: <?php echo $FieldIdValue ?>
            </a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">

    </div><!-- /.panel -->

    <!--    Controls Here ...-->

</div><!-- /.container -->

<!--Modals Here ...-->
<!-- /.modal -->
