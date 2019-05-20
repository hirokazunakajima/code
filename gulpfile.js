var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Static Server + watching scss/html files
gulp.task('sync-browser', function() {

    browserSync.init({
    	port:3000,
        proxy: "hirokazunakajima.local/code/",
        files:["**/*.php"],
        open:"external",
    });
});


gulp.task('watch', ['sync-browser']);