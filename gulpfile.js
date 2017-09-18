var gulp = require('gulp');
/*
 *  Gulp Plugins
 */
var autoprefixer = require('gulp-autoprefixer');
var browserify = require('gulp-browserify');
var rename = require('gulp-rename');
var scss = require('gulp-sass');
var plumber = require('gulp-plumber');
var dirSync = require('gulp-directory-sync');
var shell = require('gulp-shell');

/*
 *    Variables
 */
var paths = {
  "scss": {
    "src": "assets/scss/*.scss",
    "dest": "theme/dist/css/"
  },
  "js": {
    "src": [
      "assets/js/script.js",
      "assets/js/modules/*.js"
    ],
    "dest": "theme/dist/js/"
  },
  "fonts": {
    "src": "assets/fonts/",
    "dest": "theme/dist/fonts/"
  }
};

var space = " ";

/*
 *  Styles Task
 */
gulp.task('styles', function() {
  gulp.src(paths.scss.src)
    .pipe(plumber())
    .pipe(scss({
      style: 'compressed',
      precision: 5,
      includePaths: [
        'node_modules/include-media/dist',
        'node_modules/normalize.css',
      ]
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 version', 'ie 11'],
      cascade: false
    }))
    .pipe(rename('screen.css'))
    .pipe(gulp.dest(paths.scss.dest));
});

/*
 *  Scripts Task
 */
gulp.task('scripts', function() {
  gulp.src(paths.js.src)
    .pipe(plumber())
    .pipe(browserify())
    .pipe(gulp.dest(paths.js.dest));
});

/*
 *  Copy Task
 */

gulp.task('sync', shell.task([
  'echo "Deleting up public theme folder..."',
  'rm -rf public/wp-content/themes/michaelbermann/*',
  'echo "Copying slick files..."',
  'cp -rf assets/css/ theme/dist/css',
  'echo "Copying fonts..."',
  'rm -rf theme/dist/fonts',
  'mkdir -p theme/dist/fonts',
  'cp -rf assets/fonts theme/dist/fonts',
  'echo Copying themes folder to public...',
  'mkdir -p public/wp-content/themes/michaelbermann',
  'cp -rf theme/* public/wp-content/themes/michaelbermann',
  'echo "✨ Finished gulp sync"',
]));
/*
 *  Watch Task
 */
gulp.task('watch', function() {
  gulp.watch(paths.scss.src, ['styles', 'sync']);
  gulp.watch(paths.js.src, ['scripts', 'sync']);
  gulp.watch('theme/**/*.php', ['sync']);
});

/*
 *  Build Task
 */
gulp.task('default', ['production', 'watch']);
gulp.task('production', ['styles', 'scripts', 'sync']);
