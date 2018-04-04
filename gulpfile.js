var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    minifyCSS = require('gulp-csso'),
    concat = require('gulp-concat');
gulp.task('sass', function(){
    return watch('css/**/*.scss', function(){
        gulp.src('css/**/*.scss')
            .pipe(sass().on('error', sass.logError))
            .pipe(sourcemaps.init())
            .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                cascade: false
            }))
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest('css'))
    });
})

gulp.task('build-css', function(){
    return gulp
        .src('css/**/*.css')
        .pipe(minifyCSS())
        .pipe(concat('build.min.css'))
        .pipe(gulp.dest('css'))
});


gulp.task('default', ['sass']);