var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    rename = require('gulp-rename'),
    livereload = require('gulp-livereload'),
    // gutil = require('gulp-util'),
    ftp = require('gulp-ftp')


gulp.task('styles', function () {
    gulp.src('scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(gulp.dest('./'))

    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('./'))
        .pipe(livereload())
        .pipe(notify({message: 'stytes be done bro bro' }));
        
});
gulp.task('scripts', function(){
    gulp.src('js/scripts.js')
        .pipe(rename({suffix:'.min'}))
        .pipe(gulp.dest('js'))
        .pipe(livereload())
        .pipe(notify({message: 'scripts task complete' }));
});


gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('scss/**/*.scss',['styles']);
    gulp.watch('js/**/*.js',['scripts']);

});

