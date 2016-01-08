global = window
$ = global.jQuery
Dropzone = global.Dropzone
App = global.App

App.FileManager =
class FileManager
  status:
    dropzone: null
    jsTree: null
  htmlBindings:
    modal_ProjectFiles:   '#project-files-modal'
    dropzone:             '#projectFilesDropzone'
    dropzone_previews:    '.dz-preview'
    jsTree:               '#project-files-jstree'
    jsTree_SearchControl: '#tree-search'
  constructor: (@urlGetNode, @urlGetContent, @urlCreate, @urlDelete, @urlRename, @urlMove, @urlCopy, @urlDeleteFile) ->

  init: =>
    self = @
    Dropzone.options.projectFilesDropzone = false
    console.log Dropzone.options
    @status.dropzone = new Dropzone(@htmlBindings.dropzone,
# The name that will be used to transfer the file
      paramName: "file"
# in MB equals to 1GB
      maxFilesize: 1024
      maxThumbnailFilesize: 1
      addRemoveLinks: true
      accept: (file, done) ->
        if file.name is "Alex.jpg"
          done("Hi creator!")
        else
          done
      init: ->
        @on('sending', (file, xhr, formData) ->
          console.log "sending event triggered"
          jsTreeInstance = self.status.jsTree.jstree(true)
          selectedDir = jsTreeInstance.get_selected()
          file.ready4Remove = true
          file.uploadPath = self.currentId + '/' + selectedDir
          if self.currentId
            formData.append('rootDir', self.currentId)
            formData.append('selectedDir', selectedDir)
        )
        @on('removedfile', (file) ->
          console.log "removing event triggered"
          selectedDir = self.status.jsTree.jstree(true).get_selected()
          params =
            rootDir: self.currentId
            selectedDir: selectedDir[0]
            fileName: file.name
          if file.ready4Remove
            $('.loading').show()
            $.post(self.urlDeleteFile, params).done( ->
              $('.loading').hide()
            ).fail( ->
              $('.loading').hide()
            )
          file.ready4Remove = true
        )
        @
    )
  dropzoneReset: =>
    for file of @status.dropzone.files
       file.ready4Remove = false
    @status.dropzone.removeAllFiles()
    $(@htmlBindings.dropzone_previews).children('.dz-preview').remove()
    $(@htmlBindings.dropzone).children('.dz-message.custom').css('opacity', '1')
    undefined
  bindJsTreeSearching: =>
    $(@htmlBindings.jsTree_SearchControl).on('keyup', =>
      if to
        clearTimeout(to)
      to = setTimeout( =>
        value = $(@htmlBindings.jsTree_SearchControl).val()
        @status.jsTree.jstree(true).search(value)
      , 250)
    )
  loadFileTree: (id) =>
    @currentId = id
    if @status.jsTree?
      @status.jsTree.jstree(true).destroy()
    @status.jsTree = $(@htmlBindings.jsTree).jstree(
      id: @htmlBindings.jsTree
      plugins : ['state', 'dnd', 'sort', 'types', 'contextmenu', 'unique', 'search']
      searchControlId: @htmlBindings.jsTree_SearchControl
      core:
        animation: true
        themes:
          name: 'default'
          responsive : false
          variant : 'medium'
          stripes : false
        data:
          url: @urlGetNode+'&rootDir='+id
          data: (node) ->
            id: node.id
        check_callback: (operation, node, node_parent, node_position, more) ->
          result = true
          if (more and more.dnd and more.pos isnt 'i')
            result = false
          if (operation == 'move_node') or (operation == 'copy_node')
            result = false if @get_node(node).parent is @get_node(node_parent).id
          result
        error: (instance) ->
          console.log 'Error callback:', instance
      sort: (a, b) ->
        result = -1
        if @get_type(a) is @get_type(b)
          if @get_text(a) > @get_text(b)
            result = 1
        else
          if @get_type(a) >= @get_type(b)
            result = 1
      types:
        '#':
          max_children: 1
          valid_children: ['default']
          icon: 'glyphicon glyphicon-folder-open'
        'default':
          valid_children: ['default']
          icon: 'glyphicon glyphicon-folder-close'
      contextmenu:
        items: (node) ->
          tmp = $.jstree.defaults.contextmenu.items()
          console.log(tmp)
          delete tmp.ccp
          if @get_type(node) is "file"
            delete tmp.create
          tmp
      unique:
        duplicate : (name, counter) ->
          name + ' ' + counter
    )
    .on('delete_node.jstree', (event, data) =>
      params =
        rootDir: id
#        operation: event.type
        'id' : data.node.id
      $('.loading').show()
      $.get(@urlDelete, params)
      .done( ->
        $('.loading').hide()
      )
      .fail( ->
        data.instance.refresh()
        $('.loading').hide()
      )
    )
    .on('create_node.jstree', (event, data) =>
      params =
        rootDir: id
#        operation: event.type
        'type' : data.node.type
        'id' : data.node.parent
        'text' : data.node.text
      $('.loading').show()
      $.get(@urlCreate, params)
      .done( (response) ->
        data.instance.set_id(data.node, response.id)
        $('.loading').hide()
      )
      .fail( ->
        data.instance.refresh()
        $('.loading').hide()
      )
    )
    .on('rename_node.jstree', (event, data) =>
      params =
        rootDir: id
#        operation: event.type
        'type' : data.node.type
        'id' : data.node.id,
        'text' : data.text
      $('.loading').show()
      $.get(@urlRename, params)
      .done( (response) ->
        data.instance.set_id(data.node, response.id)
        $('.loading').hide()
      )
      .fail( ->
        data.instance.refresh()
        $('.loading').hide()
      )
    )
    .on('move_node.jstree', (event, data) =>
      params =
        rootDir: id
#        operation: event.type
        'id' : data.node.id,
        'parent' : data.parent
      $('.loading').show()
      $.get(@urlMove, params)
      .done( ->
        data.instance.refresh()
        $('.loading').hide()
      )
      .fail( ->
        data.instance.refresh()
        $('.loading').hide()
      )
    )
    .on('copy_node.jstree', (event, data) =>
      params =
        rootDir: id
#        operation: event.type
        'id' : data.original.id,
        'parent' : data.parent
      $('.loading').show()
      $.get(@urlCopy, params)
      .done( ->
        data.instance.load_node(data.parent);
        data.instance.refresh()
        $('.loading').hide()
      )
      .fail( ->
        data.instance.refresh()
        $('.loading').hide()
      )
    )
    .on('changed_node.jstree', (event, data) =>
      console.log('changed')
      params =
        rootDir: id
#        operation: event.type
        'id' : data.original.id
      $('.loading').show()
#     TODO: implement
      console.log "root: ", params.rootDir, "id: ", params.id

    )
    @bindJsTreeSearching(false);
    @status.jsTree.jstree(true).select_node(id)
  createDir: =>
    jsTree = @status.jsTree.jstree(true)
    selectedDir = jsTree.get_selected()
    false if not selectedDir.length
    selectedDir = selectedDir[0]
    jsTree.create_node(selectedDir, {type: 'default'}, 'last', (new_node) ->
        setTimeout( ->
          jsTree.edit(new_node)
        , 0)
    )
  renameDir: =>
    jsTree = @status.jsTree.jstree(true)
    selectedDir = jsTree.get_selected()
    false if not selectedDir.length
    selectedDir = selectedDir[0]
    jsTree.edit(selectedDir)
  deleteDir: =>
    result = true
    jsTree = @status.jsTree.jstree(true)
    selectedDir = jsTree.get_selected()
    result = false if not selectedDir.length
    result = false if selectedDir[0] is "\/"
    jsTree.delete_node(selectedDir)
    @dropzoneReset();
    result