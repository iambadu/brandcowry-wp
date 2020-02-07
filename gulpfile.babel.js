import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from "browser-sync";
  const PRODUCTION = yargs.argv.prod;
  const server = browserSync.create();
  export const serve = done => {
    server.init({
      proxy: "localhost/"
    });
    done();
  };
  export const reload = done => {
    server.reload();
    done();
  };
  export const clean = () => del(['dist']);

  export const styles = () => {
  return src(['src/scss/bootstrap/bootstrap.scss','src/scss/bundle.scss'])
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, postcss([ autoprefixer ])))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(dest('css'))
    .pipe(server.stream());
  }
  export const img = () => {
  return src('src/img/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(dest('img'));
  }
  export const copy = () => {
    return src(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*'])
    .pipe(dest('dist'));
  };

    export const watchForChanges = () => {
      watch('src/scss/**/*.scss', styles);
      watch('src/img/**/*.{jpg,jpeg,png,svg,gif}', series(img, reload));
      watch(['src/**/*','!src/{img,js,scss}','!src/{img,js,scss}/**/*'], series(copy, reload));
      watch("**/*.php", reload);
    }
    export const dev = series(clean, parallel(styles, img, copy), serve, watchForChanges);
    export const build = series(clean, parallel(styles, img, copy ));
    export default dev;