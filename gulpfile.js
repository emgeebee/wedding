'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  gulp.src('./resources/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./public/css'));

  gulp.src('./resources/images/*')
    .pipe(gulp.dest('./public/img'))
});

gulp.task('sass:watch', function () {
  gulp.watch('./resources/scss/**/*.scss', ['sass']);
});
