<div class="container">

    <div class="row">
        <div class="feedback alert alert-info"> Physical Count Screen </div>
    </div>

    <div class="row ">
        <div class="col-xs-8">
            <div class="form-group">
                <label class="control-label" for="txLocation"><span class="glyphicon glyphicon-globe"></span> Location</label>
                <input type="text" class="form-control input"  name="txLocation" id="txLocation" title="Fill Location Code. Then press [Tab] or [Enter]">

            </div>

            <div class="form-group">
                <label class="control-label" for="txBarcode"><span class="glyphicon glyphicon-barcode"></span> Barcode</label>
                <input type="text" class="form-control input" name="txBarcode" id="txBarcode" title="Fill item code, upc code or vendor stock. Then press [Enter]">
            </div>
        </div>

        <div class="col-xs-4">
            <div class="form-group">
                <a id="close" class="btn btn-default btn-block btn-lg" href="<?php echo $View->Href("Main") ?>" title="Close"><span class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="form-group">
                <a id="clear" class="btn btn-default btn-block btn-lg" href="#" title="Clear"><span class="glyphicon glyphicon-repeat"></span></a>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-label" for="txNetCount">DUP</label>
                <input type="text" class="form-control"  name="txNetCount" id="txNetCount" readonly placeholder="0">

            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-label" for="txCount">TOT</label>
                <input type="text" class="form-control"  name="txCount" id="txCount" readonly placeholder="0">

            </div>
        </div>
    </div>

    <table class="table table-striped table-condensed">
        <colgroup>
            <col class="col-1">
            <col class="col-2">
            <col class="col-3">
            <col class="col-4">
        </colgroup>
        <thead>
            <tr>
                <th class="th-count">Count</th>
                <th class="th-itemno">Item No.</th>
                <th class="th-location">Location</th>
                <th class="th-upccode">UPC Code</th>
            </tr>
        </thead>
        <tfoot>

        </tfoot>
        <tbody>
            <tr id="marker-row" style="display: none">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>

        </tbody>
    </table>

    <div id="quantityForm" class="container">

        <div class="form-group">
            <label class="control-label" for="quantityField">Quantity</label>
            <div id="quantityField" class="form-control">0</div>
        </div>

        <ul class="nav nav-pills nav-justified nav-justified-xs">
            <li>
                <a id="num-7-Key" class="btn btn-lg numpad-key" href="#">7</a>
            </li>
            <li>
                <a id="num-8-Key" class="btn  btn-lg numpad-key" href="#">8</a>
            </li>
            <li>
                <a id="num-9-Key" class="btn  btn-lg  numpad-key" href="#">9</a>
            </li>
            <li class="last">
                <a id="delete-Key" class="btn  btn-lg" href="#" title="Erase"><span class="glyphicon glyphicon-arrow-left"></span></a>
            </li>
        </ul>

        <ul class="nav nav-pills nav-justified nav-justified-xs">
            <li>
                <a id="num-4-Key" class="btn btn-lg numpad-key" href="#">4</a>
            </li>
            <li>
                <a id="num-5-Key" class="btn btn-lg numpad-key" href="#">5</a>
            </li>
            <li>
                <a id="num-6-Key" class="btn btn-lg numpad-key" href="#">6</a>
            </li>
            <li class="last">
                <a id="minus-Key" class="btn btn-lg" href="#" title="Minus"><span class="glyphicon glyphicon-minus"></span></a>
            </li>
        </ul>

        <ul class="nav nav-pills nav-justified nav-justified-xs">
            <li>
                <a id="num-1-Key" class="btn btn-lg numpad-key" href="#">1</a>
            </li>
            <li>
                <a id="num-2-Key" class="btn btn-lg numpad-key" href="#">2</a>
            </li>
            <li>
                <a id="num-3-Key" class="btn btn-lg numpad-key" href="#">3</a>
            </li>
            <li class="last">
                <a id="plus-Key" class="btn btn-lg" href="#" title="Plus"><span class="glyphicon glyphicon-plus"></span></a>
            </li>
        </ul>

        <ul class="nav nav-pills nav-justified nav-justified-xs">
            <li>
                <a id="clear-Key" class="btn btn-lg " href="#" title="Clear"><span class="glyphicon glyphicon-repeat"></span></a>
            </li>
            <li>
                <a id="num-0-Key" class="btn btn-lg numpad-key" href="#">0</a>
            </li>
            <li class="last">
                <a id="enter-Key" class="btn btn-lg" href="#" title="OK"><span class="glyphicon glyphicon-ok"></span></a>
            </li>
        </ul>

        <ul class="bottom-actions nav nav-pills nav-justified">
            <li>
                <a id="unknow-Key" class="btn btn-lg " href="#" title="unknow"><span style="visibility: hidden">MMMM</span></a>
            </li>
            <li>
                <a id="zero-qty-Key" class="btn btn-lg" href="#"><span >Zero QTY</span></a>
            </li>
            <li class="last">
                <a id="no-change-Key" class="btn btn-lg" href="#" title="OK"><span >No Change</span></a>
            </li>
        </ul>

    </div>

</div>

