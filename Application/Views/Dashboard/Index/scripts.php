<script src="<?php echo $View->PublicContext('scripts/Dandelion/Dandelion.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.js'); ?>"></script>
<script src="<?php echo $View->PublicContext('scripts/Dandelion/BootstrapDynamicFilter.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicContext('scripts/jstree.init.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.js'); ?>"></script>


<script>
   ;(function(window, document, App) {
        "use strict";

        // Dashboard Namespace
        var Dashboard = {};
        App.Dashboard = Dashboard;
        
        Dashboard.DynamicFilter = Dandelion.BootstrapDynamicFilter;
        Dashboard.DynamicFilter.FilterString = "";
        Dashboard.DynamicFilter.Controls = {
            resetButton: $('#filterResetButton'),
            saveButton: $('#filterSaveButton'),
            filterButton: $('#filterButton')
        };    
        Dashboard.DynamicFilter.FilterFields = $('#filterFormFields');
        
        Dashboard.DynamicFilter._DisableFilterControls = function(){
            
            Dashboard.DynamicFilter.Controls.resetButton.addClass('disabled');
            Dashboard.DynamicFilter.Controls.saveButton.addClass('disabled');            
            Dashboard.DynamicFilter.Controls.filterButton.addClass('disabled');
        };        
        Dashboard.DynamicFilter._EnableFilterControls = function(){
            
            Dashboard.DynamicFilter.Controls.resetButton.removeClass('disabled');
            Dashboard.DynamicFilter.Controls.saveButton.removeClass('disabled');            
            Dashboard.DynamicFilter.Controls.filterButton.removeClass('disabled');
        };
        Dashboard.DynamicFilter._LoadFilterCallback = function(event){ 
            
            var _filterid = event.currentTarget.dataset['filterid'];
            
            Dashboard.DynamicFilter.Controls.resetButton.click();         
            $.ajax({
                data: {
                    filterid: _filterid
                },
                url: '<?php echo $View->Href('Dashboard', 'GetSavedFilter') ?>',
                type: 'post',
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {
                    var _response = $.parseJSON(response);
                    var _values = _response.expfrom.split(",");
                    Dashboard.DynamicFilter.FilterFields.append(_response.expfields);
                    Dashboard.DynamicFilter.FilterFields.find('select, input').each(function(index){
                        $(this).val(_values[index]);
                    });
                    $('.loading').hide();
                }
            });
            Dashboard.DynamicFilter._FilterCallback();
            Dashboard.DynamicFilter.Init();
            Dashboard.DynamicFilter._EnableFilterControls();
        };
        Dashboard.DynamicFilter._FilterCallback = function(){
            var predicate = "";
            console.log("_FilterCallback Called");
            
            Dashboard.DynamicFilter.FilterFields.children().each(function() {                
                if ($(this).hasClass('btn-group')) {
                    var value = $(this).children('button').text();
                    predicate += value + " ";
                }
                else if ($(this).hasClass('form-group')) {
                    var $control = $(this).find('input, select');                    
                    if ($control.val() === "") {
                         predicate += 'EMPTY('+$control.data('fieldname')+') ';
                    }
                    else if($control.hasClass('daterangepicker-single')){
                        var range = $control.val().split(' - ');
                        predicate += "(" + $control.data('fieldname') + " >= '" + range[0] + "' ";
                        predicate += "And " + $control.data('fieldname') + " <= '" + range[1] + "') ";
                    }
                    else{
                        predicate += "LOWER(" + $control.data('fieldname') + ") LIKE '%" + $control.val().toLowerCase() + "%' ";                       
                    }
                }                
            });
            
            Dashboard.DynamicFilter.FilterString = predicate;
            //Dashboard.DynamicFilter = Dandelion.BootstrapDynamicFilter;

            var $table = $('#dashboardTable');
            var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 1, $itemsperpage, $table);
        };
        Dashboard.DynamicFilter._ResetCallback = function(){
            Dashboard.DynamicFilter.FilterFields.children().remove();
            Dashboard.DynamicFilter._DisableFilterControls();
            Dashboard.DynamicFilter._FilterCallback();
            Dashboard.DynamicFilter.Controls.filterButton.next().focus();
        };
        Dashboard.DynamicFilter.Init = function(){
            //DynamicFilter Initialization
            
            // Filter Button OnClick event handler
            Dashboard.DynamicFilter.Controls.filterButton.on('click', Dashboard.DynamicFilter._FilterCallback);
            
            /// Reset Filter Button OnClick event handler
            $('#filterResetButton').on('click', Dashboard.DynamicFilter._ResetCallback);
            
            // Save Filter Button OnClick event handler
            Dashboard.DynamicFilter.Controls.saveButton.on('click', function(){
                $('#filterSaveModal').modal();
            });
            
            // Saved Filter Item List OnCLick event handler
            $('.saved-filter-field').on('click', Dashboard.DynamicFilter._LoadFilterCallback);
            
            /// Filter Fields OnClick event handler
            $('.filter-field').on('click', function() {
                var $filterField = $(this); 
                    
                if ($('#filterFormFields').children().length > 0) {
                    $('#filterFormFields').append(Dandelion.BootstrapDynamicFilter.createModifier());
                }
                else {
                    $('#filterFormFields').append(Dandelion.BootstrapDynamicFilter.createFirstModifier());
                }
                if ($filterField.data('field-type') === "text") {
                    $('#filterFormFields').append(Dandelion.BootstrapDynamicFilter.createTextFilter($filterField.data('field'), $filterField.text(), $('#filterButton'), $('#filterResetButton'), $('#filterSaveButton')));
                }
                if ($filterField.data('field-type') === "date") {
                    $('#filterFormFields').append(Dandelion.BootstrapDynamicFilter.createDateFilter($filterField.data('field'), $filterField.text(), $('#filterButton'), $('#filterResetButton'), $('#filterSaveButton')));
                }
                if ($filterField.data('field-type') === "job-status") {
                    $('#filterFormFields').append(Dandelion.BootstrapDynamicFilter.createDropdownFilter($filterField.data('field'), $filterField.text(), Dashboard.JobStatus, $('#filterButton'), $('#filterResetButton'), $('#filterSaveButton')));
                }
                if ($filterField.data('field-type') === "material-status") {
                    $('#filterFormFields').append(Dandelion.BootstrapDynamicFilter.createDropdownFilter($filterField.data('field'), $filterField.text(), Dashboard.MaterialStatus, $('#filterButton'), $('#filterResetButton'), $('#filterSaveButton')));
                }
                
                Dashboard.DynamicFilter._EnableFilterControls();
            });
        };

        Dashboard.DynamicFilter.Init();
    })(window, document, App);
