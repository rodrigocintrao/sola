var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var jshint = require('gulp-jshint');
var clean = require('gulp-clean');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var es = require('event-stream');
var imagemin = require('gulp-imagemin');
var changed  = require('gulp-changed');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
var runSequence = require('run-sequence');

gulp.task('images', function() {
    gulp.src(['./dev/images/**/*.jpg','./dev/images/**/*.png'])
        .pipe(changed('./img/'))
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest('./img/'));
});

gulp.task('clean', function(){
  return gulp.src('./js/')
  .pipe(clean());
});

gulp.task('jshint', function(){
  return gulp.src('./dev/scripts/**/*.js')
  .pipe(jshint())
  .pipe(jshint.reporter('default'));
});

gulp.task('mergePlugins', function(){
  return es.merge([
    gulp.src(['bower_components/jquery/dist/jquery.min.js', 'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'bower_components/slick-carousel/slick/slick.min.js'])
  ])
  .pipe(concat('plugins.js'))
  .pipe(gulp.dest('./js/'));
});

gulp.task('uglify', function(){
  return gulp.src('./dev/scripts/**/*.js').pipe(uglify())
  .pipe(concat('main.js'))
  .pipe(gulp.dest('./js/'));
});

gulp.task('sass', function () {
  return gulp.src('./dev/scss/**/*.scss')
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(gulp.dest('./'));
});

gulp.task('watch', function(){
  return gulp.watch(['./dev/scss/**/*.scss','./dev/scripts/**/*.js'], ['sass','uglify']);
});

gulp.task('serve', function () {
    var files = [
      './style.css',
      './**/*.php ',
      './js/main.js'
    ];
    browserSync.init(files, {
        proxy: 'http://localhost/sola',
        notify: false
    });

    gulp.watch('*').on('change', reload);
});

gulp.task('default', function(cb){
  return runSequence('clean', ['images','jshint','mergePlugins','uglify','sass','watch','serve'], cb);
});
