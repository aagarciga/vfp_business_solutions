(function (global, $) {
    'use strict';

    // QuantityForm Namespace
    var dandelion = global.dandelion,
        QuantityForm = dandelion.namespace('App.QuantityForm', global);
    QuantityForm.htmlBindings = {};
    QuantityForm.htmlBindings.quantityForm  = '#quantityForm';
    QuantityForm.htmlBindings.quantityField = '#quantityField';
    QuantityForm.htmlBindings.toQuantity    = '';
    QuantityForm.htmlBindings.numpadKeys    = '.numpad-key';
    QuantityForm.htmlBindings.deleteKey     = '#delete-Key';
    QuantityForm.htmlBindings.unknowKey     = '#unknow-Key';
    QuantityForm.htmlBindings.zeroKey       = '#zero-qty-Key';
    QuantityForm.htmlBindings.noChangeKey   = '#no-change-Key';
    QuantityForm.htmlBindings.minusKey      = '#minus-Key';
    QuantityForm.htmlBindings.plusKey       = '#plus-Key';
    QuantityForm.htmlBindings.clearKey      = '#clear-Key';
    QuantityForm.htmlBindings.enterKey      = '#enter-Key';

    QuantityForm.functions = {};
    QuantityForm.functions.bindEventHandlers = function () {
        $(QuantityForm.htmlBindings.numpadKeys).on('click',
            QuantityForm.eventHandlers.numpadKeys_onClick);

        $(QuantityForm.htmlBindings.deleteKey).on('click',
            QuantityForm.eventHandlers.deleteKey_onClick);

        $(QuantityForm.htmlBindings.minusKey).on('click',
            QuantityForm.eventHandlers.minusKey_onClick);

        $(QuantityForm.htmlBindings.plusKey).on('click',
            QuantityForm.eventHandlers.plusKey_onClick);

        $(QuantityForm.htmlBindings.clearKey).on('click',
            QuantityForm.eventHandlers.clearKey_onClick);

        $(QuantityForm.htmlBindings.enterKey).on('click',
            QuantityForm.eventHandlers.enterKey_onClick);

        $(QuantityForm.htmlBindings.unknowKey).on('click',
            QuantityForm.eventHandlers.unknowKey_onClick);

        $(QuantityForm.htmlBindings.zeroKey).on('click',
            QuantityForm.eventHandlers.zeroKey_onClick);

        $(QuantityForm.htmlBindings.noChangeKey).on('click',
            QuantityForm.eventHandlers.noChangeKey_onClick);

    };
    QuantityForm.functions.cleanExit = function () {
        $(QuantityForm.htmlBindings.quantityForm).hide();
        $(QuantityForm.htmlBindings.toQuantity).val(0);
        QuantityForm.eventHandlers.clearKey_onClick();
    };

    QuantityForm.eventHandlers = {};
    QuantityForm.eventHandlers.numpadKeys_onClick = function (event) {
        var $target = $(event.target),
            value = $target.html(),
            $field = $(QuantityForm.htmlBindings.quantityField),
            fieldValue = $field.html();

        if (fieldValue === '0') {
            if (value !== '0') {
                $field.html(value);
            }
        } else {
            $field.html(fieldValue + value);
        }
    };
    QuantityForm.eventHandlers.deleteKey_onClick = function () {
        var $field = $(QuantityForm.htmlBindings.quantityField);

        $field.html($field.html().slice(0, -1));
        if (!($field.html() > 0)) {
            $field.html('0');
        }
    };
    QuantityForm.eventHandlers.minusKey_onClick = function () {
        var $field = $(QuantityForm.htmlBindings.quantityField),
            value = parseInt($field.html(), 10);

        if (value > 1) {
            $field.html(value - 1);
        } else {
            $field.html('0');
        }
    };
    QuantityForm.eventHandlers.plusKey_onClick = function () {
        var $field = $(QuantityForm.htmlBindings.quantityField),
            value = parseInt($field.html(), 10);

        if (isNaN(value)) {
            value = 0;
        }
        if (value >= 0) {
            $field.html(value + 1);
        }
    };
    QuantityForm.eventHandlers.clearKey_onClick = function () {
        var $field = $(QuantityForm.htmlBindings.quantityField);

        $field.html('0');
    };
    QuantityForm.eventHandlers.enterKey_onClick = function () {
        var $field = $(QuantityForm.htmlBindings.quantityField),
            value = parseInt($field.html(), 10);

        $(QuantityForm.htmlBindings.quantityForm).hide();
        if (isNaN(value)) {
            value = 0;
        }
        $(QuantityForm.htmlBindings.toQuantity).val(value);
        QuantityForm.eventHandlers.clearKey_onClick();
    };
    QuantityForm.eventHandlers.unknowKey_onClick = function () {
        QuantityForm.functions.cleanExit();
    };
    QuantityForm.eventHandlers.zeroKey_onClick = function () {
        QuantityForm.functions.cleanExit();
    };
    QuantityForm.eventHandlers.noChangeKey_onClick = function () {
        QuantityForm.functions.cleanExit();
    };

    QuantityForm.init = function (value, toQuantityid) {
        $(QuantityForm.htmlBindings.quantityField).val(value || 0);
        QuantityForm.htmlBindings.toQuantity = toQuantityid || '#txToQuantity';

        QuantityForm.functions.bindEventHandlers();
    };
    QuantityForm.setValue = function (value) {
        $(QuantityForm.htmlBindings.quantityField).html(value || 0);
    };
    QuantityForm.getValue = function () {
        return parseInt($(QuantityForm.htmlBindings.quantityField).html(), 10);
    };
    QuantityForm.getEnterKeyId = function () {
        return QuantityForm.htmlBindings.enterKey;
    };
    QuantityForm.getZeroKeyId = function () {
        return QuantityForm.htmlBindings.zeroKey;
    };

    QuantityForm.show = function () {
        $(QuantityForm.htmlBindings.quantityForm).show();
    };

    QuantityForm.hide = function () {
        $(QuantityForm.htmlBindings.quantityForm).hide();
    };

    QuantityForm.setUnknowkeyBehavior = function (eventHandler) {
        $(QuantityForm.htmlBindings.unknowKey).off('click');

        $(QuantityForm.htmlBindings.unknowKey).on('click',
            eventHandler);
    };

    QuantityForm.setUnknowkeyValue = function (value) {
        $(QuantityForm.htmlBindings.unknowKey).html(value);
    };

}(window, window.jQuery));


