"use strict";
const gulp  = require('gulp');
const sass  = require('gulp-sass');
const bS    = require('browser-sync');

gulp.task('bS', function(){
    bS({
        proxy: 'http://127.0.0.1:8000'
    })
});
gulp.task('sass', function () {
    return gulp.src('resources/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'))
        .pipe(bS.reload({stream: true}))
});

gulp.task('watch', function(){
    gulp.watch('resources/sass/**/*.scss', gulp.parallel('sass'));
});

gulp.task('default', gulp.parallel('bS', 'sass', 'watch'));