/* 
 * Copyright (C) 2015 Alex
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

/// It can be used as the below simple example :
///
/// Observable
/// var Publisher = new Observable;
/// Observer 1
/// var reader1 = function (from) {
///     console.log('Delivery from ' + from );
/// };
/// Observer 2
/// var reader2 = function (from) {
///     console.log('Delivery from ' + from );
/// };
/// Observers subscribe to Observable
/// reader1.
///   subscribe(Publisher);
/// reader2.
///   subscribe(Publisher);
///
/// Publisher notify to their observers
/// Publisher.
///   notifyObservers('Hello!');

/// This class play the "Subject" rule in the Observer Pattern.
(function (global) {
    "use strict";

    // Observable Class
    var Observable = function () {

    };
    global.Dandelion.Observable = Observable;

    // Here the Subject will add subscribers in an Array data structure.
    Observable.prototype.observers = [];

    global.Function.prototype.registerObserver = function (observable) {
        var self = this;

        // When you make a new instance of an object,
        // the scope will change to the new created object
        var _observable = new global.Dandelion.Observable();
        var alreadyExist = _observable.observers.some(function (el) {
            if (el === self) {
                return;
            }
        });
        if (!alreadyExist) {
            //In this part the subscriber addes itself as one of the subscribers of publisher
            observable.observers.push(self);
        }
        return this;
    };

    global.Function.prototype.removeObserver = function (observable) {
        var _observable = new global.Dandelion.Observable();

        // The filter method filters the array's members rely on the callback functionality. 
        // Then in this method the filter method returns all the members except 
        // the one who is the object itself.
        var alreadyExist = _observable.observers.filter(function (el) {
            var self = this;
            if (el !== self) {
                return el;
            }
        });
        return this;
    };

    Observable.prototype.notifyObservers = function (data) {
        this.observers.forEach(function (fn) {
            fn(data);
        });
        return this;
    };

    Observable.prototype.ready = function (fn) {
        global.addEventListener('DOMContentLoaded', function () {
            var params = Array.prototype.slice.call(arguments, 1);
            fn.apply(this, params);
        }, false);
    };

}(window));