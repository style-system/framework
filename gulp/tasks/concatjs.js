/*--------------------------------------------------------------
    CONCATENATE ALL FILES .JS
--------------------------------------------------------------*/
var gulp    = require('gulp');
var concat  = require('gulp-concat');

gulp.task('concatjs', function() {
    return gulp.src([
		// Jquery
		

		// All Functions
        '../src/js/slick.js',
        '../src/js/filter-mobile.js',
        '../src/js/slide-menu.js',
        '../src/js/stick-menu.js',
        '../src/js/jquery.flexslider.js',
     	'../src/js/app.js',
  ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('../static/js/'));
});
