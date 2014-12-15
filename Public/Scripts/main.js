function ShowFeedback(message){
    $('.feedback').fadeOut('slow', function() {
        $('.feedback').html(message);
        $('.feedback').fadeIn('slow', function() {
            //
        });
    });
}

;(function(window, document, $, Dandelion, undefined){
    "use strict";

    // Application Namespace
    var App = Dandelion.namespace('App', window);    
    
})(window, document, jQuery, window.Dandelion, undefined);