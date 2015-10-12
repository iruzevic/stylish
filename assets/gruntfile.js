module.exports = function(grunt){

    //Default
    var $outputDir = '../';

    var $frameworkDir = 'stylish/';
    var $jsDir = 'js/';
    var $cssDir = 'css/';
    var $imgDir = 'images/';
    var $fontsDir = 'fonts/';


    var $jsOutputDir = $outputDir + $jsDir;
    var $cssOutputDir = $outputDir + $cssDir;
    var $imgOutputDir = $outputDir + $imgDir;
    var $fontsOutputDir = $outputDir + $fontsDir;

    var $jsFiles = [
        $jsDir + 'modernizr.min.js',
        $jsDir + 'equalHeight.min.js',
        $jsDir + 'placeholder.min.js',
        $jsDir + 'script.js',
        $jsDir + 'custom.js'
    ];

    var $jsSource = $jsOutputDir + 'sourceMap.map';

    var $jsCombine = [ $jsOutputDir + 'global_script.min.js'];


    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //Generate
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
                    src: '**/*.{png,jpg,gif}',
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

        //Compress js
        concat: {
            dist:{
                options: {
                    separator: ';',
                    block: true,
                    line: true,
                    stripBanners: true,
                    sourceMap: true,
                    sourceMapName : $jsSource
                },
                files: {
                    '../js/global_script.min.js': $jsFiles
                }
            }
        },
        uglify: {
            dev: {
                options: {
                    mangle: false,
                    beautify: true,
                    sourceMap: true,
                    sourceMapName: $jsSource
                },
                files: {
                    '../js/global_script.min.js': $jsCombine
                }
            },
            prod: {
                options: {
                    mangle: false,
                    beautify: false,
                    sourceMap: true,
                    sourceMapName: $jsSource
                },
                files: {
                    '../js/global_script.min.js': $jsCombine
                }
            }
        },

        watch: {
            compass: {
                files: [$frameworkDir + '**/*.scss'],
                tasks: ['compass:dev']
            },
            scripts: {
                files: [$jsDir + '*.js'],
                tasks: ['concat']
            },
            images: {
                files: [$imgDir + '*.{png,jpg,gif}'],
                tasks: ['newer:imagemin']
            }
        }
    });

    require('load-grunt-tasks')(grunt);

    //DEV task
    grunt.registerTask('dev', [
        'clean:images', 'clean:js', 'clean:css', 'compass:dev', 'imagemin', 'concat', 'uglify:dev'
    ]);

    //Production
    grunt.registerTask('prod', [
        'clean:images', 'clean:js', 'clean:css', 'compass:prod', 'imagemin', 'concat', 'uglify:prod'
    ]);
};