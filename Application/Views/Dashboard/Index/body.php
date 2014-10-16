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
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $UserName ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $View->Href("Main", "Index") ?>" class="main active">
                                <span class="glyphicon glyphicon-home"></span> Main</a></li>
                        <li><a href="<?php echo $View->Href("Dashboard", "Index") ?>" class="exit">
                                <span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                        <li><a href="<?php echo $View->Href("User", "Signout") ?>" class="exit">
                                <span class="glyphicon glyphicon-off"></span> Exit</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Projects <span class="badge">4</span> <a href="#" id="dashboard-panel-togle-visibility-button" class="panel-togle-visibility-button pull-right" title="Show/Hide Filter"><span class="glyphicon glyphicon-eye-open"></span></a></div>
        <div class="panel-body">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only" for="txSonumber">Sell Order</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="txSonumber" placeholder="Sell Order">
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon-action-button glyphicon-minus" type="button"></button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /form-group -->

                <div class="form-group">
                    <label class="sr-only" for="txStartdate">Start Date</label>
                    <div class="input-prepend input-group" title="Start Date">
                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" name="txStartdate" id="txStartdate" class="form-control daterangepicker-single" placeholder="Start Date"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon-action-button glyphicon-minus" type="button"></button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /form-group -->

                <div class="form-group">
                    <label class="sr-only" for="txEnddate">End Date</label>
                    <div class="input-prepend input-group" title="End Date">
                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" name="txEnddate" id="txStartdate" class="form-control daterangepicker-single" placeholder="End Date"/>
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon-action-button glyphicon-minus" type="button"></button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /form-group -->

                <div class="form-group">
                    <label class="sr-only" for="txSonumber">Company</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="txCompany" placeholder="Company">
                        <span class="input-group-btn">
                            <button class="btn btn-default glyphicon-action-button glyphicon-minus" type="button"></button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /form-group -->

                <!-- Split button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Filter</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header">By</li>
                        <li><a href="#">Sales Order</a></li>
                        <li><a href="#">Purchase Order</a></li>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Vessel</a></li>
                        <li><a href="#">Start Date</a></li>
                        <li><a href="#">End Date</a></li>
                        <li><a href="#">Job Type</a></li>
                        <li><a href="#">Material Status</a></li>
                        <li><a href="#">Status</a></li>
                        <li><a href="#">Project Manager</a></li>
                        <li><a href="#">Create Date</a></li>
                        <li><a href="#">Quote No</a></li>
                        <li><a href="#">Cost Center</a></li>
                        <li><a href="#">Has Attached Files</a></li>
                        <li class="divider"></li>
                        <li role="presentation" class="dropdown-header">Add Modifier</li>
                        <li><a href="#">Not</a></li>
                        <li><a href="#">Or</a></li>
                    </ul>
                </div>


            </form>
        </div>

        <div class="panel-table">
            <table class="table table-striped">
                <colgroup>
                    <col class="col-1"/>
                    <col class="col-2"/>
                    <col class="col-3"/>
                    <col class="col-4"/>
                    <col class="col-5"/>
                    <col class="col-6"/>
                    <col class="col-7"/>
                    <col class="col-8"/>
                    <col class="col-9"/>
                    <col class="col-10"/>
                    <col class="col-11"/>
                    <col class="col-12"/>
                    <col class="col-13"/>
                    <col class="col-14"/>
                    <col class="col-15"/>
                </colgroup>
                <thead>
                    <tr>
                        <th>Sales Order</th>
                        <th>Purchase Order</th>
                        <th>Company</th>
                        <th>Vessel</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Job Type</th>
                        <th>Description</th>
                        <th>Material Status</th>
                        <th>Status</th>
                        <th>Project Manager</th>
                        <th>Create</th>
                        <th>Quote No</th>
                        <th>Cost Center</th>
                        <th>Attached Files</th>                               
                    </tr>
                </thead>
                <body>
                    <tr>
                        <td>1000</td>
                        <td>1000</td>
                        <td>Olympus Marine Group</td>
                        <td>Vessel</td>
                        <td>10/01/2014</td>
                        <td>10/01/2015</td>
                        <td>Job Type</td>
                        <td>Description</td>
                        <td>Material Status</td>
                        <td>Status</td>
                        <td>Vivian Alonso</td>
                        <td>10/01/2014</td>
                        <td>Quote No</td>
                        <td>Cost Center</td>
                        <td><a href="#"><span class="glyphicon glyphicon-folder-close"></span></a></td>                               
                    </tr>
                    <tr>
                        <td>1000</td>
                        <td>1000</td>
                        <td>Olympus Marine Group</td>
                        <td>Vessel</td>
                        <td>10/01/2014</td>
                        <td>10/01/2015</td>
                        <td>Job Type</td>
                        <td>Description</td>
                        <td>Material Status</td>
                        <td>Status</td>
                        <td>Vivian Alonso</td>
                        <td>10/01/2014</td>
                        <td>Quote No</td>
                        <td>Cost Center</td>
                        <td><a href="#"><span class="glyphicon glyphicon-folder-close"></span></a></td>                               
                    </tr>
                    <tr>
                        <td>1000</td>
                        <td>1000</td>
                        <td>Olympus Marine Group</td>
                        <td>Vessel</td>
                        <td>10/01/2014</td>
                        <td>10/01/2015</td>
                        <td>Job Type</td>
                        <td>Description</td>
                        <td>Material Status</td>
                        <td>Status</td>
                        <td>Vivian Alonso</td>
                        <td>10/01/2014</td>
                        <td>Quote No</td>
                        <td>Cost Center</td>
                        <td><a href="#"><span class="glyphicon glyphicon-folder-close"></span></a></td>                               
                    </tr>
                    <tr>
                        <td>1000</td>
                        <td>1000</td>
                        <td>Olympus Marine Group</td>
                        <td>Vessel</td>
                        <td>10/01/2014</td>
                        <td>10/01/2015</td>
                        <td>Job Type</td>
                        <td>Description</td>
                        <td>Material Status</td>
                        <td>Status</td>
                        <td>Vivian Alonso</td>
                        <td>10/01/2014</td>
                        <td>Quote No</td>
                        <td>Cost Center</td>
                        <td><a href="#"><span class="glyphicon glyphicon-folder-close"></span></a></td>                               
                    </tr>
                </body>
            </table>
        </div>

        <!-- Table -->

    </div>

</div>

