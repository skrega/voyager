import gulp from 'gulp';
import dartSass from 'gulp-dart-sass';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify-es';
import { deleteAsync } from 'del';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';

// Деструктуризация экспорта gulp
const { src, dest, watch, parallel, series } = gulp;
const sass = dartSass; // Используем gulp-dart-sass с ES-модулями
const uglifyES = uglify.default; // Используем gulp-uglify-es с ES-модулями


function cleanDist() {
  return deleteAsync('dist');
}

function scripts() {
  return src([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/swiper/swiper-bundle.min.js',
    'node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js',
    'assets/js/libs/phoneinput.js',
    'assets/js/main.js',
  ])
    .pipe(concat('main.min.js'))
    .pipe(uglifyES())
    .pipe(dest('assets/js'));
}

function styles() {
  return src([
    'node_modules/swiper/swiper-bundle.min.css',
    'node_modules/@fancyapps/ui/dist/fancybox/fancybox.css',
    'node_modules/normalize.css/normalize.css',
    'assets/scss/style.scss',
  ])
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(concat('style.min.css'))
    .pipe(postcss([autoprefixer()]))
    .pipe(dest('assets/css'));
}

function build() {
  return src(
    [
      'assets/css/style.min.css',
      'assets/fonts/**/*',
      'assets/js/main.min.js',
      'assets/*.html',
    ],
    { base: 'assets' }
  ).pipe(dest('dist'));
}

function watching() {
  watch(['assets/scss/**/*.scss'], styles);
  watch(['assets/js/**/*.js', '!assets/js/main.min.js'], scripts);
}

export { styles, watching, scripts,  cleanDist };

export const buildTask = series(cleanDist, build);
export default parallel(styles, scripts, watching);
