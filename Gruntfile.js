//Gruntfile
module.exports = function(grunt) {

    //Initializing the configuration object
    grunt.initConfig({
        
        concat: {

        },

        less: {
            development: {
                
                options: {
                    compress: true, //minify
                },
                
                files: {
                //compile main stylesheet
                "./public/css/styles.css":"./app/assets/less/styles.less"
                }
            }
        },

        uglify: {

        },
        
        phpunit: {

        },

        watch: {

        }

    });

    //Load plugins
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-phpunit');
};
