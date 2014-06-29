<div class="container">

    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#" class="items-to-bin">
                        <img src="<?php echo $View->ImagesContext("main/items-to-bin.png") ?>"/> Items to Bin</a>
                </li>
                <li>
                    <a href="#" class="bin-to-bin">
                        <img src="<?php echo $View->ImagesContext("main/bin-to-bin.png") ?>"/> Bin to Bin</a>
                </li>
                <li class="-active">
                    <a href="<?php echo $View->Href("PhysicalCount") ?>" class="physical-count">
                        <img src="<?php echo $View->ImagesContext("main/physical-count.png") ?>"/> Physical Count</a>
                </li>
                <li>
                    <a href="#" class="change-properties">
                        <img src="<?php echo $View->ImagesContext("main/change-properties.png") ?>"/> Change Properties</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#" class="pick-ticket">
                        <img src="<?php echo $View->ImagesContext("main/pick-ticket.png") ?>"/> Pick Ticket</a>
                </li>
                <li>
                    <a href="#" class="packing">
                        <img src="<?php echo $View->ImagesContext("main/packing.png") ?>"/> Packing</a>
                </li>
                <li><a href="#" class="shipping">
                        <img src="<?php echo $View->ImagesContext("main/shipping.png") ?>"/> Shipping</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#" class="shipment">
                        <img src="<?php echo $View->ImagesContext("main/shipment.png") ?>"/> Shipment</a>
                </li>
                <li><a href="#" class="return">
                        <img src="<?php echo $View->ImagesContext("main/return.png") ?>"/> Return</a>
                </li> 
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="<?php echo $View->Href("User", "Signin") ?>" class="exit">
                        <img src="<?php echo $View->ImagesContext("main/exit.png") ?>"/> Exit</a>
                </li>
            </ul>
        </div>
    </div>

</div>

