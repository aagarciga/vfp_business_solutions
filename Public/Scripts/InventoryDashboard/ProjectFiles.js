/**
 * @author Alex
 * @namespace App.InventoryDashboard.ProjectFiles
 * @param {type} global
 * @param {type} $
 * @param {type} App
 * @returns {undefined}
 */
(function (global, $, App) {
    "use strict";

    var dandelion = global.dandelion,
        ProjectFiles = dandelion.namespace('App.InventoryDashboard.ProjectFiles', global);

    ProjectFiles.status = {};
    ProjectFiles.status.dropzone = null;
    ProjectFiles.status.jsTree = null;

    ProjectFiles.htmlBindings = {};
    ProjectFiles.htmlBindings.modal_ProjectFiles    = '#project-files-modal';
    ProjectFiles.htmlBindings.dropzone              = '#projectFilesDropzone';
    ProjectFiles.htmlBindings.dropzone_previews     = '.dz-preview';
    ProjectFiles.htmlBindings.jsTree                = '#project-files-jstree';
    ProjectFiles.htmlBindings.jsTree_SearchControl  = '#tree-search';

    ProjectFiles.functions = {};
    ProjectFiles.functions.dropzoneReset = function () {
        var index;
        for (index in ProjectFiles.status.dropzone.files) {
            if (ProjectFiles.status.dropzone.files.hasOwnProperty(index)) {
                ProjectFiles.status.dropzone.files[index].ready4Remove = false;
            }
        }
        ProjectFiles.status.dropzone.removeAllFiles();
        $(ProjectFiles.htmlBindings.dropzone_previews).children('.dz-preview').remove();
        $(ProjectFiles.htmlBindings.dropzone).children('.dz-message.custom').css('opacity', '1');
    };

    ProjectFiles.functions.bindJsTreeSearching = function (to) {
        $(ProjectFiles.htmlBindings.jsTree_SearchControl).on('keyup',
            function (event) {
                if (to) {
                    clearTimeout(to);
                }
                to = setTimeout(function () {
                    var value = $(ProjectFiles.htmlBindings.jsTree_SearchControl).val();
                    ProjectFiles.status.jsTree.jstree(true).search(value);
                }, 250);
            });
    };
    ProjectFiles.functions.loadFileTree = function (rootDir) {
        if (ProjectFiles.status.jsTree !== null) {
            ProjectFiles.status.jsTree.jstree(true).destroy();
        }

        ProjectFiles.status.jsTree = $(ProjectFiles.htmlBindings.jsTree).jstree({
            id: ProjectFiles.htmlBindings.jsTree,
            plugins : ['state', 'dnd', 'sort', 'types', 'contextmenu', 'unique', 'search'],
            searchControlId: ProjectFiles.htmlBindings.jsTree_SearchControl,
            core : {
                animation: true,
                themes: {
                    name: 'default',
                    responsive : false,
                    variant : 'medium',
                    stripes : false
                },
                data : {
                    //url : App.Dashboard.urls.projectAttachementsAPI + '&salesorder=' + currentSalesOrder + '&operation=get_node',
                    url: App.urls.treeViewManager.getNode + '&rootDir=' + rootDir,
                    data : function (node) {
                        return { 'id' : node.id };
                    }
                },
                check_callback: function (operation, node, node_parent, node_position, more) {

                    // If error, change 'i' for node_position
                    if (more && more.dnd && more.pos !== 'i') {
                        return false;
                    }
                    if (operation === "move_node" || operation === "copy_node") {
                        if (this.get_node(node).parent === this.get_node(node_parent).id) {
                            return false;
                        }
                    }
                    return true;
                },
                error: function (instance){
                    console.log('Error callback:', instance);
                }
            },
            sort: function (a, b) {
                return this.get_type(a) === this.get_type(b) ?
                    (this.get_text(a) > this.get_text(b) ? 1 : -1) :
                    (this.get_type(a) >= this.get_type(b) ? 1 : -1);
            },
            types: {
                '#': {
                    max_children: 1,
                    valid_children: ['default'],
                    icon: 'glyphicon glyphicon-folder-open'
                },
                'default': {
                    valid_children: ['default'],
                    icon: 'glyphicon glyphicon-folder-close'
                }
            },
            contextmenu: {
                items: function (node) {
                    var tmp = $.jstree.defaults.contextmenu.items();
                    // Removing Edit Options
                    delete tmp.ccp;
                    if(this.get_type(node) === "file") {
                        delete tmp.create;
                    }
                    return tmp;
                }
            },
            unique : {
                duplicate : function (name, counter) {
                    return name + ' ' + counter;
                }
            }
        })
            .on('delete_node.jstree', function (event, data) {
                var params = {
                    rootDir: rootDir,
                    operation: event.type,
                    'id' : data.node.id
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.deleteNode, params)
                    .done(function (response) {
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('create_node.jstree', function (event, data) {
                var params = {
                    rootDir: rootDir,
                    operation: event.type,
                    'type' : data.node.type,
                    'id' : data.node.parent,
                    'text' : data.node.text
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.createNode, params)
                    .done(function (response) {
                        data.instance.set_id(data.node, response.id);
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('rename_node.jstree', function (event, data) {
                var params = {
                    rootDir: rootDir,
                    operation: event.type,
                    'id' : data.node.id,
                    'text' : data.text
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.renameNode, params)
                    .done(function (response) {
                        data.instance.set_id(data.node, response.id);
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('move_node.jstree', function (event, data) {
                var params = {
                    rootDir: rootDir,
                    operation: event.type,
                    'id' : data.node.id,
                    'parent' : data.parent
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.moveNode, params)
                    .done(function (response) {
                        data.instance.refresh();
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('copy_node.jstree', function (event, data) {
                var params = {
                    rootDir: rootDir,
                    operation: event.type,
                    'id' : data.original.id,
                    'parent' : data.parent
                };

                $('.loading').show();
                $.get(App.urls.treeViewManager.copyNode, params)
                    .done(function (response) {
                        data.instance.load_node(data.parent);
                        data.instance.refresh();
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                        $('.loading').hide();
                    });
            })
            .on('changed.jstree', function (event, data) {
                var selectedDir = ProjectFiles.status.jsTree.jstree(true).get_selected()[0],
                    selectedDirPath = (selectedDir === '/' ? '' : selectedDir + '/'),
                    params = {
                        rootDir: rootDir,
                        selectedDir: selectedDir
                    };

                if (selectedDir) {
                    ProjectFiles.functions.dropzoneReset();

                    $.post(App.urls.fileManager.list, params)
                        .done(function (response) {
                            if (response && response.length !== 0) {
                                selectedDirPath = "public/uploads/" + rootDir + '/' + selectedDirPath;

                                (function (instance) {

                                }(ProjectFiles.status.dropzone));
                                $.each(response, function (key, value) {
                                    var pattern = /\.(gif|jpg|jpeg|tiff|png)$/i,
                                        mockFile = {
                                            name: value.name,
                                            size: value.size,
                                            ready4Remove: true
                                        };

                                    ProjectFiles.status.dropzone.options.addedfile.call(ProjectFiles.status.dropzone, mockFile);
                                    // Alex: This is wrong (ugly nut work)..... review.... TODO
                                    ProjectFiles.status.dropzone.files.push(mockFile);
                                    if (pattern.test(value.name)) {
                                        ProjectFiles.status.dropzone.options.thumbnail.call(ProjectFiles.status.dropzone, mockFile, selectedDirPath + value.name);
                                    }
                                });

                                $(ProjectFiles.htmlBindings.dropzone_previews).on('click',
                                    function (event) {
                                        var rootDir = rootDir,
                                            fileName = $(this).find('.dz-filename span').html(),
                                            selected = selectedDir,
                                            form = $('<form action="' +
                                                App.urls.fileManager.downloadFile +
                                                '" method="POST"><input type="hidden" name="rootDir" value="' +
                                                rootDir + '" /><input type="hidden" name="selectedDir" value="' +
                                                selected + '" /><input type="hidden" name="fileName" value="' +
                                                fileName + '" /></form>');
                                        form.appendTo('body');
                                        form[0].submit();
                                    });
                            }
                        })
                        .fail(function (response){
                            console.log(response);
                        });
                }
            });
        ProjectFiles.functions.bindJsTreeSearching(false);
        ProjectFiles.status.jsTree.jstree(true).select_node(rootDir);
    };
    ProjectFiles.functions.createDir = function () {
        var jsTree = ProjectFiles.status.jsTree.jstree(true),
            selectedDir = jsTree.get_selected();

        if (!selectedDir.length) {
            return false;
        }
        selectedDir = selectedDir[0];
        selectedDir = jsTree.create_node(selectedDir, {type: 'default'}, 'last', function (new_node) {
            setTimeout(function () {
                jsTree.edit(new_node);
            }, 0);
        });
    };
    ProjectFiles.functions.renameDir = function () {
        var jsTree = ProjectFiles.status.jsTree.jstree(true),
            selectedDir = jsTree.get_selected();

        if (!selectedDir.length) {
            return false;
        }
        selectedDir = selectedDir[0];
        jsTree.edit(selectedDir);
    };
    ProjectFiles.functions.deleteDir = function () {
        var jsTree = ProjectFiles.status.jsTree.jstree(true),
            selectedDir = jsTree.get_selected();

        if (!selectedDir.length) {
            return false;
        }
        if (selectedDir[0] === "\/") {
            throw "Project folder can't be deleted.";
            return false;
        }
        jsTree.delete_node(selectedDir);
        ProjectFiles.functions.dropzoneReset();
    };

    ProjectFiles.eventHandlers = {};

    ProjectFiles.init = function () {
        // Disabling autoDiscover, otherwise Dropzone will try to attach twice.
        global.Dropzone.options.projectFilesDropzone = false;

        ProjectFiles.status.dropzone = new global.Dropzone(ProjectFiles.htmlBindings.dropzone, {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 1024, // in MB equals to 1GB
            maxThumbnailFilesize: 1, // MB
            addRemoveLinks: true,
            accept: function (file, done) {
                if (file.name === "Alex.jpg") {
                    done("Hello Creator.");
                }
                else {
                    done();
                }
            },
            init: function () {
                this.on('removedfile', function (file) {
                    var selectedDir = ProjectFiles.status.jsTree.jstree(true).get_selected(),
                        params = {
                            rootDir: App.InventoryDashboard.status.currentQuote,
                            selectedDir: selectedDir[0],
                            fileName : file.name
                        };

                    if (file.ready4Remove) {
                        $('.loading').show();
                        $.post(App.urls.fileManager.deleteFile, params)
                            .done(function (response) {
                                $('.loading').hide();
                            })
                            .fail(function (response) {
                                $('.loading').hide();
                            });
                    }
                    file.ready4Remove = true;
                });
                this.on('sending', function (file, xhr, formData) {
                    var jsTreeInstance = ProjectFiles.status.jsTree.jstree(true),
                        selectedDir = jsTreeInstance.get_selected();

                    file.ready4Remove = true;
                    file.uploadPath = App.InventoryDashboard.status.currentQuote + '/' + selectedDir;
                    if (App.QuoteDashboard.status.currentQuote) {
                        formData.append('rootDir', App.QuoteDashboard.status.currentQuote);
                        formData.append('selectedDir', selectedDir);
                    }
                    $(ProjectFiles.htmlBindings.dropzone_previews).on('click',
                        function () {
                            var selectedDir = ProjectFiles.status.jsTree.jstree(true).get_selected()[0],
                                rootDir = App.QuoteDashboard.status.currentQuote,
                                fileName = $(this).find('.dz-filename span').html(),
                                form = $('<form action="' +
                                    App.urls.fileManager.downloadFile +
                                    '" method="POST"><input type="hidden" name="rootDir" value="' +
                                    rootDir + '" /><input type="hidden" name="selectedDir" value="' +
                                    selectedDir + '" /><input type="hidden" name="fileName" value="' +
                                    fileName + '" /></form>');

                            form.appendTo('body');
                            form[0].submit();
                        });
                });
            }
        });

    };

}(window, window.jQuery, window.App));
