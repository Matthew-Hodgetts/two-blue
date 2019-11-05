import { argv } from 'yargs'
const PRODUCTION = argv.prod;
import gulp from 'gulp';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
// import del from 'del';
import webpack from 'webpack-stream';
import realWebpack from 'webpack';
import browserSync from 'browser-sync';
const autoprefixer = require('gulp-autoprefixer');
const zip = require('gulp-zip');

const server = browserSync.create();


const TerserPlugin = require('terser-webpack-plugin');


function defaultTask(cb) {
  // place code for your default task here
  scripts();
  console.log(PRODUCTION)
  cb();
}



// Task for SCSS

export const styles = () => {
  return gulp.src('./src/styles/style.scss')
    .pipe(gulpif(!PRODUCTION, sourcemaps.init() ))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCSS({ compatibility: 'ie8' })))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 4 versions'],
      cascade: false,
    }))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write() ))
    .pipe(gulp.dest('./'))
    .pipe(server.stream());
}


// export const scripts = () => {
//   return webpack({
//     entry: './src/js/main.js',
//     output: {
//       filename: 'main.js'
//     },
//     devtool: !PRODUCTION ? 'inline-source-map' : false,
//     mode: PRODUCTION ? 'production' : 'development',
//     optimization: {
//       minimize: PRODUCTION ? true : false
//     },
//     plugins: [
//       new realWebpack.ProvidePlugin({
//           $: 'jquery',
//           jQuery: 'jquery',
//           'window.jQuery': 'jquery'
//       }),
//     ],
//   })
//   .pipe(gulp.dest('./assets/js'));
// }
export const scripts = () => {
  return webpack({
    entry: './src/js/main.js',
    output: {
      filename: 'main.js'
    },
    devtool: !PRODUCTION ? 'inline-source-map' : false,
    mode: PRODUCTION ? 'production' : 'development',
    optimization: {
      minimizer: [
        new TerserPlugin({
          extractComments: 'all',
        }),
      ],
    },
    plugins: [
      new realWebpack.ProvidePlugin({
          $: 'jquery',
          jQuery: 'jquery',
          'window.jQuery': 'jquery'
      }),
    ],
  })
  .pipe(gulp.dest('./assets/js'));
}

// Minify images
export const images = () => {
  return gulp.src('./src/assets/images/**/*.{jpeg,jpg,png,svg,gif}')
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(gulp.dest('./assets/img'));
}

// Copy other assets
export const copy = () => {
  return gulp.src(['src/assets/**/*', '!src/assets/{images,js,sass}', '!src/assets/{images,js,sass}/**/*'])
    .pipe(gulp.dest('./assets/other/'))
}

export const reload = (done) => {
  server.reload();
  done();
}

export const serve = (done) => {
  server.init({
    host: 'http://127.0.0.1',
    port: 3000,
    proxy: 'http://twoblue4/'
  });
  done();
}

export const watch = () => {
  gulp.watch('src/styles/**/*.scss', styles);
  gulp.watch('src/js/**/*.js', gulp.series(scripts, reload));
  gulp.watch('**/*.php', reload);
  gulp.watch('./src/assets/images/**/*.{jpeg,jpg,png,svg,gif}', gulp.series(images, reload));
  gulp.watch(['src/assets/**/*', '!src/assets/{images,js,sass}', '!src/assets/{images,js,sass}/**/*'], gulp.series(copy, reload));
}

export const archive = (done) => {
  gulp.src(
    [
      '**/**/**.*',
      '!node_modules/**/**.*',
      '!*.lock',
      '!*.json',
      '!*.babelrc',
      '!gulpfile.babel.js',
      '!LICENSE',
      '!src/**/**.*',
      '!*.md',
      '!*.txt',
      '!*.dist'
    ]
  )
    .pipe(zip('two-blue.zip'))
    .pipe(gulp.dest('dist'));
  done();
}

// Add scripts
export const dev = gulp.series(gulp.parallel(styles, images, scripts, copy), serve, watch);

export const build = gulp.series(gulp.parallel(styles, images, scripts,  copy, archive));



export default dev;
