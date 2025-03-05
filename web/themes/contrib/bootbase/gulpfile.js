/**
 * @file
 * Gulp pipe.
 */

'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const touch = require('gulp-touch-cmd');
const plumber = require('gulp-plumber');
const sourcemaps = require('gulp-sourcemaps');

// Bootstrap SASS -> CSS.
gulp.task('bootstrap', function () {
  return gulp.src('./bootstrap5/scss/bootstrap.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('./bootstrap5/css'));
});

// Theme SASS -> CSS.
gulp.task('sass', function () {
  return gulp.src('./scss/**', {nodir: true})
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write('./_maps'))
    .pipe(gulp.dest('./css/'))
    .pipe(touch());
});

// Watch.
gulp.task('watch', function () {
  gulp.watch('./scss/**', gulp.series('sass'));
});

gulp.task('bower', function (done) {
  const bower = require('gulp-bower');
  bower();
  done();
});

// Copy sources.
gulp.task('copy', function (done) {
  // Bootstrap files.
  gulp.src('./bower_components/bootstrap/scss/**')
    .pipe(gulp.dest('./bootstrap5/scss'));
  gulp.src('./bower_components/bootstrap/dist/js/*.min.js')
    .pipe(gulp.dest('./bootstrap5/js'));
  // 404 fix.
  gulp.src('./bower_components/bootstrap/dist/js/*.js.map')
    .pipe(gulp.dest('./bootstrap5/js'));
  // Flickity.
  var sourceFlickity = [
    './bower_components/flickity/dist/flickity.min.css',
    './bower_components/flickity/dist/flickity.pkgd.min.js'
  ];
  gulp.src(sourceFlickity).pipe(gulp.dest('./js/flickity'));

  // Owl.
  var sourceOwl = [
    './bower_components/owl.carousel/dist/**/*.min.*'
  ];
  gulp.src(sourceOwl).pipe(gulp.dest('./js/owl'));
  var sourceOwlImg = [
    './bower_components/owl.carousel/dist/assets/*.png',
    './bower_components/owl.carousel/dist/assets/*.gif'
  ];
  gulp.src(sourceOwlImg).pipe(gulp.dest('./js/owl/assets'));
  return done();
});

gulp.task('update', gulp.series('bower', 'copy', function (done) {
  return done();
}));

gulp.task('default', gulp.parallel('bootstrap', 'sass', 'watch'));
