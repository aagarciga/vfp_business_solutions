// Generated by CoffeeScript 1.9.3
(function() {
  module.exports = function(grunt) {
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      concat: {
        options: {
          separator: ';'
        },
        dist: {
          src: ['Public/Scripts/jquery-1.10.2.min.js', 'Public/Scripts/knockback-full-stack.min.js'],
          dest: 'Public/Scripts/bundle.js'
        }
      }
    });
    grunt.loadNpmTasks('grunt-contrib-concat');
    return grunt.registerTask('default', ['concat']);
  };

}).call(this);