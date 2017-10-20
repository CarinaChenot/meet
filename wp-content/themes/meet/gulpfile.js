const gulp = require('gulp')
const sourcemaps = require('gulp-sourcemaps')
const autoprefixer = require('gulp-autoprefixer')
const rename = require('gulp-rename')
const babel = require('gulp-babel')
const stylus = require('gulp-stylus')
const del = require('del')

const paths = {
  styles: {
    src: 'src/stylus/**/*.styl',
    dest: 'assets/css/'
  },
  scripts: {
    src: 'src/js/**/*.js',
    dest: 'assets/js/'
  },
  images: {
    src: 'src/img/**/*',
    dest: 'assets/img/'
  },
};

function clean() {
  return del([ 'assets' ]);
}

function styles() {
  return gulp.src('src/stylus/main.styl')
    .pipe(sourcemaps.init())
    .pipe(stylus({
      compress: true,
      'include css': true
    }))
    .pipe(rename({
      basename: 'main',
      suffix: '.min'
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
  return gulp.src(paths.scripts.src, { sourcemaps: true })
    .pipe(babel())
    // .pipe(uglify())
    // .pipe(concat('main.min.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}

function images() {
  return gulp.src(paths.images.src)
    .pipe(gulp.dest(paths.images.dest));
}

function watch() {
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles);
  gulp.watch(paths.images.src, images);
}

const build = gulp.series(clean, gulp.parallel(styles, scripts, images), watch);

gulp.task('default', build);
