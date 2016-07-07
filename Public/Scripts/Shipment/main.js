(function (global, $, knockBack, knockout, backbone) {
    "use strict";
    var dandelionjs = global.dandelion,
        App = dandelionjs.namespace('App', global);

    App.Shipment = (function () {
        var urls, functions, dictionaries, htmlBindings, eventHandlers, mvvm, modules, colors;


        urls = {};
        colors = {};
        dictionaries = {};
        htmlBindings = {};
        mvvm = {};
        modules = {};
        eventHandlers = {};
        functions = {};

        function init() {
            console.log("Not Implemented Yet");
        }

        return {
            init: init
        };

    }());

}(window, window.jQuery, window.kb, window.ko, window.Backbone));
