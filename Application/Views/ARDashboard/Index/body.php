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
            <a class="navbar-brand" href="#">Account Receivable Dashboard</a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel">
        <div id="ar-chart-wrapper">
            <section class="chart-wrapper">
                <div id="ar-chart" class="chart-container">

                </div>
            </section>

        </div>

    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills ">
                <li>
                    <a href="<?php echo $View->Href("User", "Signout") ?>" class="exit">
                        <img src="<?php echo $View->ImagesContext("main/exit.png") ?>"/> Exit</a>
                </li>
            </ul>
        </div>
    </div>

</div>

