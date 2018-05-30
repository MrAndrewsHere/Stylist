const gulp = require('gulp');
const sass = require('gulp-sass');
const minifyCss = require('gulp-clean-css'); // минификация css
const plumber = require('gulp-plumber'); // отлавливает ошибки в себя
const browserSync = require('browser-sync').create(); // перезагрузка страницы после изменения файлов
const imagemin = require('gulp-imagemin'); // оптимизация изображений
const newer = require('gulp-newer'); // добавляет только новые файлы
const rename = require('gulp-rename'); // переименовывает файлы
const svgstore = require('gulp-svgstore'); // создает svg спрайт
const svgmin = require('gulp-svgmin'); // минифицирует svg
// const del = require("del"); // удаляет файлы и папки
const run = require('run-sequence'); // для последовательного запуска задач
const autoprefixer = require('gulp-autoprefixer'); // добавляет автопрефиксеры
const concat = require('gulp-concat'); // конкатиниция
// const uglify = require('gulp-uglify');


const path = {
  root: '/',
  src: {
    pug: 'src/pug/**/*.pug',
    scss: 'src/scss/style.scss',
    js: 'src/js/*.js',
    img: 'src/img/**/*.*',
    spritesvg: 'src/img/icons/*.svg',
    fonts: 'src/fonts/**/*.{woff,woff2}',
  },
  build: {
    pug: 'public/',
    scss: 'public/css/',
    js: 'public/js/',
    img: 'public/img/',
    fonts: 'public/fonts/',
  },
  watch: {
    pug: 'src/pug/**/*.pug',
    scss: 'src/scss/**/*.scss',
    js: 'src/js/*.js',
    img: ['!src/img/icons/*', 'src/img/**/*.*'],
    spritesvg: 'src/img/icons/*.svg',
    fonts: 'src/fonts/*.{woff,woff2}',
  },
};

// css
gulp.task('css', () => gulp
  .src(path.src.scss)
  .pipe(plumber())
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(sass())
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
  }))
  .pipe(minifyCss())
  .pipe(gulp.dest(path.build.scss))
  .pipe(browserSync.stream()));

// js
gulp.task('js', () => gulp
  .src(['src/js/slick.js', 'src/js/main.js', 'src/js/dialog.js', 'src/js/filter.js'])
  .pipe(concat('scripts.js'))
  .pipe(gulp.dest(path.build.js))
  .pipe(browserSync.stream()));

// img
gulp.task('img', () => gulp
  .src(path.src.img)
  .pipe(newer(path.build.img))
  .pipe(imagemin([
    imagemin.optipng({ optimizationLevel: 3 }),
    imagemin.jpegtran({ progressive: true }),
  ]))
  .pipe(gulp.dest(path.build.img))
  .pipe(browserSync.stream()));

// svg-sprite
gulp.task('spritesvg', () => gulp
  .src(path.src.spritesvg)
  .pipe(svgmin())
  .pipe(svgstore({ inlineSvg: true }))
  .pipe(rename('spritesvg.svg'))
  .pipe(gulp.dest(path.build.img))
  .pipe(browserSync.stream()));

// fonts
gulp.task('fonts', () => gulp
  .src(path.src.fonts)
  .pipe(newer(path.build.fonts))
  .pipe(gulp.dest(path.build.fonts))
  .pipe(browserSync.stream()));

// public
gulp.task('public', (fn) => {
  run('css', 'js', 'img', 'spritesvg', 'fonts', fn);
});

// server
gulp.task('serve', () => {
  browserSync.init({
    proxy: '127.0.0.1',
    port: 8080,
  });

  gulp.watch(path.watch.scss, ['css']);
  gulp.watch(path.watch.js, ['js']);
  gulp.watch(path.watch.img, ['img']);
  gulp.watch(path.watch.spritesvg, ['spritesvg']);
  gulp.watch(path.watch.fonts, ['fonts']);
});

// default
gulp.task('default', (fn) => {
  run('public', ['serve'], fn);
});

