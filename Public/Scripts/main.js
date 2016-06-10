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

    // Application Namespaces Declaration
    dandelion.namespace('App.Foundation', global);

    /**
     * TD Element with TextNode inside
     * @param data
     * @param tdClass
     * @returns {Element|*}
     */
    App.Helpers.simpleTdBuilder = function (data, tdClass) {
        var td, doc = global.document;
        td = doc.createElement('td');
        td.className = tdClass;
        td.appendChild(doc.createTextNode(data));
        return td;
    };

    /**
     * TD Element with Element Node inside. Wrapper element permited.
     * @param elements
     * @param tdClass
     * @param wrapperElement
     * @returns {Element|*}
     */
    App.Helpers.complexTdBuilder = function (elements, tdClass, wrapperElement) {
        var td, index, doc = global.document;
        td = doc.createElement('td');
        td.className = tdClass;

        if (wrapperElement) {
            if (Array.isArray(elements)) {
                index = elements.length;
                while (index--) {
                    wrapperElement.appendChild(elements[index]);
                }
            } else {
                wrapperElement.appendChild(elements); // Append only one element
            }
            td.appendChild(wrapperElement);
        } else {
            if (Array.isArray(elements)) {
                index = elements.length;
                while (index--) {
                    td.appendChild(elements[index]);
                }
            } else {
                td.appendChild(elements); // Append only one element
            }
        }
        return td;
    };

    /**
     * TD Element with Link Element inside.
     * @param data
     * @param tdClass
     * @param aClass
     * @param href
     * @param dataset
     * @returns {Element|*}
     */
    App.Helpers.withLinkTdBuilder = function (data, tdClass, aClass, href, dataset) {
        var a, td, doc = global.document;
        if (href == null) {
            href = '#';
        }
        td = doc.createElement('td');
        a = doc.createElement('a');
        a.href = href;
        a.className = aClass;
        for (var key in dataset) {
            a.dataset[key] = dataset[key];
        }
        if (typeof data === "string") {
            a.appendChild(doc.createTextNode(data));
        } else {
            a.appendChild(data);
        }
        td.className = tdClass;
        td.appendChild(a);
        return td;
    };

    App.Helpers.withCheckboxTdBuilder = function (tdClass, checkboxClass, dataset) {
        var checkbox, td, doc = global.document;

        td = doc.createElement('td');
        checkbox = doc.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.className = checkboxClass;
        for (var key in dataset) {
            checkbox.dataset[key] = dataset[key];
        }
        td.className = tdClass;
        td.appendChild(checkbox);
        return td;
    };

    /**
     * Link Element
     * @param data
     * @param aClass
     * @param href
     * @param dataset
     * @returns {Element|*}
     */
    App.Helpers.linkBuilder = function (data, aClass, href, dataset, props) {
        var a, doc = global.document;
        if (href == null) {
            href = '#';
        }
        a = doc.createElement('a');
        a.href = href;
        a.className = aClass;
        for (var key in dataset) {
            a.dataset[key] = dataset[key];
        }
        for (var key in props) {
            a.setAttribute(key, props[key]);
        }
        if (typeof data === "string") {
            a.appendChild(doc.createTextNode(data));
        } else {
            a.appendChild(data);
        }
        return a;
    };

    /**
     *
     * @param data
     * @param tdClass
     * @param aClass
     * @param href
     * @param spanClass
     * @param spanChild
     * @param dataset
     * @returns {Element|*}
     */
    App.Helpers.withLightboxLinkPictureBuilder = function (data, tdClass, aClass, href, spanClass, spanChild, dataset) {
        var a, td, span, doc = global.document;
        var tdChild;
        if (href == null) {
            href = '#';
        }

        td = doc.createElement('td');
        a = doc.createElement('a');
        span = doc.createElement('span');

        a.className = aClass;
        a.href = href;

        a.dataset["lightbox"] = data;

        for (var key in dataset) {
            a.dataset[key] = dataset[key];
        }

        span.className = spanClass;
        if (spanChild != null) {
            span.appendChild(spanChild);
        }

        td.className = tdClass;

        if (href !== '#') {
            a.appendChild(span);
            td.appendChild(a);
        }
        else {
            td.appendChild(span);
        }
        return td;
    };

    App.Helpers.selectBuilder = function (data, selectClass, values, dataset) {
        var currentId, currentValue, index, option, select, doc = global.document;
        select = doc.createElement('select');
        select.className = selectClass;
        option = doc.createElement('option');
        option.appendChild(doc.createTextNode("Empty"));
        select.appendChild(option);
        for (index in values) {
            if (values.hasOwnProperty(index)) {
                currentId = values[index].id;
                currentValue = values[index].descrip;
                option = doc.createElement('option');
                if (data === currentId) {
                    option.selected = "selected";
                }
                option.value = currentId;
                option.appendChild(doc.createTextNode(currentValue));
                select.appendChild(option);
            }
        }
        select.className += ' form-control update-dropdown select2-nosearch';
        for (var key in dataset) {
            select.dataset[key] = dataset[key];
        }
        return select;
    };

    App.Helpers.withSelectBuilder = function (data, tdClass, selectClass, values, dataset) {
        var select, td, doc = global.document;
        td = doc.createElement('td');
        td.className = tdClass;
        select = App.Helpers.selectBuilder(data, selectClass, values, dataset);
        td.appendChild(select);
        return td;
    };



    App.Helpers.Href = function (controller, action, params) {
        var url = 'index.php?';
        if (controller !== '') {
            url += 'controller=' + controller;
            if (action !== '') {
                url += '&action=' + action;
            }
        }
        else {
            if (action !== '') {
                url += 'action=' + action;
            }
        }
        if (params != null) {
            for (var index in params) {
                url += "&" + index + "=" + params[index];
            }
        }
        return url;
    };

    App.Helpers.createdObjectValues = function (item, fieldsDefinition) {
        var result = {};
        for (var index in fieldsDefinition) {
            if (item.hasOwnProperty(index)) {
                result[index] = item[index];
            }
        }

        return result;
    };

}(window, window.jQuery));

// Avoid 'console' errors in browsers that lack a console.
(function (global) {
    'use strict';

    var method,
        noop = function () {
        },
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

