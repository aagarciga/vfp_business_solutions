;(function(window, document){
    'use strict';
    
    function BootstrapPager(ajaxResponse){
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
    
    BootstrapPager.prototype.getPagerControl = function (){
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
    
    BootstrapPager.prototype.getCurrentPagedItems = function (){
        return this.currentPagedItems;
    }
    
    BootstrapPager.prototype._createControl = function(text, title, page, ipp){
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
    
    BootstrapPager.prototype._createDottedControl = function(){
        var _dottedLi = document.createElement('li'),
            _dottedSpan = document.createElement('span'),
            _dottedTextNode = document.createTextNode("...");
        _dottedSpan.appendChild(_dottedTextNode);
        _dottedLi.appendChild(_dottedSpan);
        return _dottedLi;
    }
    
//    BootstrapPager.prototype._setControlClick = function (control, onClick) {
//        
//        if (onClick && typeof onClick === 'function') {
//            control.addEventListener('click', onClick);
//        }
//    }   
    
    window.BootstrapPager = BootstrapPager;
})(window, document);


