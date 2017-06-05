var babel = require('rollup-plugin-babel');
var resolve = require('rollup-plugin-node-resolve');

module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		rollup: {
			options: {
				format: 'iife',
				plugins: function() {
					return [
						babel({
							exclude: './node_modules/**'
						})
					];
				}
			},
			dist: {
				files: {
					'assets/js/dist/bundle.js': ['assets/js/app.js']
				}
			}
		},
		sass: {
			dist: {
				files: {
					'assets/css/app.css': 'assets/sass/app.scss'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			},
			js: {
				files: '**/*.js',
				tasks: ['rollup']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-rollup');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default', ['watch', 'uglify']);
};