</script>

<script type="text/javascript">
    (function(window, document, $) {
        $(document).ready(function() {
            $('.daterangepicker-single').daterangepicker({singleDatePicker: false, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
            bindUpdateDropdownClick();
            
        });
    })(window, document, jQuery);
</script>

<script>
    // "filesModalDropzone" is the camelized version of the HTML element's ID
    Dropzone.options.filesModalDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        maxThumbnailFilesize: 1, // MB
        addRemoveLinks: true,
        acceptedFiles: "image/*,application/pdf,.psd",
        accept: function(file, done) {
            if (file.name === "Alex.jpg") {
                done("Hello Creator.");
            }
            else {
                done();
            }
        }
    };
</script>

<script>
    function Files_OnClick(data) {
        $('#files-modal').modal('show');
    }

    $('.btn-files-dialog').on('click', Files_OnClick);
</script>

<script>
    /// Filter Form Show/Hide control behavior
    (function(window, document, $) {
        $('#dashboard-panel-togle-visibility-button').on('click', function() {
            var $button = $(this),
                    $icon = $button.children('span'),
                    $filter = $('#filterForm');
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
    /// Filter Control Behavior
    (function(window, document, $, Dashboard) {
        
 
        
        $('#filterSaveModalSubmit').on('click', function(){
            var filterName = $('#filterSaveModalFilterName').val();
            var filterFields = $('#filterFormFields').html();
            var filterFieldsValues = "";

            $('#filterFormFields').find('select, input[type=text]').each(function(){
                filterFieldsValues += $(this).val()+",";
            });
            
            // Cleaning the string (last colom removed) ;)
            filterFieldsValues = filterFieldsValues.substring(0, filterFieldsValues.length-1);
            
            if (filterName !== "") {
                (function(window, document, jQuery, Dashboard) {
                    $.ajax({
                        data: {
                            filterName: filterName ,
                            filterString: Dashboard.DynamicFilter.FilterString,
                            filterHtml: filterFields,
                            filterValues: filterFieldsValues
                        },
                        url: '<?php echo $View->Href('Dashboard', 'SaveFilter') ?>',
                        type: 'post',
                        beforeSend: function() {
                            $('.loading').show();
                        },
                        success: function(response) {
                            var _response = $.parseJSON(response);
                            $('#savedFilterList').append('<li><a href="#" class="saved-filter-field" data-filterid="'+_response.filterid+'">'+filterName+'</a></li>');
                            $('.saved-filter-field').on('click', Dashboard.DynamicFilter._LoadFilterCallback);
                            $('#filterSaveModal').modal('hide');
                            $('.loading').hide();
                        }
                    });
                })(window, document, jQuery, App.Dashboard);
            }
            else{
                $('#filterSaveModalFilterName').parent().addClass('has-error');
                $('#filterSaveModalFilterName').popover('show');
                $('#filterSaveModalFilterName').focus();
            }
        });
  
        
    })(window, document, jQuery, App.Dashboard);

</script>

<script>
    (function(window, document, $, Dashboard) {
        function page($filter, $page, $itemsperpage, $table) {
            var params = {'filterPredicate': $filter, 'page': $page, 'itemsperpage': $itemsperpage};
            $.ajax({
                data: params,
                url: '<?php echo $View->Href('Dashboard', 'GetDashboardItemsPage') ?>',
                type: 'post',
                beforeSend: function() {
                    $('.loading').show();
                },
                success: function(response) {
                    var _response = $.parseJSON(response);
                    var pager = new BootstrapPager(_response, PagerControl_OnClick);
                    var pagerControl = pager.getPagerControl();
                    $('.pager-wrapper').html('').append(pagerControl);
                    var pagerItems = pager.getCurrentPagedItems();
                    Dashboard.updateDashboardTable($table, pagerItems);
                    $('#panelHeadingItemsCount').html(pager.itemsCount);
                    $('.loading').hide();
                }
            });
        }

        Dashboard.Page = page;

        $('.pager-btn').on("click", PagerControl_OnClick);

        // Pager Control Buttons On Click Handler
        function PagerControl_OnClick() {
            var $table = $('#dashboardTable');
            var $currentButton = $(this);
            var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
            Dashboard.Page(Dashboard.DynamicFilter.FilterString, $currentButton.data('page'), $itemsperpage, $table);
        }

        $('.top-pager-itemmperpage-control a').on('click', function() {
            // Update Control Selected Value
            $('.top-pager-itemmperpage-control button span.value').text($(this).text());
            // Always show page one
            var $table = $('#dashboardTable');
            var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 1, $itemsperpage, $table); // 
        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        $.ajax({
            data: {},
            url: '<?php echo $View->Href('Dashboard', 'GetMaterialStatusItems') ?>',
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var _response = $.parseJSON(response);
                Dashboard.MaterialStatus = _response;
                $('.loading').hide();
            }
        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        $.ajax({
            data: {},
            url: '<?php echo $View->Href('Dashboard', 'GetJobStatusItems') ?>',
            type: 'post',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(response) {
                var _response = $.parseJSON(response);
                Dashboard.JobStatus = _response;
                $('.loading').hide();
            }
        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    function bindUpdateDropdownClick() {
        $('.update-dropdown').on('change', function() {
            var $dropdown = $(this),
                    params = {'ordnum': $dropdown.data('ordnum'), 'mtrlstatus': $dropdown.val(), 'jobstatus': $dropdown.val()};
            if ($dropdown.hasClass('material-status')) {
                $.ajax({
                    data: params,
                    url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADMaterialStatus') ?>',
                    type: 'post',
                    beforeSend: function() {
                        $('.loading').show();
                    },
                    success: function(response) {
                        var _response = $.parseJSON(response);
                        if (_response === 'success') {
                            console.log(_response);
                            //console.log($dropdown);
                        } else {
                            console.log(_response);
                        }
                        $('.loading').hide();
                    }
                });
            }
            if ($dropdown.hasClass('job-status')) {
                $.ajax({
                    data: params,
                    url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADJobStatus') ?>',
                    type: 'post',
                    beforeSend: function() {
                        $('.loading').show();
                    },
                    success: function(response) {
                        var _response = $.parseJSON(response);
                        if (_response === 'success') {
                            console.log(_response);
                        } else {
                            console.log(_response);
                        }
                        $('.loading').hide();
                    }
                });
            }
        });
    }



</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        
        Dashboard.updateDashboardTable = function($table, $data) {
            var $tableBody = $table.children('tbody');
            $tableBody.html('');
            for (index in $data) {
                $tableBody.append(Dashboard.buildDashboardItemTableRow($data[index], '', "item-field"));
            }
            bindUpdateDropdownClick();
        };

        Dashboard.buildDashboardItemTableRow = function($dataRow, trClass, tdClass) {
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
                    _tdProjectManager1 = document.createElement('td'),
                    _tdProjectManager2 = document.createElement('td'),
                    _tdPodate = document.createElement('td'),
                    _tdQutno = document.createElement('td'),
                    _tdCstctid = document.createElement('td'),
                    _tdAttachedFiles = document.createElement('td'),
                    _aAttachedFiles = document.createElement('a'),
                    _spanGlyphIcon = document.createElement('span');


            with (_tdOrdnum) {
                _aOrdnum.href = "#";
                _aOrdnum.appendChild(document.createTextNode($dataRow.ordnum));
                className = tdClass;
                appendChild(_aOrdnum);
            }

            with (_tdPonum) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ponum));
            }

            with (_tdCompany) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.company));
            }

            with (_tdDestino) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.destino));
            }

            with (_tdProStartDT) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProStartDT));
            }

            with (_tdProEndDT) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProEndDT));
            }

            with (_tdSotypecode) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.sotypecode));
            }

            with (_tdDescription) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.JobDescrip));
            }

            with (_tdMaterialStatus) {
                className = tdClass;
                //appendChild(document.createTextNode($dataRow.mtrlstatus));
                var _materialStatusControl = Dashboard.buildStatusControl($dataRow.mtrlstatus, Dashboard.MaterialStatus);
                _materialStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _materialStatusControl.className += ' material-status';
                appendChild(_materialStatusControl);
            }

            with (_tdStatus) {
                className = tdClass;
                var _jobStatusControl = Dashboard.buildStatusControl($dataRow.jobstatus, Dashboard.JobStatus);
                _jobStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _jobStatusControl.className += ' job-status';
                appendChild(_jobStatusControl);
            }

            with (_tdProjectManager1) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.projectManager1));
            }

            with (_tdProjectManager2) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.projectManager2));
            }

            with (_tdPodate) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.podate));
            }

            with (_tdQutno) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.qutno));
            }

            with (_tdCstctid) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.Cstctid));
            }

            with (_tdAttachedFiles) {
                className = "item-action item-files";
                _spanGlyphIcon.className = "glyphicon glyphicon-folder-close";
                _aAttachedFiles.href = "#";
                _aAttachedFiles.className = "btn-files-dialog";
                _aAttachedFiles.addEventListener('click', Files_OnClick);
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
                appendChild(_tdProjectManager1);
                appendChild(_tdProjectManager2);
                appendChild(_tdPodate);
                appendChild(_tdQutno);
                appendChild(_tdCstctid);
                appendChild(_tdAttachedFiles);
            }
            return _result;
        }
        ;

        Dashboard.buildStatusControl = function(current, values) {
            var _select = document.createElement('select');
            var _optionEmpty = document.createElement('option');
                _optionEmpty.appendChild(document.createTextNode("Empty"));
                _select.appendChild(_optionEmpty);
            for (index in values) {
                var _option = document.createElement('option');
                _option.value = values[index]['edistatid'];
                _option.appendChild(document.createTextNode(values[index]['descrip']));
                if (current === values[index]['edistatid']) {
                    _option.selected = "selected";
                }
                _select.appendChild(_option);
            }
            _select.className = 'form-control update-dropdown';
            return _select;
        }
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>