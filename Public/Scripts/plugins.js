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

// Place any jQuery/helper plugins in here.
// See jQuery Plugin Boilerplate in this directory.