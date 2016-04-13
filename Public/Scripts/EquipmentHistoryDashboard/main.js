(function main(global) {
    "use strict";

    var dandelionjs = global.dandelion,
        dashboard = dandelionjs.namespace('App.EquipmentHistoryDashboard', global);

    dashboard.status = {};
    dashboard.dictionaries = {};
    dashboard.htmlBindings = {};
    dashboard.functions = {};
    dashboard.eventHandlers = {};

    /**
     * Equipment History Dashboard Initializing function
     * @namespace App.EquipmentHistoryDashboard
     * @param filter
     */
    dashboard.init = function (filter) {
        global.console.log(filter);
    };
}(window));