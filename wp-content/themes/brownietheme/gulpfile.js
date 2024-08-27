const gulp = require('gulp');
const gulp = require('gulp-sass')(require('sass'));

gulp.task('sass',function () {
    return gulp.src('./scss/*.scss')
});