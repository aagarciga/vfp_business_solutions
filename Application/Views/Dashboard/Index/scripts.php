<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.daterangepicker-single').daterangepicker({singleDatePicker: true, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
        
    });
</script>

<script>
    $('.top-pager-itemmperpage-control a').on('click', function(){
        // Update Control Selected Value
        $('.top-pager-itemmperpage-control button span.value').text($(this).text());
        // Always show page one
        var $table = $('#dashboardTable');
        var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
        page(1, $itemsperpage, $table); // 
    });
</script>

<script>
    (function(window, document, $) {
        $('#dashboard-panel-togle-visibility-button').on('click', function() {
            var $button = $(this),
                    $icon = $button.children('span'),
                    $filter = $('.panel-body form');
            if ($icon.hasClass('glyphicon-eye-open')) {
                $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
                $filter.hide();
            }
            else {
                $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
                $filter.show();
            }
        });
    })(window, document, jQuery);
</script>

<script>
    (function (window, document, undefined) {
        "use strict";

        // Dandelion Namespace
        var Dandelion = {};
        window.Dandelion = Dandelion;

        (function () {

            Dandelion.DynamicFilter = {
                createTextFilter : function(fieldName, fieldDisplayName){
                    var _formGroup = document.createElement('div'),
                        _label = document.createElement('label'),
                        _inputGroup = document.createElement('div'),
                        _input = document.createElement('input'),
                        _span = document.createElement('span'),
                        _button = document.createElement('button');
                
                    _formGroup.className = "form-group";
                    _formGroup.title = fieldDisplayName; 
                    _label.className = "sr-only";
                    _label.for = fieldName;
                    _label.appendChild(document.createTextNode(fieldDisplayName));
                    _formGroup.appendChild(_label);
                    _inputGroup.className = "input-group";
                    _input.type = "text";
                    _input.className = "form-control";
                    _input.dataset['fieldname'] = fieldName;
                    //_input.name = fieldName;
                    _input.placeholder = fieldDisplayName;
                    _inputGroup.appendChild(_input);
                    _span.className = "input-group-btn";
                    _button.className = "btn btn-default glyphicon-action-button glyphicon-minus";
                    _button.title = "Delete Filter Field"
                    _button.type = "button";
                    _button.addEventListener('click', function(){
                        // Remove from its parent by default
                        if ( _formGroup.parentNode ) {
                            // Remove Previous Sibling  from its parent if any
                            if (_formGroup.previousSibling) {
                                 _formGroup.parentNode.removeChild(_formGroup.previousSibling);
                            }                           
                            _formGroup.parentNode.removeChild( _formGroup);
                            
                        }
                        // release memory in IE
                        _formGroup = null;
                    });
                    _span.appendChild(_button);
                    _inputGroup.appendChild(_span);
                    _formGroup.appendChild(_inputGroup);
                    
                    return _formGroup;
                        
                    
//                    <div class="form-group">
//                      <label class="sr-only" for="txSonumber">Sell Order</label>
//                      <div class="input-group">
//                          <input type="text" class="form-control" id="txSonumber" placeholder="Sell Order">
//                          <span class="input-group-btn">
//                              <button class="btn btn-default glyphicon-action-button glyphicon-minus" type="button"></button>
//                          </span>
//                      </div><!-- /input-group -->
//                    </div><!-- /form-group -->
                },
                createDateFilter : function(fieldName, fieldDisplayName){
                    var _formGroup = document.createElement('div'),
                        _label = document.createElement('label'),
                        _inputGroup = document.createElement('div'),
                        _spanInputGroupAddOn = document.createElement('span'),
                        _iGlyphCalendar  = document.createElement('i'),
                        _input = document.createElement('input'),
                        _spanInputGroupButton = document.createElement('span'),
                        _button = document.createElement('button');
                    
                    _formGroup.className = "form-group";
                    _label.className = "sr-only";
                    _label.for = fieldName;
                    _label.appendChild(document.createTextNode(fieldDisplayName));
                    _formGroup.appendChild(_label);
                    
                    _inputGroup.className = "input-prepend input-group";
                    _inputGroup.title = fieldDisplayName;               
                    _spanInputGroupAddOn.className = "add-on input-group-addon";
                    
                    _iGlyphCalendar.className = "glyphicon glyphicon-calendar fa fa-calendar";  
                    _spanInputGroupAddOn.appendChild(_iGlyphCalendar);
                    _input.type = "text";
                    _input.className = "form-control daterangepicker-single";
                    _input.dataset['fieldname'] = fieldName;
                    //_input.name = fieldName;
                    _input.placeholder = fieldDisplayName;
                    
                    _inputGroup.appendChild(_spanInputGroupAddOn);
                    _inputGroup.appendChild(_input);
                    
                    _spanInputGroupButton.className = "input-group-btn";
                    
                    _button.type = "button";
                    _button.className = "btn btn-default glyphicon-action-button glyphicon-minus";
                    _button.addEventListener('click', function(){
                        // Remove from its parent by default
                        if ( _formGroup.parentNode ) {
                            // Remove Previous Sibling from its parent if any
                            if (_formGroup.previousSibling) {
                                 _formGroup.parentNode.removeChild(_formGroup.previousSibling);
                            }                           
                            _formGroup.parentNode.removeChild( _formGroup);
                            
                        }
                        // release memory in IE
                        _formGroup = null;
                    });
                    _spanInputGroupButton.appendChild(_button);  
                    _inputGroup.appendChild(_spanInputGroupButton);
                    _formGroup.appendChild(_inputGroup);
                    
                    // Initializing datepicker jQuery Object
                    $(_input).daterangepicker({singleDatePicker: true, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
                
                    return _formGroup;
                    
                    
//                <div class="form-group">
//                    <label class="sr-only" for="txEnddate">End Date</label>
//                    <div class="input-prepend input-group" title="End Date">
//                        <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" name="txEnddate" id="txStartdate" class="form-control daterangepicker-single" placeholder="End Date"/>
//                        <span class="input-group-btn">
//                            <button class="btn btn-default glyphicon-action-button glyphicon-minus" type="button"></button>
//                        </span>
//                    </div>
//                </div> 

                },
                createFirstModifier : function(){
                    var _buttonGroup = document.createElement('div'),
                        _button = document.createElement('button'),
                        _buttonDropdownTogle = document.createElement('button'),
                        _spanCaret = document.createElement('span'),
                        _ul = document.createElement('ul'),
                        _liEmpty = document.createElement('li'),
                        _aEmpty = document.createElement('a'),
                        _liNot = document.createElement('li'),
                        _aNot = document.createElement('a');

                    _buttonGroup.className = "btn-group ";
                    _button.type = "button";
                    _button.className = "btn btn-default btn-filter-modifier";
                    _button.appendChild(document.createTextNode(""));
                    _buttonGroup.appendChild(_button);
                    _buttonDropdownTogle.type = "button";
                    _buttonDropdownTogle.className = "btn btn-default dropdown-toggle";
                    _buttonDropdownTogle.dataset['toggle'] = "dropdown";
                    _spanCaret.className = "caret";
                    _buttonDropdownTogle.appendChild(_spanCaret);
                    _buttonGroup.appendChild(_buttonDropdownTogle);
                    _ul.className = "dropdown-menu";
                    _ul.role = "menu";
                    _aEmpty.href = "#";
                    _aEmpty.style.display = "inline-block";
                    _aEmpty.style.height = "26px";
                    _aEmpty.style.width = "100%";
                    _aEmpty.appendChild(document.createTextNode("Clear Not"));
                    _liEmpty.appendChild(_aEmpty);
                    _liEmpty.className = "current";
                    _ul.appendChild(_liEmpty);
                    _aNot.href = "#";
                    _aNot.appendChild(document.createTextNode("Not"));
                    _liNot.appendChild(_aNot);
                    _ul.appendChild(_liNot);
                    _buttonGroup.appendChild(_ul);
                    
                    var _modifiers = [];
                    _modifiers.push(_liEmpty);
                    _modifiers.push(_liNot);

                    for (var i in _modifiers) {                        
                        var _currentModifier = _modifiers[i];                         
                        (function(_currentModifier){
                            _currentModifier.addEventListener("click", function(event){
                                // Change Current Modifier Text
                                if (_currentModifier.firstChild.textContent === "Clear Not") {
                                    _button.textContent = "";
                                }else{
                                    _button.textContent = _currentModifier.firstChild.textContent;
                                }
                                
                                // Update Current Modifier
                                var _lastCurrent = _currentModifier.parentElement.querySelector("li.current");
                                _lastCurrent.className = "";
                                _currentModifier.className = "current";
                            });
                        })(_currentModifier);
                        
                    }
                    
                    return _buttonGroup;
//                <!-- Split button -->
//                <div class="btn-group">
//                  <button type="button" class="btn btn-default">And</button>
//                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
//                    <span class="caret"></span>
//                  </button>
//                  <ul class="dropdown-menu" role="menu">
//                    <li><a href="#">And Not</a></li>
//                    <li class="divider"></li>
//                    <li><a href="#">Or</a></li>
//                    <li><a href="#">Or Not</a></li>
//                    <li class="divider"></li>
//                    <li><a href="#">Not</a></li>                    
//                  </ul>
//                </div>
                },
                
                createModifier : function(){                    
                    var _buttonGroup = document.createElement('div'),
                        _button = document.createElement('button'),
                        _buttonDropdownTogle = document.createElement('button'),
                        _spanCaret = document.createElement('span'),
                        _ul = document.createElement('ul'),
                        _liAnd = document.createElement('li'),
                        _aAnd = document.createElement('a'),
                        _liAndNot = document.createElement('li'),
                        _aAndNot = document.createElement('a'),
                        _liDivider1 = document.createElement('li'),
                        _liOr = document.createElement('li'),
                        _aOr = document.createElement('a'),
                        _liOrNot = document.createElement('li'),
                        _aOrNot = document.createElement('a');
                        //_liDivider2 = document.createElement('li'),
                        //_liNot = document.createElement('li'),
                        //_aNot = document.createElement('a');
                
                    _buttonGroup.className = "btn-group ";
                    _button.type = "button";
                    _button.className = "btn btn-default btn-filter-modifier";
                    _button.appendChild(document.createTextNode("And"));
                    _buttonGroup.appendChild(_button);
                    _buttonDropdownTogle.type = "button";
                    _buttonDropdownTogle.className = "btn btn-default dropdown-toggle";
                    _buttonDropdownTogle.dataset['toggle'] = "dropdown";
                    _spanCaret.className = "caret";
                    _buttonDropdownTogle.appendChild(_spanCaret);
                    _buttonGroup.appendChild(_buttonDropdownTogle);
                    _ul.className = "dropdown-menu";
                    _ul.role = "menu";
                    _aAnd.href = "#";
                    _aAnd.appendChild(document.createTextNode("And"));
                    _liAnd.appendChild(_aAnd);
                    _liAnd.className = "current";
                    _ul.appendChild(_liAnd);
                    _aAndNot.href = "#";
                    _aAndNot.appendChild(document.createTextNode("And Not"));
                    _liAndNot.appendChild(_aAndNot);
                    _ul.appendChild(_liAndNot);
                    _liDivider1.className = "divider";
                    _ul.appendChild(_liDivider1);
                    _aOr.href = "#";
                    _aOr.appendChild(document.createTextNode("Or"));
                    _liOr.appendChild(_aOr);
                    _ul.appendChild(_liOr);
                    _aOrNot.href = "#";
                    _aOrNot.appendChild(document.createTextNode("Or Not"));
                    _liOrNot.appendChild(_aOrNot);
                    _ul.appendChild(_liOrNot);
                    //_liDivider2.className = "divider";
                    //_ul.appendChild(_liDivider2);
//                    _aNot.href = "#";
                    //_aNot.appendChild(document.createTextNode("Not"));
                    //_liNot.appendChild(_aNot);
                    //_ul.appendChild(_liNot);
                    _buttonGroup.appendChild(_ul);  
                    
                    var _modifiers = [];
                    _modifiers.push(_liAnd);
                    _modifiers.push(_liAndNot);
                    _modifiers.push(_liOr);
                    _modifiers.push(_liOrNot);
                    //_modifiers.push(_liNot);

                    for (var i in _modifiers) {                        
                        var _currentModifier = _modifiers[i];                         
                        (function(_currentModifier){
                            _currentModifier.addEventListener("click", function(event){
                                // Change Current Modifier Text
                                _button.textContent =  _currentModifier.firstChild.textContent;
                                // Update Current Modifier
                                var _lastCurrent = _currentModifier.parentElement.querySelector("li.current");
                                _lastCurrent.className = "";
                                _currentModifier.className = "current";
                            });
                        })(_currentModifier);
                        
                    }
                    
                    return _buttonGroup;
//                <!-- Split button -->
//                <div class="btn-group">
//                  <button type="button" class="btn btn-default">And</button>
//                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
//                    <span class="caret"></span>
//                  </button>
//                  <ul class="dropdown-menu" role="menu">
//                    <li><a href="#">And Not</a></li>
//                    <li class="divider"></li>
//                    <li><a href="#">Or</a></li>
//                    <li><a href="#">Or Not</a></li>
//                    <li class="divider"></li>
//                    <li><a href="#">Not</a></li>                    
//                  </ul>
//                </div>
                }
                
             
                
            }

        })(Dandelion);


    })(window, document, undefined);
</script>

<script>
    $('.filter-field').on('click', function(){
        var $filterField = $(this),
            _filterField = $filterField[0],
            $filterButton = $('.filter-button');            
        if(_filterField.parentElement.parentElement.parentElement.previousSibling.previousSibling !== null){
            $filterButton.before(Dandelion.DynamicFilter.createModifier());
        }
        else{
            $filterButton.before(Dandelion.DynamicFilter.createFirstModifier());
        }
        
        if ($filterField.data('field-type') === "text") {
            $filterButton.before(Dandelion.DynamicFilter.createTextFilter($filterField.data('field'), $filterField.text()));
        }
        
        if ($filterField.data('field-type') === "date") {
            $filterButton.before(Dandelion.DynamicFilter.createDateFilter($filterField.data('field'), $filterField.text()));
        }
      
    });
</script>


<script>
    function page($page, $itemsperpage, $table){
        var params = {"page" : $page, "itemsperpage" : $itemsperpage};
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("Dashboard", "GetDashboardItemsPage") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
               
                
                var pager = new Pager(_response);
                
                var pagerControl = pager.getPagerControl(); 
                $(".pager-wrapper").html("").append(pagerControl);
                
                // TODO Pendient big refactoring......
                $('.pager-btn').on("click", function(){
                    var $table = $('#dashboardTable');
                    var $currentButton = $(this);
                    var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
                    page($currentButton.data('page'), $itemsperpage, $table);
                });
                
                var pagerItems = pager.getCurrentPagedItems();
                updateDashboardTable($table, pagerItems);  
                                
                $('.loading').hide();
            }            
        });
    }
