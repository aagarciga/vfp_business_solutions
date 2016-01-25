module.exports = (grunt) ->
  # Project configuration.
  grunt.initConfig
    pkg: grunt.file.readJSON('package.json')

    copy:
      dist:
        expand: true
        cwd: './'
        src: [
          'Core/**/*'
          'index.php'
          'Application/**/*'
          'Public/Images/**/*'
          'Public/Uploads/*.png'
          'Public/Shared/Images/*'
          'Public/Shared/Styles/*.min.css'
          'Public/Shared/Scripts/*.min.js'
          'Public/Styles/**/*.min.css'
          'Public/Scripts/**/*.min.js'
          'Public/Vendor/**/*'
        ]
        dest: 'build/'
    clean:
      build:
        src: ["build/"]
    compress:
      main:
        options:
          archive: 'build/vfpbs.<%= pkg.version %>.zip'
          mode: 'zip'
          level: 9
          pretty: true
        files: [
          expand: true
          cwd: 'build/'
          src: ['**']
          dest: 'vfpbs.<%= pkg.version %>'
        ]

  grunt.loadNpmTasks('grunt-contrib-copy')
  grunt.loadNpmTasks('grunt-contrib-clean')
#  grunt.loadNpmTasks('grunt-contrib-compress')

  # Default task(s).
  grunt.registerTask('default', ['clean', 'copy'])