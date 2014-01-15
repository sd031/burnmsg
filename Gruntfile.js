//Gruntfile
module.exports = function(grunt) {

    //Initializing the configuration object
    grunt.initConfig({ 
        concat: {
            options: {
                separator: ';'
            },            
            javascript: {
                src: [
                    './bower_components/jquery/jquery.min.js',
                    './app/assets/js/skel.min.js',
                    './app/assets/js/init.js',
                    './app/assets/js/app.js'
                ],
                dest: './public/assets/js/app.js'
            }
        },
        less: {
            development: {
                options: {
                    compress: true, //minify
                },
                files: {
                //compile main stylesheet
                './public/assets/css/style.css' : './app/assets/less/style.less',
                './public/assets/css/style-desktop.css' : './app/assets/less/style-desktop.less'
                }
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            dist: {
                files: {
                    './public/assets/js/app.js' : './public/assets/js/app.js'
                }
            }
        },
        copy: {
            fontawesome: {
                files: [
                    { expand: true, cwd: './bower_components/font-awesome/fonts/', src: ['**'], dest: './public/assets/fonts/' }
                ]
            }
        },
        phpunit: {
            classes: {
                dir: './app/tests/'
            },
            options: {
                bin: 'phpunit',
                colors: true
            }
        },
        watch: {
            js: {
                files: ['./app/assets/js/*.*'],
                tasks: ['concat:javascript', 'uglify'],
                options: {
                    livereload: true
                }
            },
            less: {
                files: ['./app/assets/less/*.*'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            },
            tests: {
                files: ['./app/controllers/*.php', './app/models/*.php'],
                tasks: ['phpunit']
            }
        }
    });

    //Load plugins
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-phpunit');

    //Define the deault task
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['concat', 'uglify', 'less', 'copy']);
};
