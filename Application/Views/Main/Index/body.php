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
            <a class="navbar-brand" href="#">VFP Business Series</a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-default">
        <div id="main-panel" class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li id="quote-dashboard"><a href="<?php echo $View->Href("QuoteDashboard", "Index") ?>" class="exit">
                        <span class="glyphicon glyphicon-th-list"></span><span class="main-panel-caption">Quote Dashboard</span></a></li>
                <li id="sales-order-dashboard"><a href="<?php echo $View->Href("Dashboard", "Index") ?>" class="exit">
                        <span class="glyphicon glyphicon-th-list"></span><span class="main-panel-caption">Sales Order Dashboard</span></a></li>
                <?php if ($FullFeatures === true):?>
                <li id="warehouse-management"><a href="<?php echo $View->Href("WMS", "Index") ?>">
                        <span class="glyphicon glyphicon-th"></span><span class="main-panel-caption">Warehouse Management<span></a></li>
                <?php endif ?>
            </ul>
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

