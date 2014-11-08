function ShowFeedback(message){
    $('.feedback').fadeOut('slow', function() {
        $('.feedback').html(message);
        $('.feedback').fadeIn('slow', function() {
            //
        });
    });
}

;(function(window, document, $, undefined){
    "use strict";

    // Application Namespace
    var App = {};
    window.App = App;
    
})(window, document, jQuery, undefined);