const gulp = require('gulp');
const concat = require('gulp-concat');
const minifyCSS = require('gulp-clean-css');
const minifyJS = require('gulp-uglify');

// CSS task
gulp.task('css', function() {
  return gulp.src([
      'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900',
      'web/css/slide/owl.carousel.min.css',
      'web/css/slide/owl.theme.default.min.css',
      'web/css/slide/style.css',
      'web/css/clothes/selectedClothes.css'
    ])
    .pipe(concat('allstyles.css'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('style/css'));
});

// JS task
gulp.task('js', function() {
  return gulp.src([
      'web/js/slide/jquery.min.js',
      'web/js/slide/popper.js',
      'web/js/slide/bootstrap.min.js',
      'web/js/slide/owl.carousel.min.js',
      'web/js/slide/main.js'
    ])
    .pipe(concat('allscripts.js'))
    .pipe(minifyJS())
    .pipe(gulp.dest('style/js'));
});

// Watch task
gulp.task('watch', function() {
  gulp.watch('web/css/slide/*.css', gulp.series('css'));
  gulp.watch('web/js/slide/*.js', gulp.series('js'));
});

// Default task
gulp.task('default', gulp.series('css', 'js', 'watch'));