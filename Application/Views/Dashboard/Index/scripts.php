<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/moment.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('bootstrap-3/js/daterangepicker.min.js'); ?>"></script>
<script src="<?php echo $View->SharedScriptsContext('knockback-full-stack.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('jstree/jstree.min.js'); ?>"></script>
<script src="<?php echo $View->PublicVendorContext('dropzone/dropzone.min.js'); ?>"></script>
<script src="<?php echo $View->ScriptsContext('dashboard/dashboard.min.js'); ?>"></script>

<script>
/**
 * @author Alex
 * @namespace App.Dashboard
 * @param {window} global
 * @param {jQuery} $
 * @param {Object} App
 * @returns {undefined}
 * @inner JSLint Passed
 */
(function (global, $, App) {
    "use strict";

    var dandelion       = global.dandelion,
        Dashboard       = dandelion.namespace('App.Dashboard', global),
        SalesOrderForm  = App.Dashboard.SalesOrderForm,
        VesselForm      = App.Dashboard.VesselForm,
        DynamicFilter   = App.Dashboard.DynamicFilter;
    
    Dashboard.urls = {};
    Dashboard.urls.updateVesselFormNotes = "<?php echo $View->Href('Dashboard', 'UpdateVesselFormNotes') ?>";
    Dashboard.urls.updateSalesOrderNotes = "<?php echo $View->Href('Dashboard', 'UpdateSalesOrderNotes') ?>";
    Dashboard.urls.getSavedFilter = "<?php echo $View->Href('Dashboard', 'GetSavedFilter') ?>";
    Dashboard.urls.deleteFilter = "<?php echo $View->Href('Dashboard', 'DeleteFilter') ?>";
    Dashboard.urls.saveFilter = "<?php echo $View->Href('Dashboard', 'SaveFilter') ?>";
    Dashboard.urls.getSalesOrder = "<?php echo $View->Href('Dashboard', 'GetSalesOrder') ?>";
    Dashboard.urls.getVesselFormData = "<?php echo $View->Href('Dashboard', 'GetVesselFormData') ?>";
    Dashboard.urls.getDashboardDictionaries = "<?php echo $View->Href('Dashboard', 'GetDashboardDictionaries') ?>";
    Dashboard.urls.updateSOHEADMaterialStatus = "<?php echo $View->Href('Dashboard', 'UpdateSOHEADMaterialStatus') ?>";
    Dashboard.urls.updateSOHEADJobStatus = "<?php echo $View->Href('Dashboard', 'UpdateSOHEADJobStatus') ?>";
    Dashboard.urls.getDashboardItemsPage = "<?php echo $View->Href('Dashboard', 'GetDashboardItemsPage') ?>";
//    Dashboard.TogleFilterVisibitilyCallback = function(){
//            var $button = Dashboard.TogleFilterVisibitilyButton,
//                $icon = $button.children('span'),
//                $filter = Dashboard.FilterForm;
//        
//            if ($icon.hasClass('glyphicon-eye-open')) {
//                $icon.removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
//                $filter.hide("slow");
//            }
//            else {
//                $icon.removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open');
//                $filter.show("slow");
//            }
//        };

    Dashboard.init('<?php echo $DefaultUserFilterId ?>');
}(window, jQuery, App));
</script>
<!--TODO: Refactoring-->


