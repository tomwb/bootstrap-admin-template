var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');

var jsFiles = 'assets/js/**/*.js',
    jsDest = 'assets/dist/js';

var cssFiles = 'assets/scss/**/*.scss',
    cssDest = 'assets/dist/css';

//task para o script
gulp.task('scripts', function() {
    return gulp.src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        jsFiles
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest(jsDest))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsDest));
});

//task para o script watch
gulp.task('scripts:watch', function() {
    return gulp.watch(jsFiles, ['scripts']);
});

//task para o sass
gulp.task('sass', function() {
    return gulp.src(cssFiles)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(rename('main.min.css'))
        .pipe(gulp.dest(cssDest));
});

//task para o sass watch
gulp.task('sass:watch', function() {
  return gulp.watch(cssFiles, ['sass']);
});

// task para fontes
gulp.task('fonts', function() {
    return gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/*')
        .pipe(gulp.dest('assets/webfonts'));
});

gulp.task('default', ['scripts', 'sass', 'fonts']);
gulp.task('watch', ['sass:watch', 'scripts:watch', 'fonts']);