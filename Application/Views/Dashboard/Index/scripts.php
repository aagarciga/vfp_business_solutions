<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.js'); ?>"></script>
<script src="<?php echo $View->PublicContext('scripts/Dandelion/Dandelion.js'); ?>"></script>
<script src="<?php echo $View->PublicContext('scripts/Dandelion/BootstrapDynamicFilter.js'); ?>"></script>

<script type="text/javascript">
    (function(window, document, $) {
        $(document).ready(function() {
            $('.daterangepicker-single').daterangepicker({singleDatePicker: true, format: 'MM/DD/YYYY', startDate: moment(), endDate: moment()});
            bindUpdateDropdownClick();
        });
    })(window, document, jQuery);
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
    (function(window, document, $) {
        $('.filter-field').on('click', function(){
            var $filterField = $(this),
                _filterField = $filterField[0],
                $filterButton = $('.filter-button');            
            if(_filterField.parentElement.parentElement.parentElement.previousSibling.previousSibling !== null){
                $filterButton.before(Dandelion.BootstrapDynamicFilter.createModifier());
            }
            else{
                $filterButton.before(Dandelion.BootstrapDynamicFilter.createFirstModifier());
            }
            if ($filterField.data('field-type') === "text") {
                $filterButton.before(Dandelion.BootstrapDynamicFilter.createTextFilter($filterField.data('field'), $filterField.text()));
            }
            if ($filterField.data('field-type') === "date") {
                $filterButton.before(Dandelion.BootstrapDynamicFilter.createDateFilter($filterField.data('field'), $filterField.text()));
            }
        });
    })(window, document, jQuery);
</script>

<script>
    (function(window, document, $) {
        function page($page, $itemsperpage, $table){
            var params = {'page' : $page, 'itemsperpage' : $itemsperpage};
            $.ajax({
                data: params,
                url: '<?php echo $View->Href('Dashboard', 'GetDashboardItemsPage') ?>',
                type: 'post',
                beforeSend: function(){
                    $('.loading').show();
                },
                success: function (response){
                    var _response = $.parseJSON(response);
                    var pager = new BootstrapPager(_response);
                    var pagerControl = pager.getPagerControl(); 
                    $('.pager-wrapper').html('').append(pagerControl);

                    // TODO Pendient big refactoring......
                    $('.pager-btn').on('click', function(){
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
        
        $('.pager-btn').on("click", function(){
            var $table = $('#dashboardTable');
            var $currentButton = $(this);
            var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
            page($currentButton.data('page'), $itemsperpage, $table);
        });
        
        $('.top-pager-itemmperpage-control a').on('click', function(){
            // Update Control Selected Value
            $('.top-pager-itemmperpage-control button span.value').text($(this).text());
            // Always show page one
            var $table = $('#dashboardTable');
            var $itemsperpage = $('.top-pager-itemmperpage-control button span.value').text();
            page(1, $itemsperpage, $table); // 
        });
    })(window, document, jQuery);
</script>

<script>
    $.ajax({
        data: {},
        url: '<?php echo $View->Href('Dashboard', 'GetMaterialStatusItems') ?>',
        type: 'post',
        beforeSend: function(){
            $('.loading').show();
        },
        success: function (response){
            var _response = $.parseJSON(response);
            window.MaterialStatus = _response;
            $('.loading').hide();
        }            
    });
</script>

<script>
    $.ajax({
        data: {},
        url: '<?php echo $View->Href('Dashboard', 'GetJobStatusItems') ?>',
        type: 'post',
        beforeSend: function(){
            $('.loading').show();
        },
        success: function (response){
            var _response = $.parseJSON(response);
            window.JobStatus = _response;
            $('.loading').hide();
        }            
    });
</script>

<script>
    function bindUpdateDropdownClick(){
    $('.update-dropdown').on('change', function(){        
        var $dropdown = $(this),
            params = {'ordnum' : $dropdown.data('ordnum'), 'mtrlstatus' : $dropdown.val(), 'jobstatus' : $dropdown.val()};
        if ($dropdown.hasClass('material-status')) {
            $.ajax({
                data: params,
                url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADMaterialStatus') ?>',
                type: 'post',
                beforeSend: function(){
                    $('.loading').show();
                },
                success: function (response){
                    var _response = $.parseJSON(response);
                    if (_response === 'success') {
                        console.log(_response);                        
                    }else {
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
                beforeSend: function(){
                    $('.loading').show();
                },
                success: function (response){
                    var _response = $.parseJSON(response);
                    if (_response === 'success') {
                        console.log(_response);
                    }else {
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
    function updateDashboardTable($table, $data){
        var $tableBody = $table.children('tbody');
        $tableBody.html('');
        for(index in $data){  
            $tableBody.append(buildDashboardItemTableRow($data[index], '', "item-field"));
        }
        bindUpdateDropdownClick();
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
                //appendChild(document.createTextNode($dataRow.mtrlstatus));
                var _materialStatusControl = buildStatusControl($dataRow.mtrlstatus, window.MaterialStatus);
                _materialStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _materialStatusControl.className += ' material-status';
                appendChild(_materialStatusControl);
            }
            
            with (_tdStatus){
                className = tdClass;                
                //appendChild(document.createTextNode($dataRow.jobstatus));
                //appendChild(buildStatusControl($dataRow.jobstatus, window.JobStatus));
                
                var _jobStatusControl = buildStatusControl($dataRow.jobstatus, window.JobStatus);
                _jobStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _jobStatusControl.className += ' job-status';
                appendChild(_jobStatusControl);
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
        
        function buildStatusControl(current, values){
            var _select = document.createElement('select');

            for(index in values){  
                var _option = document.createElement('option');
                _option.value = values[index]['edistatid'];
                _option.appendChild(document.createTextNode(values[index]['descrip']));
                if (current === values[index]['edistatid'] ) {
                    _option.selected = "selected";
                }
                _select.appendChild(_option);
            }
            _select.className = 'form-control update-dropdown';
            return _select;
        }
</script>

<script>
    <?php echo $Pager->GetJavascriptPager(); ?>
</script>