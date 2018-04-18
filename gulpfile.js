var gulp = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    browserSync = require('browser-sync'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    //jshint = require('gulp-jshint'),
    header  = require('gulp-header'),
    rename = require('gulp-rename'),
    cssnano = require('gulp-cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    package = require('./package.json');


var banner = [
  '/*!\n' +
  ' * <%= package.name %>\n' +
  ' * <%= package.title %>\n' +
  ' * <%= package.url %>\n' +
  ' * @author <%= package.author %>\n' +
  ' * @version <%= package.version %>\n' +
  ' * Copyright ' + new Date().getFullYear() + '. <%= package.license %> licensed.\n' +
  ' */',
  '\n'
].join('');

gulp.task('css', function () {
    return gulp.src('src/scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 4 version'))
    .pipe(gulp.dest('css'))
    .pipe(cssnano())
    .pipe(rename({ suffix: '.min' }))
    .pipe(header(banner, { package : package }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('js',function(){
  gulp.src('src/js/app.js')
    .pipe(sourcemaps.init())
    //.pipe(jshint('.jshintrc'))
    //.pipe(jshint.reporter('default'))
    .pipe(header(banner, { package : package }))
    .pipe(gulp.dest('js'))
    .pipe(uglify())
    .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
    .pipe(header(banner, { package : package }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('js'))
    .pipe(browserSync.reload({stream:true, once: true}));
});

gulp.task('vendors', function() {
    gulp.src('src/js/vendors/**/*.js')
        .pipe(concat('plugins.js'))
        .pipe(header(banner, { package : package }))
        .pipe(gulp.dest('js'))
        .pipe(rename('plugins.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'))
        .pipe(browserSync.reload({stream:true, once: true}));
});

gulp.task('browser-sync', function() {
    browserSync.init(null, {
        //proxy: "*.dev",
        server: {
            baseDir: "./"
        },
        notify: false // set True for notifcations
    });
});
gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('default', ['css', 'js', 'vendors', 'browser-sync'], function () {
    gulp.watch("src/scss/**/*.scss", ['css']);
    gulp.watch("src/js/*.js", ['js']);
    gulp.watch("src/js/vendors/*.js", ['js']);
    gulp.watch("*.html", ['bs-reload']);
});
