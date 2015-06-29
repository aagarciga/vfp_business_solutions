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
            <a class="navbar-brand" href="#" style="margin: -2px;">Warehouse Management</a>
        </div>

        <?php $View->Control('MainMenu'); ?>
    </nav>

    <div id="wms-features-container" class="panel panel-default">
        <div class="panel-body">
            <ul id="wms-features">
                <li id="bin-to-bin">
                    <a href="<?php echo $View->Href("BinToBin") ?>"><span>Bin to Bin</span></a>
                </li>
                <li id="physical-count">
                    <a href="<?php echo $View->Href("PhysicalCount") ?>"><span>Physical Count</span></a>
                </li>
                <li id="item-lookup">
                    <a href="<?php echo $View->Href("ItemLookup") ?>"><span>Item Lookup</span></a>
                </li>
                <li id="pick-ticket">
                    <a href="<?php echo $View->Href("PickTicket") ?>"><span>Pick Ticket</span></a>
                </li>
                <li id="shipment">
                    <a href="<?php echo $View->Href("Shipment") ?>"><span>Shipment</span></a>
                </li>
                
            </ul>
        </div>
    </div>

    <div  class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                                
                <li class="right">
                    <a href="<?php echo $View->Href("User", "Signout") ?>" class="exit">
                        <img src="<?php echo $View->ImagesContext("main/exit.png") ?>"/> Exit</a>
                </li>
            </ul>
        </div>
    </div>

<!--    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills ">
                <li>
                    <a href="<?php echo $View->Href("User", "Signout") ?>" class="exit">
                        <img src="<?php echo $View->ImagesContext("main/exit.png") ?>"/> Exit</a>
                </li>
            </ul>
        </div>
    </div>-->

</div>

