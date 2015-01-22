;
(function (window, document, $, undefined) {
    "use strict";

    // jsTree 
    var jsTreeInstance = {
        'id': '#jstree',
        'searchControlId': '#tree-search',
        'Create': function () {
            var ref = $(this.id).jstree(true),
                    sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            sel = ref.create_node(sel, {"type": "default"});
            if (sel) {
                ref.edit(sel);
            }
        },
        'Rename': function () {
            var ref = $(this.id).jstree(true),
                    sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            ref.edit(sel);
        },
        'Delete': function () {
            var ref = $(this.id).jstree(true),
                    sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            ref.delete_node(sel);
        },
        'init': function (currentProject) {
            var getAction = 'index.php?controller=Dashboard&action=GetCurrentProjectsDir&salesorder=' + currentProject.salesorder;

            // Binding Searching Behavior
            var to = false;
            (function (id, searchControlId) {
                $(searchControlId).keyup(function () {
                    if (to) {
                        clearTimeout(to);
                    }
                    to = setTimeout(function () {
                        var value = $(searchControlId).val();
                        $(id).jstree(true).search(value);
                    }, 250);
                });
            })(this.id, this.searchControlId);

            // Setting jsTree jQuery Pluging

            $(this.id).jstree({
                "plugins": [
                    "contextmenu"
                            //,"dnd"                    
                            , "search"
                            , "state"
                            , "types"
                            , "unique"
                            //,"wholerow" 
                ],
                "types": {
                    "#": {"max_children": 1, "max_depth": 4, "valid_children": ["default"], "icon": "glyphicon glyphicon-folder-close"},
                    "default": {"icon": "glyphicon glyphicon-folder-close", "valid_children": ["default"]}
                },
                'core': {
                    'themes': {
                        'name': 'default'
                                //'variant' : 'large',
                                //'stripes' : false
                    },
                    'animation': true,
                    'check_callback': true,
                    'data': {
                        'url': getAction,
                        "dataType": "json",
                        'data': function (node) {
                            return {'id': node.id};
                        }
                    }
                }
            });

            // bind customize icon change function in jsTree open_node event. 
            $(this.id).on('open_node.jstree', function (e, data) {
                $('#' + data.node.id).find('i.jstree-icon.jstree-themeicon').first()
                        .removeClass('glyphicon-folder-close').addClass('glyphicon-folder-open');

            });

            // bind customize icon change function in jsTree close_node event. 
            $(this.id).on('close_node.jstree', function (e, data) {
                $('#' + data.node.id).find('i.jstree-icon.jstree-themeicon').first()
                        .removeClass('glyphicon-folder-open').addClass('glyphicon-folder-close');

            });

            $(this.id).on('changed.jstree', function (event, data) {
                console.log(data);
            });
        }
    };

    //jsTreeInstance._Init();

    window.App.Dashboard.jsTreeInstance = jsTreeInstance;

})(window, document, jQuery, undefined);







