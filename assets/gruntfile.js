module.exports = function(grunt){

    //Default
    var $outputDir      = '../';

    //Defining assets folders
    var $frameworkDir   = 'stylish/';
    var $jsDir          = 'js/';
    var $cssDir         = 'css/';
    var $imgDir         = 'images/';
    var $fontsDir       = 'fonts/';

    //Defining output folders
    var $jsOutputDir    = $outputDir + $jsDir;
    var $cssOutputDir   = $outputDir + $cssDir;
    var $imgOutputDir   = $outputDir + $imgDir;
    var $fontsOutputDir = $outputDir + $fontsDir;

    //Js files to combine
    var $jsFiles = [
        $jsDir + 'modernizr.min.js',
        $jsDir + 'equalHeight.min.js',
        $jsDir + 'placeholder.min.js',
        $jsDir + 'script.js',
        $jsDir + 'custom.js'
    ];

    //Combine file map file
    var $jsSource = $jsOutputDir + 'sourceMap.map';

    //Combined file output
    var $jsCombineOutput          = $jsOutputDir + 'global_script.min.js';

    var $jsCombine          = [ $jsCombineOutput ];


    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //Generate Css files
        compass: {
            dev: {
                options: {
                    httpPath: '/',
                    sassDir: $frameworkDir,
                    cssDir: $cssOutputDir,
                    imagesDir: $imgOutputDir,
                    javascriptsDir: $jsOutputDir,
                    fontsDir: $fontsOutputDir,
                    cacheDir:  $frameworkDir + '.sass_cache',
                    relativeAssets: true,
                    environment: 'development'
                }
            },
            prod: {
                options: {
                    httpPath: '/',
                    sassDir: $frameworkDir,
                    cssDir: $cssOutputDir,
                    imagesDir: $imgOutputDir,
                    javascriptsDir: $jsOutputDir,
                    fontsDir: $fontsOutputDir,
                    cacheDir:  $frameworkDir + '.sass_cache',
                    relativeAssets: true,
                    environment: 'production'
                }
            }
        },

        //Compress images
        imagemin: {
            default: {
                files: [{
                    expand: true,
                    cwd: $imgDir,
                    src: '**/*.{png,jpg,jpeg,gif,ico}',
                    dest: $imgOutputDir
                }]
            }
        },

        //Remove generated folders
        clean: {
            images: {
                options: {
                    force: true
                },
                src: [$imgOutputDir]
            },
            js: {
                options: {
                    force: true
                },
                src: [$jsOutputDir]
            },
            css: {
                options: {
                    force: true
                },
                src: [$cssOutputDir]
            }
        },

        //Combine Js into single file
        concat: {
            options: {
                separator: ';',
                block: true,
                line: true,
                stripBanners: true,
                sourceMap: true,
                sourceMapName : $jsSource
            },
            global: {
                src: $jsFiles,
                dest: $jsCombineOutput
            }
        },

        //Compress combined files
        uglify: {
            options: {
                mangle: false,
                beautify: false,
                sourceMap: true,
                sourceMapName: $jsSource,
                compress: {
                    drop_console: true
                }
            },
            global: {
                src: $jsCombine,
                dest: $jsCombineOutput
            }
        },

        //Watch changes to files
        watch: {
            compass: {
                files: [$frameworkDir + '**/*.scss'],
                tasks: ['compass:dev']
            },
            scripts: {
                files: [$jsDir + '**/*.js'],
                tasks: ['concat']
            },
            images: {
                files: [$imgDir + '**/*.{png,jpg,jpeg,gif,ico}'],
                tasks: ['newer:imagemin']
            }
        }
    });

    require('load-grunt-tasks')(grunt);

    //DEV task
    grunt.registerTask('dev', [
        'clean:images',
        'clean:js',
        'clean:css',
        'compass:dev',
        'imagemin',
        'concat:global'
    ]);

    //Production task
    grunt.registerTask('prod', [
        'clean:images',
        'clean:js',
        'clean:css',
        'compass:prod',
        'imagemin',
        'concat:global',
        'uglify:global'
    ]);
};