<div class="viewport">
    <nav class="row row-1 col-4">
        <ul>
            <li><a href="#" class="disabled items-to-bin"><span class="label">Items to Bin</span></a></li>
            <li><a href="#" class="disabled bin-to-bin"><span class="label">Bin to Bin</span></a></li>
            <li><a href="<?php echo $View->Href("PhysicalCount")?>" class="physical-count"><span class="label">Physical Count</span></a></li>
            <li><a href="#" class="disabled change-properties"><span class="label">Change Properties</span></a></li>
        </ul>
    </nav>
    <nav class="row row-2 col-4">
        <ul>
            <li><a href="#" class="disabled pick-ticket"><span class="label">Pick Ticket</span></a></li>
            <li><a href="#" class="disabled packing"><span class="label">Packing</span></a></li>
            <li><a href="#" class="disabled shipping"><span class="label">Shipping</span></a></li>
        </ul>
    </nav>
    <nav class="row row-3 col-3">
        <ul>
            <li><a href="#" class="disabled shipment"><span class="label">Shipment</span></a></li>
            <li><a href="#" class="disabled return"><span class="label">Return</span></a></li>            
        </ul>
    </nav>
    <nav class="row row-3 col-1">
        <ul>
            <li><a href="<?php echo $View->Href("User", "Signin")?>" class="exit"><span class="label">Exit</span></a></li>
        </ul>
    </nav>
    
    <footer>
        <div class="powered">&copy; 2014. VFP Business Solutions, LLC</div>
    </footer>
</div>

