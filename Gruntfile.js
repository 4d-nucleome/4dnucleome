module.exports = function(grunt) {
'use strict';

    grunt.initConfig({
        compass: {
            dev: {
                options: {
                    httpPath: '/',
                    basePath: '.',
                    cssDir: 'css',
                    sassDir: 'sass',
                    imagesDir: 'img',
                    javascriptsDir: 'js',
                    outputStyle: 'expanded',
                    relativeAssets: false,
                    noLineComments: false
                }
            }
        },
        watch: {
            compass: {
                files: [
                    'sass/**/*.scss'
                ],
                tasks: ['compass']
            },
            livereload: {
                // Browser live reloading
                // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
                options: {
                    livereload: true
                },
                files: [
                    'css/*.css',
                    '*.html',
                    '*.php'
                ]
            }
        }
    });

    // Load tasks
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-compass');

    // Register tasks
    grunt.registerTask('default', [
        'compass'
    ]);
    grunt.registerTask('dev', [
        'watch'
    ]);

};
