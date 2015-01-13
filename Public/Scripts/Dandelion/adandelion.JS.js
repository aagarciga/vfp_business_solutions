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

;
(function(global, dandelion) {
    "use strict";

    // Dandelion JS Namespace
    var js = dandelion.namespace('js');

    js.isNumber = function(value) {
        return typeof value === 'number' && isFinite(value);
    };

    // By augmenting Function.prototype with a method method, 
    // we no longer have to type the name of the prototype property. 
    // That bit of ugliness can now be hidden.
    Function.prototype.method = function(name, func) {
        if (!this.prototype[name]) {
            this.prototype[name] = func;
        }
    };

    // JavaScript lacks a method that removes spaces from the ends of a string. 
    // That is an easy oversight to fix:
    String.method('trim', function() {
        return this.replace(/^\s+|\s+$/g, '');
    });

    // When use prototypal inheritance use for calling base method (superior)
    Object.method('superior', function(name) {
        var that = this, method = that[name];
        return function() {
            return method.apply(that, arguments);
        };
    });

})(window, window.dandelion);

