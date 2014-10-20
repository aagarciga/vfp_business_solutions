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
                
                <div  class="btn-group filter-button left">
                    <button type="button" class="btn btn-primary">Filter</button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation" class="dropdown-header">By</li>
                        <li><a href="#" class="filter-field" data-field="ordnum" data-field-type="text">Sales Order</a></li>
                        <li><a href="#" class="filter-field" data-field="ponum" data-field-type="text">Purchase Order</a></li>
                        <li><a href="#" class="filter-field" data-field="company" data-field-type="text">Company</a></li>
                        <li><a href="#" class="filter-field" data-field="destino" data-field-type="text">Vessel</a></li>
                        <li><a href="#" class="filter-field" data-field="ProStartDT" data-field-type="date">Start Date</a></li>
                        <li><a href="#" class="filter-field" data-field="ProEndDT" data-field-type="date">End Date</a></li>
                        <li><a href="#" class="filter-field" data-field="sotype" data-field-type="text">Job Type</a></li>
                        <li><a href="#" class="filter-field" data-field="" data-field-type="text">Material Status</a></li>
                        <li><a href="#" class="filter-field" data-field="" data-field-type="text">Status</a></li>
                        <li><a href="#" class="filter-field" data-field="" data-field-type="text">Project Manager</a></li>
                        <li><a href="#" class="filter-field" data-field="podate" data-field-type="date">Create Date</a></li>
                        <li><a href="#" class="filter-field" data-field="qutno" data-field-type="text">Quote No</a></li>
                        <li><a href="#" class="filter-field" data-field="Cstctid" data-field-type="text">Cost Center</a></li>
                        <li><a href="#" class="filter-field" data-field="" >Has Attached Files</a></li>
                    </ul>
                </div>


            </form>
        </div>

        <div class="panel-table">
            <table class="table table-striped" id="dashboardTable">
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
                    <?php foreach ($DashboardItems as $item):?>
                        <tr>
                            <td class="item-field"><?php echo $item->getOrdnum() ?></td>
                            <td class="item-field"><?php echo $item->getPonum() ?></td>
                            <td class="item-field"><?php echo $item->getCompany() ?></td>
                            <td class="item-field"><?php echo $item->getDestino() ?></td>
                            <td class="item-field"><?php echo $item->getProStartDT() ?></td>
                            <td class="item-field"><?php echo $item->getProEndDT() ?></td>
                            <td class="item-field"><?php echo $item->getSotype() ?></td>
                            <td class="item-field"><?php echo $item->getInspectno() ?></td>
                            <td>Material Status</td>
                            <td>Status</td>
                            <td>Vivian Alonso</td>
                            <td class="item-field"><?php echo $item->getPodate() ?></td>
                            <td class="item-field"><?php echo $item->getQutno() ?></td>
                            <td class="item-field"><?php echo $item->getCstctid() ?></td>
                            <td><a href="#"><span class="glyphicon glyphicon-folder-close"></span></a></td>
                        </tr>
                        <?php endforeach ?>
                </body>
            </table>
            <div class="text-center pager-wrapper">
                <?php echo $Pager->getPagerControl(); ?> 
             </div>
        </div>

        <!-- Table -->

    </div>

</div>

