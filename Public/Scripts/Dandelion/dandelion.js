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

/*global Dandelion */

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
            if (typeof parent[parts[i]] === "undefined") {
                parent[parts[i]] = {};
            }
            parent = parent[parts[i]];
        }
        return parent;
    };
}(window));

(function (global) {
    "use strict";
    /**
     * Dandelion.Navigator namespace
     * @type @exp;global@pro;dandelion@call;namespace
     */
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

    /**
     * 
     * @param {type} child
     * @param {type} parent
     * @returns {Window|global.dandelion@call;namespace.extends.child|dandelion_L88.js.extends.child}
     */
    js.extends = function (child, parent) {
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
            for(property in object){
                control = object[property];
                if (object.hasOwnProperty(property) 
                        && typeof control !== 'function') {
                    callback(control);
                }
            }
        } else {
            throw 'Callback param must be a function';
        }
    }; 
}(window));