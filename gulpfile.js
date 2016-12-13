var gulp = require('gulp');
var livereload = require('gulp-livereload');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function () {
  gulp.src('/Applications/MAMP/htdocs/My-Portfolio/wp-content/themes/MyPorfolio/sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compact'}).on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('/Applications/MAMP/htdocs/My-Portfolio/wp-content/themes/MyPorfolio'));
});

gulp.task('watch', function(){
    livereload.listen();
    gulp.watch('/Applications/MAMP/htdocs/My-Portfolio/wp-content/themes/MyPorfolio/sass/**/*.scss', ['sass']);
    gulp.watch(['/Applications/MAMP/htdocs/My-Portfolio/wp-content/themes/MyPorfolio/style.css'], function (files){
        livereload.changed(files);
    });
});
