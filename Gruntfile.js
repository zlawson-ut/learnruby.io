module.exports = function (grunt) {

	require('load-grunt-tasks')(grunt);

  grunt.initConfig({

    pkg: grunt.file.read('package.json'),

    watch: {
      css: {
        files: ['source/scss/**/*.scss'],
        tasks: ['compass', 'postcss'],
        options: {
          spawn: false,
        }
      },

      js: {
        files: ['source/js/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: false,
        }
      },

      img: {
        files: ['source/img/**'],
        tasks: ['imagemin'],
        options: {
          spawn: false,
        }
      }
    },

    clean: {
      build: {
        src: ['css', 'fonts', 'favicons', 'img', 'js']
      }
    },

    jshint: {
      all: ['js/*.js'],
      afterconcat: ['js/production.js'],
    },

    concat: {
      dist: {
        src: [
          'source/js/nav.js',
          'source/js/masonry.js',
          'source/js/prism.js',
          'source/js/post.js',
        ],
        dest: 'js/production.js',
      }
    },

    uglify: {
      build: {
        files: [{
          expand: true,
          cwd: 'js/',
          src: '**/*.js',
          dest: 'js/',
          ext: '.min.js'
        }]
      },
    },

    imagemin: {
      theme: {
        files: [{
          expand: true,
          cwd: 'source/img/',
          src: ['**/*.{png,gif,jpg}'],
          dest: 'img'
        }]
      },
      content: {
        files: [{
          expand: true,
          cwd: '../../uploads',
          src: ['**/*.{png,gif,jpg}'],
          dest: '../../uploads'
        }]
      }
    },

    compass: {
      dist: {
        options: {
          config: 'config.rb',
        }
      }
    },

    postcss: {
      options: {
        map: false,
        processors: [
          require('autoprefixer-core')({
            browsers: '> 1%'
          }),
          require('csswring')
        ]
      },
      dist: {
        src: 'css/*.css'
      }
    },

    cssmin: {
      dist: {
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.css'],
          dest: 'css',
          ext: '.min.css'
        }]
      }
    },

    copy: {
      build: {
        files: [{
          expand: true,
          cwd: 'source/fonts/',
          src: ['**'],
          dest: 'fonts/',
          filter: 'isFile'
        }, {
          expand: true,
          cwd: 'source/favicons/',
          src: ['**'],
          dest: 'favicons/',
          filter: 'isFile'
        }, {
          expand: true,
          cwd: 'source/css',
          src: ['**/*.css'],
          dest: 'css/',
          filter: 'isFile',
        }]
      },
    },

  });

  grunt.registerTask('default', ['clean', 'copy:build', 'compass', 'postcss', 'concat', 'uglify', 'cssmin']);
};