</script>

<script>
    $('.pager-btn').on("click", function(){
        var $table = $('#dashboardTable');
        var $currentButton = $(this);
        var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
        page($currentButton.data('page'), $itemsperpage, $table);
    });
</script>



<script>
    function updateDashboardTable($table, $data){
        var $tableBody = $table.children('tbody');
        $tableBody.html('');
        for(index in $data){  
            $tableBody.append(buildDashboardItemTableRow($data[index], "", "item-field"));
        }
    }
    
    function buildDashboardItemTableRow($dataRow, trClass, tdClass){
        var _result = document.createElement('tr'),
            _tdOrdnum = document.createElement('td'),
            _aOrdnum = document.createElement('a'),
            _tdPonum = document.createElement('td'),
            _tdCompany = document.createElement('td'),            
            _tdDestino = document.createElement('td'),
            _tdProStartDT = document.createElement('td'),
            _tdProEndDT = document.createElement('td'),
            _tdSotypecode = document.createElement('td'),
            _tdDescription = document.createElement('td'),
            _tdMaterialStatus = document.createElement('td'),
            _tdStatus = document.createElement('td'),
            _tdProjectManager = document.createElement('td'),
            _tdPodate = document.createElement('td'),
            _tdQutno = document.createElement('td'), 
            _tdCstctid = document.createElement('td'),
            _tdAttachedFiles = document.createElement('td'),
            _aAttachedFiles = document.createElement('a'),
            _spanGlyphIcon = document.createElement('span');
    
    
            with (_tdOrdnum){
                _aOrdnum.href = "#";
                _aOrdnum.appendChild(document.createTextNode($dataRow.ordnum));
                className = tdClass;
                appendChild(_aOrdnum);
            }
            
            with (_tdPonum){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ponum));
            }
            
            with (_tdCompany){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.company));
            }           
            
            with (_tdDestino){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.destino));
            }
            
            with (_tdProStartDT){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProStartDT));
            }
            
            with (_tdProEndDT){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProEndDT));
            }
            
            with (_tdSotypecode){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.sotypecode));
            }
            
            with (_tdMaterialStatus){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.mtrlstatus));
            }
            
            with (_tdStatus){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.jobstatus));
            }
            
            with (_tdProjectManager){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.inspectno));
            }
            
            with (_tdPodate){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.podate));
            }
            
            with (_tdQutno){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.qutno));
            }
            
            with (_tdCstctid){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.Cstctid));
            }
            
            with (_tdAttachedFiles){
                _spanGlyphIcon.className = "glyphicon glyphicon-folder-close";
                _aAttachedFiles.href = "#";
                _aAttachedFiles.appendChild(_spanGlyphIcon);
                appendChild(_aAttachedFiles);
            }
                        
            with (_result) {
                className = trClass;
                appendChild(_tdOrdnum);
                appendChild(_tdPonum);
                appendChild(_tdCompany);                
                appendChild(_tdDestino);
                appendChild(_tdProStartDT);
                appendChild(_tdProEndDT);
                appendChild(_tdSotypecode);
                appendChild(_tdDescription); 
                appendChild(_tdMaterialStatus); 
                appendChild(_tdStatus);  
                appendChild(_tdProjectManager); 
                appendChild(_tdPodate); 
                appendChild(_tdQutno);  
                appendChild(_tdCstctid);
                appendChild(_tdAttachedFiles);
            }
            return _result;
        };
