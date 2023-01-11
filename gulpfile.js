const { src, dest, watch, series } = require('gulp');
var gulp = require('gulp'); 
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync').create();
const imageOptim = require('gulp-imageoptim');
let siteName = 'imaginarians';

// Sass Task
function scssTask(){
  return src('app/scss/style.scss', { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    .pipe(dest('dist', { sourcemaps: '.' }));
}

//Image Optim
gulp.task('images', function() {
  return gulp.src('app/images/**/*')
      .pipe(imageOptim.optimize())
      .pipe(gulp.dest('dist/images'));
});

// JavaScript Task
function jsTask(){
  return src('app/js/script.js', { sourcemaps: true })
    .pipe(terser())
    .pipe(dest('dist', { sourcemaps: '.' }));
}

// Browsersync Tasks
function browsersyncServe(cb){
  browsersync.init({
    // server: {
    //   baseDir: './',
    //   // proxy: '127.0.0.1', // 'dev.site.com' in your example
    //   // port: 10068

    // }

    proxy: 'http://' + siteName + '.local',
    host: siteName + '.local',
    open: 'external',
    port: 3001

  });
  cb();
}

function browsersyncReload(cb){
  browsersync.reload();
  cb();
}

// Watch Task
function watchTask(){
  watch('*.html', browsersyncReload);
  watch(['app/scss/**/*.scss', 'app/js/**/*.js', '**/*.php'], series(scssTask, jsTask, browsersyncReload));
}

// Default Gulp task
exports.default = series(
  scssTask,
  jsTask,
  browsersyncServe,
  watchTask
);