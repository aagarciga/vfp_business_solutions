module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')

    concat:
      options:
        separator: ';'
      dist:
        src: [
          'Public/Scripts/jquery-1.10.2.min.js'
          'Public/Scripts/knockback-full-stack.min.js'
        ]
        dest: 'Public/Scripts/bundle.js'

  grunt.loadNpmTasks('grunt-contrib-concat')

  # Default task(s).
  grunt.registerTask('default', ['concat'])