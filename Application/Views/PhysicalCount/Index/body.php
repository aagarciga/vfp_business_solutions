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
                <a id="close" class="btn btn-default btn-block btn-lg" href="<?php echo $View->Href("WMS") ?>" title="Close"><span class="glyphicon glyphicon-remove"></span></a>
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
                <input type="text" class="form-control"  name="txNetCount" id="txNetCount" readonly placeholder="0" value="<?php echo $Dup ?>">

            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <label class="control-label" for="txCount">TOT</label>
                <input type="text" class="form-control"  name="txCount" id="txCount" readonly placeholder="0" value="<?php echo ($Dup + count($IcbarcodeRows))?>">

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
            <?php foreach ($IcbarcodeRows as $row):?>
                <tr class="item">
                    <td class="item-field"><span class="badge"><?php echo intval($row->getQty())  ?></span></td>
                    <td class="item-field itemno"><?php echo $row->getItemno() ?></td>
                    <td class="item-field location"><?php echo trim($row->getLocno()) ?></td>
                    <td class="item-field"><?php echo $row->getUpccode() ?></td>
                </tr>                
            <?php endforeach ?>

        </tbody>
    </table>

    <?php $View->Control('QuantityForm'); ?>    

</div>

