(function (global, $) {
    'use strict';

    // Application Namespace
    var dandelion = global.dandelion,
        App = dandelion.namespace('App', global);

}(window, jQuery));

function ShowFeedback(message){
    $('.feedback').fadeOut('slow', function() {
        $('.feedback').html(message);
        $('.feedback').fadeIn('slow', function() {
            //
        });
    });
}