</script>

<script>
;(function(window, document){
    'use strict';
    
    function Pager(ajaxResponse){
        this.currentPage = parseInt(ajaxResponse.currentPage);
        this.itemsCount = parseInt(ajaxResponse.itemsCount);        
        this.pagesCount = parseInt(ajaxResponse.pagesCount);
        this.itemsPerPage = parseInt(ajaxResponse.itemsPerPage);        
        this.showPagerControlsIfMoreThan = parseInt(ajaxResponse.showPagerControlsIfMoreThan);
        
        this.showExtendedNavigation = this.pagesCount > this.showPagerControlsIfMoreThan;
        
        if (this.showExtendedNavigation) {
            this.startRange = parseInt(ajaxResponse.startRange);
            this.middleRange = parseInt(ajaxResponse.middleRange);
            this.endRange = parseInt(ajaxResponse.endRange);
            this.range = ajaxResponse.range;
        }
        
        this.currentPagedItems = ajaxResponse.currentPagedItems;
        
        this.pagerControl = document.createElement('ul');
        this.pagerControl.className = 'pagination';
        
    }
    
    Pager.prototype.getPagerControl = function (){
        // Don't show pager control if only one page
        if (this.pagesCount <= 1) {
            return "";
        }
        
        if (this.showExtendedNavigation) {
            
            var _previousLi = this._createControl("«", "Previous", this.currentPage - 1, this.itemsPerPage);
            
            if (!(this.currentPage !== 1 && this.itemsCount >= 10)) {
                _previousLi.className = "disabled";
            }
            
            this.pagerControl.appendChild(_previousLi);
            
            for (var i = 1; i <= this.pagesCount; i++) {
                
                // Append First Dotted Control                
                var _firstRangeValue = parseInt(this.range[0]);
                if (_firstRangeValue > 2 && i === _firstRangeValue) {
                    var _firstDottedLi = this._createDottedControl();
                    this.pagerControl.appendChild(_firstDottedLi);
                }
                
                // Loop through all pages. if first, last, or in range, display
                var _isInRange =  this.range.indexOf(i) === -1 ? false : true;
                if (i === 1 || i === this.pagesCount || _isInRange) {
                    
                    var _currentTitle = "Go to page "+i+" of "+this.pagesCount,
                        _currentLi = this._createControl(i, _currentTitle, i, this.itemsPerPage);
            
                    if (i === this.currentPage) {
                        _currentLi.className = "active";
                        var _activeSpanTextNode = document.createTextNode("(current)"),
                            _activeSpan = document.createElement('span');
                        _activeSpan.appendChild(_activeSpanTextNode);
                        _activeSpan.className = "sr-only";
                        _currentLi.childNodes[0].appendChild(_activeSpan);
                    }
                    this.pagerControl.appendChild(_currentLi);
                }
                
                // Append Last Dotted Control
                var _lastRangeValue = parseInt(this.range[this.middleRange - 1]);
                if (_lastRangeValue < this.pagesCount - 1 && i === _lastRangeValue) {
                    var _lastDottedLi = this._createDottedControl();
                    this.pagerControl.appendChild(_lastDottedLi);
                }
            }
            
            var _nextLi = this._createControl("»", "Next", this.currentPage + 1, this.itemsPerPage);
            if (!(this.currentPage !== this.pagesCount && this.itemsCount >= 10)) {
                _nextLi.className = "disabled";
            }

            this.pagerControl.appendChild(_nextLi);
        }
        else{
            // without next and previus links
            
            for (var i = 1; i <= this.pagesCount; i++) {
                var _currentTitle = "Go to page "+i+" of "+this.pagesCount,
                    _currentLi = this._createControl(i, _currentTitle, i, this.itemsPerPage);
                if (i === this.currentPage) {
                    _currentLi.className = "active";
                    var _activeSpanTextNode = document.createTextNode("(current)"),
                        _activeSpan = document.createElement('span');
                        _activeSpan.appendChild(_activeSpanTextNode);
                        _activeSpan.className = "sr-only";
                        _currentLi.childNodes[0].appendChild(_activeSpan);
                }
                
                this.pagerControl.appendChild(_currentLi);
            }
        }
        return this.pagerControl;
    }
    
    Pager.prototype.getCurrentPagedItems = function (){
        return this.currentPagedItems;
    }
    
    Pager.prototype._createControl = function(text, title, page, ipp){
            var _li = document.createElement('li'),
                _a = document.createElement('a'),
                _textNode = document.createTextNode(text);
        
            _a.className = "pager-btn";
            _a.href = "#";
            _a.title = title;
            _a.dataset['page'] = page;
            _a.dataset['ipp'] = ipp;
            _a.appendChild(_textNode);          
        
            _li.appendChild(_a);
            return _li;
    }
    
    Pager.prototype._createDottedControl = function(){
        var _dottedLi = document.createElement('li'),
            _dottedSpan = document.createElement('span'),
            _dottedTextNode = document.createTextNode("...");
        _dottedSpan.appendChild(_dottedTextNode);
        _dottedLi.appendChild(_dottedSpan);
        return _dottedLi;
    }
    
    Pager.prototype._setControlClick = function (control, onClick) {
        
        if (onClick && typeof onClick === 'function') {
            control.addEventListener('click', onClick);
        }
    }   
    
    window.Pager = Pager;
})(window, document);

</script>