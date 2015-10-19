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
            <a class="navbar-brand" href="#">Financial Dashboard</a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div class="panel panel-body">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div id="financial-wrapper" >
                <section class="chart-wrapper">
                    <div id="financial-chart" class="chart-container">

                    </div>
                </section>
                <section class="financial-link-widget">
                    <nav>
                        <a class="financial-link btn btn-xs btn-default">
                            <!--                        <span class="financial-link-caption">Account Receivable</span>-->
                            <!--                        <span class="financial-link-value"> $ 300,000</span>-->
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                        <a class="financial-link btn btn-xs btn-default">
                            <!--                        <span class="financial-link-caption">Cash</span>-->
                            <!--                        <span class="financial-link-value"> $ 50,000</span>-->
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                        <a class="financial-link btn btn-xs btn-default">
                            <!--                        <span class="financial-link-caption">WIP</span>-->
                            <!--                        <span class="financial-link-value"> $ 125,000</span>-->
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                        <a class="financial-link btn btn-xs btn-default">
                            <!--                        <span class="financial-link-caption">- (Account Payable)</span>-->
                            <!--                        <span class="financial-link-value">$ 120,000</span>-->
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                        <a class="financial-link btn btn-xs btn-default">
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                    </nav>
                </section>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div id="ar-chart-summary-wrapper" >
                <section class="chart-wrapper">
                    <div id="ar-summary-chart" class="chart-container">
                    </div>
                </section>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div id="ap-chart-summary-wrapper" >
                <section class="chart-wrapper">
                    <div id="ap-summary-chart" class="chart-container">
                    </div>
                </section>
            </div>
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

