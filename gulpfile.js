"use strict";
const gulp  = require('gulp');
const sass  = require('gulp-sass');
const bS    = require('browser-sync');


/**
 * Browser-sync.
 */
gulp.task('bS', function(){
    bS.init({
        proxy: 'http://127.0.0.1:8000'
    });
});

/**
 * Sass/SCSS plugin.
 */
gulp.task('sass', function () {
    return gulp.src('resources/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'))
        .pipe(bS.reload({stream: true}))
});

/**
 * Watch changes.
 */
gulp.task('watch', function(){
    gulp.watch('resources/sass/**/*.scss', gulp.parallel('sass'));
    gulp.watch('resources/views/**/*.blade.php').on('change',bS.reload);
    gulp.watch('app/**/*.php').on('change',bS.reload);
});

/**
 * Default task. Start project.
 */
gulp.task('default', gulp.parallel('bS', 'sass', 'watch'));