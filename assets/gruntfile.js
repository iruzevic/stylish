module.exports = function(grunt){

    //Default
    var rootDir = '../';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //Generate
        compass: {
            dev: {
                options: {
                    httpPath: '/',
                    sassDir: 'stylish',
                    cssDir: rootDir + 'css',
                    imagesDir: rootDir + 'images',
                    javascriptsDir: rootDir + 'js',
                    fontsDir: rootDir + 'fonts',
                    cacheDir:  'stylish/.sass_cache',
                    relativeAssets: true,
                    environment: 'development'
                }
            },
            prod: {
                options: {
                    httpPath: '/',
                    sassDir: 'stylish',
                    cssDir: rootDir + 'css',
                    imagesDir: rootDir + 'images',
                    javascriptsDir: rootDir + 'js',
                    fontsDir: rootDir + 'fonts',
                    cacheDir:  'stylish/.sass_cache',
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
                    cwd: 'images/',
                    src: '**/*.{png,jpg,gif}',
                    dest: rootDir + 'images/'
                }]
            }
        },

        //Remove generated folders
        clean: {
            images: {
                options: {
                    force: true
                },
                src: [rootDir + 'images']
            },
            js: {
                options: {
                    force: true
                },
                src: [rootDir + 'js']
            },
            css: {
                options: {
                    force: true
                },
                src: [rootDir + 'css']
            }
        },

        //Compress js
        concat: {
            js: {
                options: {
                    block: true,
                    line: true,
                    stripBanners: true,
                    sourceMap: true,
                    sourceMapName : rootDir + '/js/sourceMap.map'
                },
                files: {
                    '../js/combine.min.js' : [
                        'js/modernizr.js',
                        'js/placeholder.js',
                        'js/equalHeight.js',
                        'js/script.js',
                        'js/custom.js'
                    ]
                }
            }
        },
        uglify: {
            dev: {
                options: {
                    mangle: false,
                    beautify: true,
                    sourceMap: true,
                    sourceMapName: rootDir + '/js/sourceMap.map'
                },
                files: {
                    '../js/combine.min.js': [
                        '../js/combine.min.js'
                    ]
                }
            },
            prod: {
                options: {
                    mangle: false,
                    beautify: false,
                    sourceMap : true,
                    sourceMapName : rootDir + '/js/sourceMap.map'
                },
                files: {
                    '../js/combine.min.js': [
                        '../js/combine.min.js'
                    ]
                }
            }
        },

        watch: {
            compass: {
                files: ['stylish/**/*.scss'],
                tasks: ['newer:compass:dev']
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['newer:uglify:dev']
            },
            images: {
                files: ['images/*.{png,jpg,gif}'],
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