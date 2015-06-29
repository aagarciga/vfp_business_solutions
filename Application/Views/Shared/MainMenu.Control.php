        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $UserName ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $View->Href("Main", "Index") ?>" class="main active">
                                <span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <?php if ($FullFeatures === true):?>
                        <li><a href="<?php echo $View->Href("WMS", "Index") ?>" class="exit">
                                <span class="glyphicon glyphicon-th"></span> Warehouse Management System</a></li>
                        <?php endif ?>
                        <li><a href="<?php echo $View->Href("Dashboard", "Index") ?>" class="exit">
                                <span class="glyphicon glyphicon-th"></span> Sales Order Dashboard</a></li>
                        <li><a href="<?php echo $View->Href("QuoteDashboard", "Index") ?>" class="exit">
                                <span class="glyphicon glyphicon-th"></span> Quote Dashboard</a></li>
                        <li><a href="<?php echo $View->Href("User", "Signout") ?>" class="exit">
                                <span class="glyphicon glyphicon-off"></span> Exit</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->