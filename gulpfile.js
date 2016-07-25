// =======================================================================================
// Necessary stuff
// =======================================================================================
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
// =======================================================================================
// =======================================================================================

// =======================================================================================
// Tasks
// =======================================================================================
//default task => gulp
gulp.task('default', [
  'css',
]);

//watch task => gulp watch
gulp.task('watch', function() {
  gulp.watch([
    './src/anekdotes/assets/Form.scss'
  ], ['css']);
});

// css task => gulp ccss
gulp.task('css', function() {
  return gulp.src([
    'src/anekdotes/assets/Form.scss',
    'src/anekdotes/assets/bootstrap.css'
  ])
  .pipe(plumber())
  .pipe(sass())
  .pipe(concat('Form.css'))
  .pipe(minifyCSS({
    'keepBreaks':true
  }))
  .pipe(gulp.dest('./src/anekdotes/assets/min/'));
});
// =======================================================================================
// =======================================================================================