<script>
    (function (global, dandelion) {
        var app = global.App,
        dashboard = app.Dashboard;
        dashboard.currentProject = {'salesorder' : ''};
        dashboard.filesModal = { 'id' : '#files-modal'};
        dashboard.filesModal.controls = [];
        dashboard.filesModal.controls['jstree'] = {
            'id' : '#jstree'
        };
        dashboard.filesModal.controls['tree-search']= {
            'id': '#tree-search'
        };
        
        dashboard.$filesModal = $(dashboard.filesModal.id);
        
        dashboard.projectAttachButton_OnClick = function (event) {            
            dashboard.currentProject.salesorder = $(event.currentTarget).parent().parent().find('.item-field a').html();
//            console.log('Selecting Sales Order: ', dashboard.currentProject.salesorder);
            dashboard.filesModal.loadProjectTree(dashboard.currentProject);
            dashboard.$filesModal.modal('show');
        };
        
        dashboard.filesModal.loadProjectTree = function (currentProject) {
            var $jstree = $(dashboard.filesModal.controls['jstree'].id);            
            // Reset jsTree Instance
            if (dashboard.filesModal.controls['jstree'].instance) {
                dashboard.filesModal.controls['jstree'].instance.jstree('destroy');
            }
            dashboard.filesModal.controls['jstree'].instance = $jstree.jstree({
                plugins : ['state','dnd','sort','types','contextmenu','unique', 'search'],
                core: {
                    data: {
                        url: '<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>'+'&salesorder='+currentProject.salesorder+'&operation=get_node',
                        data: function (node) {
                            return { id: node.id };
                        }
                    },
                    themes: {
                        name: 'default',
                        responsive : false,
                        variant : 'medium',
                        stripes : false
                    },
                    check_callback: function (operation, node, node_parent, node_position, more) {
                        
                        // If error, change 'i' for node_position                
                        if(more && more.dnd && more.pos !== 'i') {
                            return false; 
                        } 
                        if(operation === "move_node" || operation === "copy_node") {
                            if(this.get_node(node).parent === this.get_node(node_parent).id) { 
                                return false; 
                            }
                        }
                        return true;
                    },
                    error: function (instance){
                        console.log('Error callback:', instance);
                    },
                    animation: true
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
            .on('delete_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'delete_node', 
                    'id' : data.node.id 
                };   
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('create_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'create_node',  
                    'type' : data.node.type, 
                    'id' : data.node.parent, 
                    'text' : data.node.text 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    data.instance.set_id(data.node, d.id);
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('rename_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'rename_node',
                    'id' : data.node.id, 
                    'text' : data.text 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    data.instance.set_id(data.node, d.id);
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('move_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'move_node',
                    'id' : data.node.id, 
                    'parent' : data.parent 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                .done(function (d) {
                    //data.instance.load_node(data.parent);
                    data.instance.refresh();
                    $('.loading').hide();
                })
                .fail(function () {
                    data.instance.refresh();
                });
            })
            .on('copy_node.jstree', function (e, data) {
                var params = {
                    salesorder: currentProject.salesorder, 
                    operation: 'copy_node',
                    'id' : data.original.id, 
                    'parent' : data.parent 
                };
                $('.loading').show();
                $.get('<?php echo $View->Href('Dashboard', 'ProjectAttachementsAPI') ?>', params)
                    .done(function (d) {
                        data.instance.load_node(data.parent);
                        data.instance.refresh();
                        $('.loading').hide();
                    })
                    .fail(function () {
                        data.instance.refresh();
                    });
            })
//             bind customize icon change function in jsTree open_node event. 
//            .on('open_node.jstree', function (e, data) {
//                $('#' + data.node.id).find('i.jstree-icon.jstree-themeicon').first()
//                        .removeClass('glyphicon-folder-close').addClass('glyphicon-folder-open');
//
//            })
//            // bind customize icon change function in jsTree close_node event. 
//            .on('close_node.jstree', function (e, data) {
//                $('#' + data.node.id).find('i.jstree-icon.jstree-themeicon').first()
//                        .removeClass('glyphicon-folder-open').addClass('glyphicon-folder-close');
//
//            })
            .on('changed.jstree', function (e, data) {
//                console.log('event', e);
//                console.log('data', data);
                var treeInstance = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                    selectedDir = treeInstance.get_selected()[0],
                    
                    dzInstance = window.Dropzone.instances[0],
                    dzFiles = dzInstance.files,
                    
                    salesOrder = currentProject.salesorder, // Equals to Current Project Folder
                    i = 0;
                    
                // TODO: Explain: this was writed for what...?
                for(i; i < dzFiles.length; i += 1){
                    dzFiles[i].ready4Remove = false;
                }              
                dzInstance.removeAllFiles();

                $('#filesModalDropzone').children('.dz-preview').remove();
                $('#filesModalDropzone').children('.dz-message.custom').css('opacity', '1');

                if (selectedDir) {
//                    console.log('Selecting dir:', selectedDir);

                    $.post('<?php echo $View->Href('Dashboard', 'GetCurrentProjectFiles') ?>', {salesorder: salesOrder, filePath: selectedDir})
                    .done(function (response){
//                        console.log('POST GetCurrentProjectFiles request response: ', response);
//                        console.log('POST GetCurrentProjectFiles request response lenght: ', response.length);
                        if (response && response.length !== 0) {
                            var currentDir = "public/uploads/"+salesOrder+'/'+(selectedDir === '/' ? '' : selectedDir + '/');

                            $.each(response, function(key,value){

                                var mockFile = { name: value.name, size: value.size , ready4Remove: true};
                                dzInstance.options.addedfile.call(dzInstance, mockFile);                                
                                var pattern = /\.(gif|jpg|jpeg|tiff|png)$/i;
                                if( pattern.test(value.name)){
                                    dzInstance.options.thumbnail.call(dzInstance, mockFile, currentDir + value.name);
                                }
                            });
//                          
                            $('.dz-preview').on('click', function(event){
                                var projectDir = salesOrder + '/' +(selectedDir === '/' ? '' : selectedDir + '/'),
                                    fileName = $(this).find('.dz-filename span').html(),
                                    filePath = projectDir + fileName;
                                    
                                    var form = $('<form action="<?php echo $View->Href('Dashboard', 'DownloadFile') ?>" method="POST"><input type="hidden" name="filepath" value="'+filePath+'" /><input type="hidden" name="filename" value="'+fileName+'" /></form>');
                                    form.appendTo('body');                              
                                    form[0].submit();
                            });
                        }                        
                    }).fail(function (response){
                        console.log(response);
                    });
                    
                    // TODO: Here Download on Click handler
                    
                }
            });
            
            // Binding Searching Behavior
            var to = false;
            (function (instance, searchControlId) {
                $(searchControlId).keyup(function () {
                    if (to) {
                        clearTimeout(to);
                    }
                    to = setTimeout(function () {
                        var value = $(searchControlId).val();
                        instance.jstree(true).search(value);
                    }, 250);
                });
            })(dashboard.filesModal.controls['jstree'].instance, dashboard.filesModal.controls['tree-search'].id);
            
            // Select by default the root dir
            dashboard.filesModal.controls['jstree'].instance.jstree(true).select_node('/');
            
        };
        dashboard.filesModal.createDir = function () {
            var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
            sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            sel = ref.create_node(sel, {type: 'default'}, 'last', function (new_node) {
                setTimeout(function () {
                    ref.edit(new_node);
                }, 0);
            });
        };
        dashboard.filesModal.renameDir = function () {
            var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
            sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            sel = sel[0];
            ref.edit(sel);
        };
        dashboard.filesModal.deleteDir = function () {
            var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
            sel = ref.get_selected();
            if (!sel.length) {
                return false;
            }
            if (sel[0] === "\/") {
                alert("Project folder can't be deleted.");
                return false;
            }
            ref.delete_node(sel);
        };
                
        $('.btn-files-dialog').on('click', dashboard.projectAttachButton_OnClick);
    }(window, window.dandelion));
</script>

<script>
    (function (global, dandelion) {
        var app = global.App,
        dashboard = app.Dashboard;
        
        global.Dropzone.options.filesModalDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 1024, // MB
            maxThumbnailFilesize: 1, // MB
            addRemoveLinks: true,
//            acceptedFiles: "image/*,application/pdf,.psd,.doc,.docx,.txt,.xls, .xlsx",
            accept: function(file, done) {
                if (file.name === "Alex.jpg") {
                    done("Hello Creator.");
                }
                else {
                    done();
                }
            },
            init: function(){
                
                this.on('removedfile', function (file, a) {
                    var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                        selectedDir = ref.get_selected();
                    if (file.ready4Remove) {
                        var params = { postSalesOrder: dashboard.currentProject.salesorder, postFilePath : selectedDir[0], postFileName : file.name };
                        $.post('<?php echo $View->Href('Dashboard', 'DeleteFile') ?>', params)
                        .done(function (response) {
//                            console.log('done:', response);
                        })
                        .fail(function (response) {
//                            console.log('fail:', response);
                        });
                    }
                    file.ready4Remove = true;
                });
                this.on('sending', function (file, xhr, formData) {
                    var ref = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                    selectedDir = ref.get_selected();
                    
                    file.ready4Remove = true;
                    file.uploadPath = dashboard.currentProject.salesorder + '/' +selectedDir ;
                    if (dashboard.currentProject.salesorder) {
                        formData.append('salesorder', dashboard.currentProject.salesorder);
                        formData.append('selectedDir', selectedDir);
                    }   
//                    console.log('sending.....');
                    // TODO: Refactoring in this code please.
                    var treeInstance = dashboard.filesModal.controls['jstree'].instance.jstree(true),
                    selectedDir = treeInstance.get_selected()[0],                    
                    dzInstance = window.Dropzone.instances[0],
//                    dzFiles = dzInstance.files,                    
                    salesOrder = dashboard.currentProject.salesorder, // Equals to Current Project Folder
                    i = 0;
                    $('.dz-preview').on('click', function(event){
                        var projectDir = salesOrder + '/' +(selectedDir === '/' ? '' : selectedDir + '/'),
                            fileName = $(this).find('.dz-filename span').html(),
                            filePath = projectDir + fileName;

                            var form = $('<form action="<?php echo $View->Href('Dashboard', 'DownloadFile') ?>" method="POST"><input type="hidden" name="filepath" value="'+filePath+'" /><input type="hidden" name="filename" value="'+fileName+'" /></form>');
                            form.appendTo('body');                              
                            form[0].submit();
                    });
                    // END TODO: Refactoring in this code please.
                });
        }
    };
    }(window, window.dandelion));
</script>

<script>
    (function(window, document, $, Dashboard) {
//        function page($filter, $page, $itemsperpage, $table, orderby, order) {
//            var params = {'filterPredicate': $filter, 'page': $page, 'itemsperpage': $itemsperpage, 'orderby': orderby, 'order': order};
//            $.ajax({
//                data: params,
//                url: '<?php echo $View->Href('Dashboard', 'GetDashboardItemsPage') ?>',
//                type: 'post',
//                beforeSend: function() {
//                    $('.loading').show();
//                },
//                success: function(response) {
//                    var _response = $.parseJSON(response);
//                    var pager = new BootstrapPager(_response, PagerControl_OnClick);
//                    var pagerControl = pager.getPagerControl();
//                    
//                    $('.pager-wrapper').html('').append(pagerControl);
//                    var pagerItems = pager.getCurrentPagedItems();
//                    // Here... AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
////                    Dashboard.updateDashboardTable($table, pagerItems);
//                    // SalesOrder Link on click handler
////                    $('.item-field a.salesorder-form-link').on('click', Dashboard.eventHandlers.control_salesOrderForm_itemsLink_onClick);  
////                    $('#panelHeadingItemsCount').html(pager.itemsCount);
////                    $('.loading').hide();
//                                          
//                    //Vessel Form on click handler
////                    $('.item-field a.vessel-form-link').on('click', Dashboard.eventHandlers.control_vesselForm_itemsLink_onClick);
//                }
//            });
//        }
//
//        Dashboard.Page = page;

//        $('.pager-btn').on("click", PagerControl_OnClick);

        // Pager Control Buttons On Click Handler
//        function PagerControl_OnClick() {
//            var $table = $('#dashboardTable');
//            var $currentButton = $(this);
//            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 
//                $currentButton.data('page'), 
//                Dashboard.itemPerPage, 
//                $table, 
//                Dashboard.TableSortField, 
//                Dashboard.TableSortFieldOrder
//            );
//        }

//        $('.top-pager-itemmperpage-control a').on('click', function() {
//            // Update Control Selected Value
//            Dashboard.itemPerPage = $(this).text();
//            $('.top-pager-itemmperpage-control button span.value').text(Dashboard.itemPerPage);
//            
//            var $table = $('#dashboardTable');
//            Dashboard.Page(Dashboard.DynamicFilter.FilterString, 
//                1, // Always show page one
//                Dashboard.itemPerPage, 
//                $table, 
//                Dashboard.TableSortField, 
//                Dashboard.TableSortFieldOrder
//            );
//        });
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
    function bindUpdateDropdownClick() {
        throw "Deprecated";
//        $('.update-dropdown').on('change', function() {
//            var $dropdown = $(this),
//                    params = {'ordnum': $dropdown.data('ordnum'), 'mtrlstatus': $dropdown.val(), 'jobstatus': $dropdown.val()};
////            if ($dropdown.hasClass('material-status')) {
////                $.ajax({
////                    data: params,
////                    url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADMaterialStatus') ?>',
////                    type: 'post',
////                    beforeSend: function() {
////                        $('.loading').show();
////                    },
////                    success: function(response) {
////                        var _response = $.parseJSON(response);
////                        if (_response === 'success') {
//////                            console.log(_response);
////                        } else {
//////                            console.log(_response);
////                        }
////                        $('.loading').hide();
////                    }
////                });
////            }
//            if ($dropdown.hasClass('job-status')) {
//                $.ajax({
//                    data: params,
//                    url: '<?php echo $View->Href('Dashboard', 'UpdateSOHEADJobStatus') ?>',
//                    type: 'post',
//                    beforeSend: function() {
//                        $('.loading').show();
//                    },
//                    success: function(response) {
//                        var _response = $.parseJSON(response);
//                        if (_response === 'success') {
////                            console.log(_response);
//                        } else {
////                            console.log(_response);
//                        }
//                        $('.loading').hide();
//                    }
//                });
//            }
//        });
    }
</script>

<script>
    (function(window, document, jQuery, Dashboard) {
        var dashboard = Dashboard;
        
//        Dashboard.updateDashboardTable = function($table, $data) {
//            var $tableBody = $table.children('tbody');
//            $tableBody.html('');
//            for (index in $data) {
//                $tableBody.append(Dashboard.buildDashboardItemTableRow($data[index], '', "item-field"));
//            }
//            bindUpdateDropdownClick();
//            
//        };

        Dashboard.buildDashboardItemTableRow = function($dataRow, trClass, tdClass) {
            
            var _result = document.createElement('tr'),
                    _tdOrdnum = document.createElement('td'),
                    _aOrdnum = document.createElement('a'),
                    _tdPonum = document.createElement('td'),
                    _tdCompany = document.createElement('td'),
                    _tdVesselid = document.createElement('td'),
                    _aVesselid = document.createElement('a'),
                    _tdProStartDT = document.createElement('td'),
                    _tdProEndDT = document.createElement('td'),
                    _tdSotypecode = document.createElement('td'),
                    _tdDescription = document.createElement('td'),
                    _tdMaterialStatus = document.createElement('td'),
                    _tdStatus = document.createElement('td'),
                    _tdProjectManager1 = document.createElement('td'),
                    _tdProjectManager2 = document.createElement('td'),
                    _tdPodate = document.createElement('td'),
                    _tdQutno = document.createElement('td'),
                    _tdCstctid = document.createElement('td'),
                    _tdAttachedFiles = document.createElement('td'),
                    _aAttachedFiles = document.createElement('a'),
                    _spanGlyphIcon = document.createElement('span');


            with (_tdOrdnum) {
                _aOrdnum.href = "#";
                _aOrdnum.className = 'salesorder-form-link';
                _aOrdnum.appendChild(document.createTextNode($dataRow.ordnum));
                className = tdClass;
                appendChild(_aOrdnum);
            }

            with (_tdPonum) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ponum));
            }

            with (_tdCompany) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.company));
            }

            with (_tdVesselid) {
//                className = tdClass;
//                appendChild(document.createTextNode($dataRow.vesselid));
                
                _aVesselid.href = "#";
                _aVesselid.className = 'vessel-form-link';
                _aVesselid.appendChild(document.createTextNode($dataRow.vesselid));
                className = tdClass;
                appendChild(_aVesselid);
            }

            with (_tdProStartDT) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProStartDT));
            }

            with (_tdProEndDT) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.ProEndDT));
            }

            with (_tdSotypecode) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.sotypecode));
            }

            with (_tdDescription) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.JobDescrip));
            }

            with (_tdMaterialStatus) {
                className = tdClass;
                //appendChild(document.createTextNode($dataRow.mtrlstatus));
                var _materialStatusControl = Dashboard.buildStatusControl($dataRow.mtrlstatus, Dashboard.dictionaries.materialStatus);
                _materialStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _materialStatusControl.className += ' material-status';
                appendChild(_materialStatusControl);
            }

            with (_tdStatus) {
                className = tdClass;
                var _jobStatusControl = Dashboard.buildStatusControl($dataRow.jobstatus, Dashboard.dictionaries.jobStatus);
                _jobStatusControl.dataset['ordnum'] = $dataRow.ordnum;
                _jobStatusControl.className += ' job-status';
                appendChild(_jobStatusControl);
            }

            with (_tdProjectManager1) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.projectManager1));
            }

            with (_tdProjectManager2) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.projectManager2));
            }

            with (_tdPodate) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.podate));
            }

            with (_tdQutno) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.qutno));
            }

            with (_tdCstctid) {
                className = tdClass;
                appendChild(document.createTextNode($dataRow.Cstctid));
            }

            with (_tdAttachedFiles) {
                className = "item-action item-files";
                _spanGlyphIcon.className = "glyphicon glyphicon-folder-close";
                _aAttachedFiles.href = "#";
                _aAttachedFiles.className = "btn-files-dialog";
                _aAttachedFiles.addEventListener('click', dashboard.projectAttachButton_OnClick);
                _aAttachedFiles.appendChild(_spanGlyphIcon);
                appendChild(_aAttachedFiles);
            }

            with (_result) {
                className = trClass;
                appendChild(_tdOrdnum);
                appendChild(_tdPonum);
                appendChild(_tdCompany);
                appendChild(_tdVesselid);
                appendChild(_tdProStartDT);
                appendChild(_tdProEndDT);
                appendChild(_tdSotypecode);
                appendChild(_tdDescription);
                appendChild(_tdMaterialStatus);
                appendChild(_tdStatus);
                appendChild(_tdProjectManager1);
                appendChild(_tdProjectManager2);
                appendChild(_tdPodate);
                appendChild(_tdQutno);
                appendChild(_tdCstctid);
                appendChild(_tdAttachedFiles);
            }
            return _result;
        }
        ;

        Dashboard.buildStatusControl = function(current, values) {
            console.log(current, values);
            var _select = document.createElement('select');
            var _optionEmpty = document.createElement('option');
                _optionEmpty.appendChild(document.createTextNode("Empty"));
                _select.appendChild(_optionEmpty);
            for (index in values) {
                var _option = document.createElement('option');
                _option.value = values[index]['id'];
                _option.appendChild(document.createTextNode(values[index]['descrip']));
                if (current === values[index]['id']) {
                    _option.selected = "selected";
                }
                _select.appendChild(_option);
            }
            _select.className = 'form-control update-dropdown';
            return _select;
        };
    })(window, document, jQuery, App.Dashboard);
</script>

<script>
<?php echo $Pager->GetJavascriptPager(); ?>
</script>

<script src="<?php echo $View->SharedScriptsContext('jstree.init.js'); ?>"></script>
