/* 
 * Copyright (C) 2014 Alex
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * 
 * @param {window} global
 * @returns {undefined}
 */
(function (global) {
    "use strict";

    // dandelion Namespace
    var dandelion = {};
    global.dandelion = global.Dandelion = dandelion;
    dandelion.namespace = function (nsString, root) {
        var parts = nsString.split('.'),
            parent = root || dandelion,
            i;
        // strip redundant leading global
        if (parts[0] === "dandelion") {
            parts = parts.slice(1);
        }
        for (i = 0; i < parts.length; i += 1) {
            // create a property if it doesn't exist
            if (parent[parts[i]] === "undefined") {
                parent[parts[i]] = {};
            }
            parent = parent[parts[i]];
        }
        return parent;
    };

    // Javascript Languaje Features Augmenting by (Javascript the good parts)

    /**
     * By augmenting Function.prototype with a method method,
     * we no longer have to type the name of the prototype property.
     * That bit of ugliness can now be hidden.
     * @param {string} name
     * @param {Function} func
     * @returns {undefined}
     */
    Function.prototype.method = function (name, func) {
        if (!this.prototype[name]) {
            this.prototype[name] = func;
        }
    };

    /**
     * JavaScript lacks a method that removes spaces from the ends of a string.
     * That is an easy oversight to fix:
     */
    String.method('trim', function () {
        return this.replace(/^\s+|\s+$/g, '');
    });

    /**
     * When use prototypal inheritance use for calling base method (parent)
     */
//    Object.method('inheritanceBase', function (name) {
//        var that = this, method = that[name];
//        return function () {
//            return method.apply(that, arguments);
//        };
//    });

}(window));

(function (global) {
    "use strict";
    var navigator = global.dandelion.namespace('navigator');

    /**
     * 
     * @returns {Boolean}
     */
    navigator.isChrome = function () {
        return global.navigator.userAgent.indexOf("Chrome") !== -1;
    };

    /**
     * 
     * @returns {Boolean}
     */
    navigator.isFirefox = function () {
        return global.navigator.userAgent.indexOf("Firefox") !== -1;
    };

    /**
     * 
     * @returns {Boolean}
     */
    navigator.isOpera = function () {
        return global.navigator.userAgent.indexOf("Opera") !== -1;
    };

    /**
     * 
     * @returns {Boolean}
     */
    navigator.isIE = function () {
        return ((global.navigator.userAgent.indexOf("MSIE") !== -1) ||
                (!!global.document.documentMode === true));
    };
}(window));

(function (global) {
    "use strict";

    // dandelion.js namespace
    var js = global.dandelion.namespace('js');

    js.augment = function (child, parent) {
        var key;
        for (key in parent) {
            if (parent.hasOwnProperty(key)) {
                child[key] = parent[key];
            }
        }
        function Ctor() {
            this.constructor = child;
        }
        Ctor.prototype = parent.prototype;
        child.prototype = new Ctor();
        child.base = parent.prototype;
        return child;
    };

    /**
     * For each property on object apply the given callback
     * @param {Object} object
     * @param {Function} callback
     * @returns {undefined}
     */
    js.foreachPropertyDo = function (object, callback) {
        var property, control;
        if (typeof object !== 'object') {
            throw 'Object param must be an object';
        }
        if (typeof callback === 'function') {
            for (property in object) {
                if (object.hasOwnProperty(property)) {
                    control = object[property];
                    if (typeof control !== 'function') {
                        callback(control);
                    }
                }
            }
        } else {
            throw 'Callback param must be a function';
        }
    };

    /**
     * The safe way for ask if a value is a number. (The good parts Tip)
     * @param {object} value
     * @returns {Boolean}
     */
    js.isNumber = function (value) {
        return typeof value === 'number' && isFinite(value);
    };

}(window));