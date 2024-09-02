const { src, dest, watch, parallel, series }  = require('gulp');

const sass          = require('gulp-dart-sass');
const concat        = require('gulp-concat');
const uglify        = require('gulp-uglify-es').default;
const autoprefixer  = require('gulp-autoprefixer');
const imagemin      = require('gulp-imagemin');
const del           = require('del');


function cleanDist() {
  return del('dist')
}

function images() {
  return src('assets/images/**/*')
    .pipe(imagemin(
      [
        imagemin.gifsicle({ interlaced: true }),
        imagemin.mozjpeg({ quality: 75, progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
        imagemin.svgo({
          plugins: [
            { removeViewBox: true },
            { cleanupIDs: false }
          ]
        })
      ]
    ))
    .pipe(dest('dist/images'))
}

function scripts() {
  return src([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/swiper/swiper-bundle.min.js',
    'node_modules/@fancyapps/ui/dist/fancybox.umd.js',
    'assets/js/libs/phoneinput.js',
    'assets/js/main.js'
  ])
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(dest('assets/js'))
}


function styles() {
  return src([
    'node_modules/swiper/swiper-bundle.min.css',
    'node_modules/@fancyapps/ui/dist/fancybox.css',
    'node_modules/normalize.css/normalize.css', 
    'assets/scss/style.scss'
  ])
      .pipe(sass({outputStyle: 'compressed'}))
      .pipe(concat('style.min.css'))
      .pipe(autoprefixer({
        overrideBrowserslist: ['last 10 version'],
        grid: true
      }))
      .pipe(dest('assets/css'))
}

function build() {
  return src([
    'assets/css/style.min.css',
    'assets/fonts/**/*',
    'assets/js/main.min.js',
    'assets/*.html'
  ], {base: 'assets'})
    .pipe(dest('dist'))
}

function watching() {
  watch(['assets/scss/**/*.scss'], styles);
  watch(['assets/js/**/*.js', '!assets/js/main.min.js'], scripts);
}

exports.styles = styles;
exports.watching = watching;
exports.scripts = scripts;
exports.images = images;
exports.cleanDist = cleanDist;


exports.build = series(cleanDist, images, build);
exports.default = parallel(styles, scripts, watching);


