<div class="viewport">
    <div class="feedback-container">
        <p class="feedback">
            Message
        </p>
    </div>


    <section class="controls-0">
        <a class="btn" href="<?php echo $View->Href("Main") ?>">Close</a>
        <a id="clear" class="btn" href="#">Clear</a>

    </section>

    <section class="controls-1">
        <label for="txLocation">Location</label>
        <input type="text" name="txLocation" id="txLocation" required title="Fill Location Code, then press Enter"/>
        <label for="txBarcode" >Barcode</label>
        <input type="text" name="txBarcode" id="txBarcode" required title="Fill item code, upc code or vendor stock, then press Enter"/>
        <input type="text" name="txDescrip" id="txDescrip" readonly/>
    </section>

    <section class="controls-2">
        <label for="txNetCount">DUP</label>
        <input type="number" name="txNetCount" id="txNetCount" value="0" readonly/>
        <label for="txCount">TOT</label>
        <input type="number" name="txCount" id="txCount" value="0" readonly/>
    </section>
    <div class="table-wrapper">
        <table >
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
                <tr id="marker-row">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
            </tbody>
        </table>
    </div>


    <div id="quantityForm">

        <input id="quantityField" type="number" placeholder="0" readonly=""/>

        <div id="numPad">
            <ul class="numpad-row">
                <li>
                    <a id="num-7-Key" class="btn numpad-key" href="#">7</a>
                </li>
                <li>
                    <a id="num-8-Key" class="btn numpad-key" href="#">8</a>
                </li>
                <li>
                    <a id="num-9-Key" class="btn numpad-key" href="#">9</a>
                </li>
                <li>
                    <a id="delete-Key" class="btn" href="#">Del</a>
                </li>
            </ul>
            <ul class="numpad-row">
                <li>
                    <a id="num-4-Key" class="btn numpad-key" href="#">4</a>
                </li>
                <li>
                    <a id="num-5-Key" class="btn numpad-key" href="#">5</a>
                </li>
                <li>
                    <a id="num-6-Key" class="btn numpad-key" href="#">6</a>
                </li>
                <li>
                    <a id="minus-Key" class="btn" href="#">-</a>
                </li>
            </ul>
            <ul class="numpad-row">
                <li>
                    <a id="num-1-Key" class="btn numpad-key" href="#">1</a>
                </li>
                <li>
                    <a id="num-2-Key" class="btn numpad-key" href="#">2</a>
                </li>
                <li>
                    <a id="num-3-Key" class="btn numpad-key" href="#">3</a>
                </li>
                <li>
                    <a id="plus-Key" class="btn" href="#">+</a>
                </li>
            </ul>
            <ul class="numpad-row">
                <li>
                    <a id="num-0-Key" class="btn numpad-key" href="#">0</a>
                </li>
                <li>
                    <a id="clear-Key" class="btn " href="#">Clear</a>
                </li>
                <li>
                    <a id="enter-Key" class="btn" href="#">Enter</a>
                </li>

            </ul>
        </div>
        <!--        <ul id="sidePad">
                    <li>
                        <a id="minus-Key" class="btn" href="#">-</a>
                    </li>
                    <li>
                        <a id="plus-Key" class="btn" href="#">+</a>
                    </li>
                    <li>
                        <a id="enter-Key" class="btn" href="#">Enter</a>
                    </li>
                </ul>-->


    </div>


    <footer>
        <div class="powered">&copy; 2014. VFP Business Solutions, LLC</div>
    </footer>
</div>

