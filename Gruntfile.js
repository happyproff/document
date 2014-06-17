module.exports = function(grunt)
{
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		phpunit: {
			tests: {
				options: {
					bin: 'vendor/bin/phpunit'
				}
			}
		},

		watch: {
			config: {
				files: 'Gruntfile.js',
				options: {
					reload: true
				}
			},

			classes: {
				files: 'src/**/*.php',
				tasks: ['phpunit:tests']
			},

			tests: {
				files: 'tests/**/*Test.php',
				tasks: ['phpunit:tests']
			}
		}
	})

	grunt.loadNpmTasks('grunt-contrib-watch')
	grunt.loadNpmTasks('grunt-phpunit')

	grunt.registerTask('default', ['watch'])
}