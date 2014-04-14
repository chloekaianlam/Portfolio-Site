module.exports = function(grunt) {

    // Load the all the plugins that Grunt requires
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        smushit: {
            default: {
                src: [
                    'assets/image/**/*.png',
                    'assets/image/**/*.jpg',
                    'assets/image/**/*.jpeg',
                    '!assets/image/o/*'
                ],
                dest: 'assets/image/o'
            }
        },

        modernizr: {
            // [REQUIRED] Path to the build you're using for development.
            "devFile" : "assets/js/libs/modernizr.js",
            // [REQUIRED] Path to save out the built file.
            "outputFile" : "assets/js/libs/min/modernizr-custom.min.js",
            // Based on default settings on http://modernizr.com/download/
            "extra" : {
                "shiv" : true,
                "printshiv" : false,
                "load" : false,
                "mq" : false,
                "cssclasses" : true
            },
            // Based on default settings on http://modernizr.com/download/
            "extensibility" : {
                "addtest" : false,
                "prefixed" : false,
                "teststyles" : false,
                "testprops" : false,
                "testallprops" : false,
                "hasevents" : false,
                "prefixes" : false,
                "domprefixes" : false
            },
            // By default, source is uglified before saving
            "uglify" : true,
            // Define any tests you want to impliticly include.
            "tests" : [
                /*
                "flexbox",
                "boxshadow",
                "opacity",
                "localstorage",
                "video",
                "audio",
                "canvas",
                "rgba",
                "flexbox",
                "draganddrop",
                "touch",
                "cssanimations",
                "csstransitions",
                "csstransforms3d",
                "csstransforms",
                "cssgradients",
                "backgroundsize"
                */
            ],
            // By default, this task will crawl your project for references to Modernizr tests.
            // Set to false to disable.
            "parseFiles" : true,
            // When parseFiles = true, this task will crawl all *.js, *.css, *.scss files, except files that are in node_modules/.
            // You can override this by defining a "files" array below.
            "files" : [
                'assets/js/*.js',
                'assets/css/less/*.less'
            ],
            "excludeFiles": [],
            // When parseFiles = true, matchCommunityTests = true will attempt to
            // match user-contributed tests.
            "matchCommunityTests" : false,
            // Have custom Modernizr tests? Add paths to their location here.
            "customTests" : []
        }
    });


    /**
     * Add your own tasks here as needed
     */
    grunt.registerTask('build', [
        'modernizr',
        'smushit'
    ]);

};
