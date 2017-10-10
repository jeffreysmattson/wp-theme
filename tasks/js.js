module.exports = function( grunt ) {
	grunt.registerTask( 'js', [ 'concat', 'uglify' ] );
};

/*'eslint','jscs',  */