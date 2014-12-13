;(function(window, document, undefined){
    "use strict";

    // Dandelion Namespace
    var Dandelion = {};
    window.Dandelion = Dandelion;
    
})(window, document, undefined);

(function(Dandelion){
    "use strict";
    Dandelion.Redirect = function(controller, action, data, type){    
        var _form = document.createElement('form'),
            _formAction = 'index.php?';
        
        if (controller === undefined) {
            throw new Error("Controller is required");
        }  
        _formAction += 'controller=' + controller;
        
        if (action === undefined) {
            action = "index";
        }        
        
        _formAction += '&action=' + action;
        
        _form.action = _formAction;
        
        if (type === undefined) {
            type = "POST";
        }
        
        _form.method = type;        
        
        if (typeof data === "object" && data) {
            Object.keys(data).forEach(function(key){
                var _inputHidden = document.createElement('input');
                _inputHidden.type = 'hidden';
                _inputHidden.name = key.toString();
                _inputHidden.value = eval("data." + key.toString());
                _form.appendChild(_inputHidden);
            });
        }
        _form.submit();
        
    };
})(window.Dandelion);
