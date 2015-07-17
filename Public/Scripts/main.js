
if (window.jQuery === 'undefined') {
    throw new Error('VFP Business Series\'s JavaScript requires jQuery');
}

(function (global, $) {
    'use strict';

    // Application Namespace
    var dandelion = global.dandelion,
        App = dandelion.namespace('App', global);

    App.htmlBindings = {};
    App.htmlBindings.feedbackPanel = '.feedback';

    App.Helpers = {};
    App.Helpers.showFeedback = function (message, type) {
        $(App.htmlBindings.feedbackPanel).fadeOut('slow', function () {
            $(this).html(message);
            $(this).fadeIn('slow');
        });
        if (type === 'info') {
            $('.feedback').addClass('alert-info').removeClass('alert-danger alert-success alert-warning');
        } else if (type === 'danger') {
            $('.feedback').addClass('alert-danger').removeClass('alert-info alert-success alert-warning');
        } else if (type === 'success') {
            $('.feedback').addClass('alert-success').removeClass('alert-info alert-danger alert-warning');
        } else if (type === 'warning') {
            $('.feedback').addClass('alert-warning').removeClass('alert-info alert-danger alert-success');
        }
    };
    App.Helpers.setSuccessTo = function (control) {
        var $parent = $(control).parent();
        $parent.removeClass('has-error').addClass('has-success');
    };
    App.Helpers.setErrorTo = function (control) {
        var $parent = $(control).parent();
        $parent.removeClass('has-success').addClass('has-error');
    };

}(window, window.jQuery));

// Avoid 'console' errors in browsers that lack a console.
(function (global) {
    'use strict';

    var method,
        noop = function () {},
        methods = [
            'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
            'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
            'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
            'timeStamp', 'trace', 'warn'
        ],
        length = methods.length,
        console = (global.console || {});

    while (length) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
        length -= 1;
    }
}(window));

function ShowFeedback(message, type) {
    $('.feedback').fadeOut('slow', function () {
        $('.feedback').html(message);
        $('.feedback').fadeIn('slow');
    });

    if (type === 'info') {
        $('.feedback').addClass('alert-info').removeClass('alert-danger alert-success alert-warning');
    } else if (type === 'danger') {
        $('.feedback').addClass('alert-danger').removeClass('alert-info alert-success alert-warning');
    } else if (type === 'success') {
        $('.feedback').addClass('alert-success').removeClass('alert-info alert-danger alert-warning');
    } else if (type === 'warning') {
        $('.feedback').addClass('alert-warning').removeClass('alert-info alert-danger alert-success');
    }
}

