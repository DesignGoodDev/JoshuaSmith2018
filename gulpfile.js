var gulp = require('gulp');
    gutil = require('gulp-util'),
    plugin = require('gulp-load-plugins')();

gulp.task('styles', function() {
  return gulp.src('styles/scss/**/*.scss') // Gets all files ending with .scss in styles/scss and children dirs
    .pipe(plugin.plumber(function(error) {
      gutil.log(gutil.colors.cyan(error.message));
      this.emit('end');
    }))
    .pipe(plugin.sourcemaps.init())
		.pipe(plugin.sass())
		.pipe(plugin.autoprefixer({
			browsers: [
				'last 2 versions',
				'ie >= 9',
				'ios >= 7'
			],
			cascade: false
		}))
		.pipe(plugin.cssnano())
    .pipe(plugin.sourcemaps.write('.'))
    .pipe(gulp.dest('styles/css'));
});

gulp.task('watch', function() {
	// Watch .scss files
	gulp.watch('styles/scss/**/*.scss', gulp.parallel('styles'));

});

gulp.task('default', gulp.parallel('styles'));