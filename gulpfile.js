'use strict';
 
var gulp = require('gulp');
var watch = require('gulp-sass');
 
gulp.task('sass', function () {
  return gulp.src('src/sass/**/*.scss')
    .pipe(watch().on('error', watch.logError))
    .pipe(gulp.dest('./css'));
});

var cleanCSS = require('gulp-clean-css');
 
gulp.task('minify-css', function() {
  return gulp.src('styles/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('dist'));
});

 
gulp.task('default', function () {
  gulp.watch('src/sass/**/*.scss', ['sass']);
});