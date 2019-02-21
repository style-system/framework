/*--------------------------------------------------------------
    PERFOMS TAKS SASS, CONCATJS
--------------------------------------------------------------*/
var gulp = require('gulp');

gulp.task('default', ['sass', 'concatjs','jsmin'], function(){
    gulp.watch('../src/sass/**/*.scss', ['sass']);
    gulp.watch('../src/js/**/*.js', ['concatjs']);
    gulp.watch('../src/js/**/*.js', ['jsmin']);
});