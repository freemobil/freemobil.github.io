
'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var npmDist = require('gulp-npm-dist');

gulp.task('sass-css', function(){
  return gulp.src('scss/cassie.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('minify-css', function(){
  return gulp.src('scss/cassie.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// styles for skins
gulp.task('sass-skins', function(){
  return gulp.src('scss/skins/*.scss')
    .pipe(sass())
    .pipe(rename({prefix: 'skin.'}))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('docs-css', function(){
  return gulp.src('scss/docs.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('landing-css', function(){
  return gulp.src('scss/landing.scss')
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: true
  })
});

gulp.task('serve', ['browserSync'], function() {
  gulp.watch('scss/**/*.scss', ['sass-css']);
  gulp.watch('scss/skins/*.scss', ['sass-skins']);
  gulp.watch('pages/**/*.html', browserSync.reload);
  gulp.watch('components/**/*.html', browserSync.reload);
  gulp.watch('assets/js/*.js', browserSync.reload);
  gulp.watch('scss/docs.scss', ['docs-css']);
  gulp.watch('scss/landing.scss', ['landing-css']);
  gulp.watch('index.html', browserSync.reload);
});

// Copy dependencies to lib/
gulp.task('npm-lib', function() {
  gulp.src(npmDist(), {base:'./node_modules/'})
    .pipe(rename(function(path) {
      path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
    }))
    .pipe(gulp.dest('lib'));
});
