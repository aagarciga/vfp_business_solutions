;(function(window, document, $, undefined){
    "use strict";

    // jsTree 
    var jsTreeInstance = {
        'id': '#jstree',
        'searchControlId' : '#tree-search',
        'Create' : function() {
            var ref = $(this.id).jstree(true),
                sel = ref.get_selected();
            if(!sel.length) { return false; }
            sel = sel[0];
            sel = ref.create_node(sel, {"type":"default"});
            if(sel) {
                ref.edit(sel);
            }
        },
        'Rename' : function() {
            var ref = $(this.id).jstree(true),
                    sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            ref.edit(sel);
        },
        'Delete' : function() {
            var ref = $(this.id).jstree(true),
                    sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            ref.delete_node(sel);
        },
        '_Init' : function(){
            
            // Binding Searching Behavior
            var to = false;
            (function(id, searchControlId){
                $(searchControlId).keyup(function() {
                if (to) {
                    clearTimeout(to);
                }
                to = setTimeout(function() {
                    var value = $(searchControlId).val();
                    $(id).jstree(true).search(value);
                }, 250);
            });
            })(this.id, this.searchControlId);          
            
            // Setting jsTree jQuery Pluging
            
            $(this.id).jstree({
                "plugins" : [ 
                    "contextmenu" 
                    //,"dnd"                    
                    ,"search"
                    ,"state"
                    ,"types"
                    ,"unique"
                    //,"wholerow" 
                ],
                "types" : {
                    "#" : { "max_children" : 1, "max_depth" : 4, "valid_children" : ["default"], "icon" : "glyphicon glyphicon-folder-open" },
                    "default" : {  "icon" : "glyphicon glyphicon-folder-open", "valid_children" : ["default"] }
                },
                'core' : {
                    'themes' : {
                        'name' : 'default'
                        //'variant' : 'large',
                        //'stripes' : false
                    },  
                    'animation': true,
                    'check_callback' : true,
                    'data' : [
                        { 
                            "text" : "./", 
                            "state" : { "opened" : true }, 
                            "icon" : "glyphicon glyphicon-folder-open",
                            "children" : [
                                { 
                                    "text" : "Pdf", 
                                    "state" : { "selected" : true },
                                    "icon" : "glyphicon glyphicon-folder-close"
                                },
                                { 
                                    "text" : "Photos", 
                                    "icon" : "glyphicon glyphicon-folder-open",
                                    "children" : [
                                        { 
                                            "text" : "Before", 
                                            "icon" : "glyphicon glyphicon-folder-close"
                                        },
                                        { 
                                            "text" : "After", 
                                            "icon" : "glyphicon glyphicon-folder-close"
                                        }
                                    ]
                                },
                                { 
                                    "text" : "Videos", 
                                    "state" : { "disabled" : true },
                                    "icon" : "glyphicon glyphicon-folder-close"
                                }
                            ]
                        }
                    ]
                }
            });
        }
    };
    
    jsTreeInstance._Init();
    
    window.App.jsTreeInstance = jsTreeInstance;
    
})(window, document, jQuery, undefined);







