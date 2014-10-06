<script>
    $('#btnTicketNo').on('click', function(){
        $('#tickets-modal').modal('show');
    }); 
</script>

<script>
    function page($page, $table){
        var params = {"page" : $page};
        $.ajax({
            data: params,
            url: '<?php echo $View->Href("PickTicket", "GetTicketPage") ?>',
            type: 'post',
            beforeSend: function(){
                $('.loading').show();
            },
            success: function (response){
                var _response = $.parseJSON(response); 
               
                
                var pager = new Pager(_response);
                
                // TODO: render page control
                var pagerControl = pager.getPagerControl(); 
                $(".pager-wrapper").html("").append(pagerControl);
                
                // TODO Pendient big refactoring......
                $('.pager-btn').on("click", function(){
                    var $table = $('#tickets');
                    var $currentButton = $(this);
                    page($currentButton.data('page'), $table);
                });
                
                var pagerItems = pager.getCurrentPagedItems();
                updateTicketsTable($table, pagerItems);  
                                
                $('.loading').hide();
            }            
        });
    }
</script>

<script>
    $('.pager-btn').on("click", function(){
        var $table = $('#tickets');
        var $currentButton = $(this);
        page($currentButton.data('page'), $table);
    });
</script>



<script>
    function updateTicketsTable($table, $data){
        var $tableBody = $table.children('tbody');
        $tableBody.html('');
        for(index in $data){  
            $tableBody.append(buildTicketsTableRow($data[index], "", "item-field"));
        }
    }
    
    function buildTicketsTableRow($dataRow, trClass, tdClass){
        var result = document.createElement('tr'),
            tdShprelno = document.createElement('td'),
            tdQtypick = document.createElement('td'),
            tdQtypack = document.createElement('td'),
            tdCompany = document.createElement('td');
    
            with (tdShprelno){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.shprelno));
            }
            
            with (tdQtypick){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.qtypick));
            }
            
            with (tdQtypack){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.qtypack));
            }
            
            with (tdCompany){
                className = tdClass;
                appendChild(document.createTextNode($dataRow.company));
            }
            
            with (result) {
                className = trClass;
                appendChild(tdShprelno);
                appendChild(tdQtypick);
                appendChild(tdQtypack);
                appendChild(tdCompany);
            }
            return result;
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
