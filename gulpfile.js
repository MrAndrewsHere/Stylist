const gulp = require('gulp'),
  blade = require('gulp-blade'),
  sass = require('gulp-sass'),
  plumber = require('gulp-plumber'), // отлавливает ошибки в себя
  browserSync = require('browser-sync').create(), // перезагрузка страницы после изменения файлов
  imagemin = require('gulp-imagemin'), // оптимизация изображений
  newer = require('gulp-newer'), // добавляет только новые файлы
  rename = require('gulp-rename'), // переименовывает файлы
  svgstore = require('gulp-svgstore'), // создает svg спрайт
  svgmin = require('gulp-svgmin'), // минифицирует svg
  // del = require("del"), // удаляет файлы и папки
  run = require('run-sequence'), // для последовательного запуска задач
  autoprefixer = require('gulp-autoprefixer'); // добавляет автопрефиксеры


const path = {
  root: '/',
  src: {
    pug: 'src/pug/**/*.pug',
    scss: 'src/scss/style.scss',
    js: 'src/js/*.js',
    img: 'src/img/**/*.*',
    spritesvg: 'src/img/icons/*.svg',
    fonts: 'src/fonts/**/*.{woff,woff2}'
  },
  build: {
    pug: 'public/',
    scss: 'public/css/',
    js: 'public/js/',
    img: 'public/img/',
    fonts: 'public/fonts/'
  },
  watch: {
    pug: 'src/pug/**/*.pug',
    scss: 'src/scss/**/*.scss',
    js: 'src/js/*.js',
    img: ['!src/img/icons/*', 'src/img/**/*.*'],
    spritesvg: 'src/img/icons/*.svg',
    fonts: 'src/fonts/*.{woff,woff2}'
  },
};

gulp.task('compile', function () {
  gulp.src('*.blade')
    .pipe(blade())
    .pipe(gulp.dest('resources/views'));
});

// css
gulp.task('css', function () {
  return gulp
    .src(path.src.scss)
    .pipe(plumber())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(sass())
    .pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
    .pipe(gulp.dest(path.build.scss))
    .pipe(browserSync.stream());
});

//js
gulp.task('js', function () {
  return gulp
    .src(path.src.js)
    .pipe(gulp.dest(path.build.js))
    .pipe(browserSync.stream());
});

// img
gulp.task('img', function () {
  return gulp
    .src(path.src.img)
    .pipe(newer(path.build.img))
    .pipe(gulp.dest(path.build.img))
    .pipe(browserSync.stream());
});

gulp.task('imgmin', ['img'], function () {
  return gulp
    .src('public/img/**/*{jpg,png}')
    .pipe(
      imagemin([
        imagemin.optipng({ optimizationLevel: 3 }),
        imagemin.jpegtran({ progressive: true })
      ])
    )
    .pipe(gulp.dest(path.build.img))
    .pipe(browserSync.stream());
});

// svg-sprite
gulp.task('spritesvg', function () {
  return gulp
    .src(path.src.spritesvg)
    .pipe(svgmin())
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename('spritesvg.svg'))
    .pipe(gulp.dest(path.build.img))
    .pipe(browserSync.stream());
});

// fonts
gulp.task('fonts', function () {
  return gulp
    .src(path.src.fonts)
    .pipe(newer(path.build.fonts))
    .pipe(gulp.dest(path.build.fonts))
    .pipe(browserSync.stream());
});

// public
gulp.task('public', function (fn) {
  run('css', 'js', 'imgmin', 'spritesvg', 'fonts', fn);
});

// server
gulp.task('serve', function () {
  browserSync.init({
    proxy: '127.0.0.1',
    port: 8080
  });

  gulp.watch(path.watch.scss, ['css']);
  gulp.watch(path.watch.js, ['js']);
  gulp.watch(path.watch.img, ['imgmin']);
  gulp.watch(path.watch.spritesvg, ['spritesvg']);
  gulp.watch(path.watch.fonts, ['fonts']);
});

// default
gulp.task('default', function (fn) {
  run('public', ['serve'], fn);
});

