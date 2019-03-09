'use strict';

var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./Resources/Private/SCSS/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('/'))
        .pipe(gulp.dest('./Resources/Public/Css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./Resources/Private/SCSS/**/*.scss', ['sass']);
});