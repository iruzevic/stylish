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
        uglify: {
            dev: {
                options: {
                    mangle: false,
                    beautify: true
                },
                files: [{
                    expand: true,
                    cwd: 'js',
                    src: '**/*.js',
                    dest: rootDir + 'js'
                }]
            },
            prod: {
                options: {
                    mangle: false,
                    beautify: false
                },
                files: [{
                    expand: true,
                    cwd: 'js',
                    src: '**/*.js',
                    dest: rootDir + 'js'
                }]
            }
        },

        watch: {
            compass: {
                files: ['stylish/{,*/}*.scss'],
                tasks: ['compass:dev']
            },
            scripts: {
                files: ['js/*.js'],
                tasks: ['uglify:dev']
            },
            images: {
                files: ['images/*.{png,jpg,gif}'],
                tasks: ['imagemin']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    //DEV task
    grunt.registerTask('dev', [
        'clean:images', 'clean:js', 'clean:css', 'compass:dev', 'imagemin', 'uglify:dev'
    ]);

    //Production
    grunt.registerTask('prod', [
        'clean:images', 'clean:js', 'clean:css', 'compass:prod', 'imagemin', 'uglify:prod'
    ]);

};