<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.daterangepicker-single').daterangepicker({singleDatePicker: true, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
    });
</script>

<script>
    (function(window, document, $) {
        $('#dashboard-panel-togle-visibility-button').on('click', function() {
            var $button = $(this),
                    $icon = $button.children('span'),
                    $panelBody = $('.panel-body');
            if ($icon.hasClass('glyphicon-eye-open')) {
                $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
                $panelBody.hide();
            }
            else {
                $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
                $panelBody.show();
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
//                load : function (viewport, page, callback) {
//                    viewport.innerHTML = '<object type="text/html" data="pages/' + page + '.html" ></object>';
//                    callback();
//                }
                fields : [
                    'ordnum',                         
                    'ponum',         
                    'company',  
                    'destino',
                    'ProStartDT',
                    'ProEndDT',
                    'sotype',
                    'inspectno',
                    'podate',
                    'qutno',
                    'Cstctid'
                ],
                fieldsDisplayNames : [
                    'Sales Order', 
                    'Purchase Order', 
                    'Company',
                    'Vessel',
                    'Start Date',
                    'End Date',
                    'Job Type',
                    'Material Status',
                    'Status',
                    'Project Manager',
                    'Create Date',
                    'Quote No',
                    'Cost Center',
                    'Has Attached Files'
                ],
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