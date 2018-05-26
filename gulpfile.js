/**!
 * npm install
 *
 * $ npm install -g jshint
 *
 * $ npm install gulp gulp-autoprefixer beepbeep gulp-cache gulp-concat gulp-csslint gulp-cssnano gulp-imagemin jshint gulp-jshint gulp-notify gulp-plumber gulp-rename gulp-sourcemaps gulp-strip-debug gulp-uglify browser-sync del imagemin-pngquant fs --save-dev
 *
 */


// --------------------------------------------------------------------
// Required Plugins
// --------------------------------------------------------------------

var gulp            = require( 'gulp' ),
      autoprefixer  = require( 'gulp-autoprefixer' ),
      beep          = require( 'beepbeep' ),
      cache         = require( 'gulp-cache' ),
      concat        = require( 'gulp-concat' ),
      csslint       = require( 'gulp-csslint' ),
      cssnano       = require( 'gulp-cssnano' ),
      imagemin      = require( 'gulp-imagemin' ),
      jshint        = require( 'gulp-jshint' ),
      notify        = require( 'gulp-notify' ),
      plumber       = require( 'gulp-plumber' ),
      rename        = require( 'gulp-rename' ),
      sourcemaps    = require( 'gulp-sourcemaps' ),
      stripDebug    = require( 'gulp-strip-debug' ),
      uglify        = require( 'gulp-uglify' ),

      browserSync   = require( 'browser-sync' ).create(),
        reload      = browserSync.reload,
        //stream      = browserSync.stream,
      del           = require( 'del' ),
      pngquant      = require( 'imagemin-pngquant' ),

      fs            = require( 'fs' ),
      config        = JSON.parse(fs.readFileSync( './config.json' ));



// ----------------------------------------------------------------------------------
// ### Main Tasks:
//
// `gulp`        - Run a complete build, runs a server, watches files.
// `gulp build`  - Generate production-ready files to `./dist` directory.
//
// ----------------------------------------------------------------------------------



// --------------------------------------------------------------------
// Error Handler
// --------------------------------------------------------------------

var onError = function(err) {
  notify.onError({
      title:    'Error',
      subtitle: '<%= file.relative %> did not compile!',
      message:  '<%= error.message %>'
  })(err);
  beep(3);
  this.emit('end');
};


// --------------------------------------------------------------------
// Task: Linting
// --------------------------------------------------------------------

// Lint your custom styles/scripts

// csslint
gulp.task( 'csslint', function() {
  return gulp.src( './src/css/main.css' )
  .pipe(csslint())
  .pipe(csslint.reporter())
  .pipe(notify({ message: 'csslint task complete' }));
} );

// jshint
gulp.task( 'jshint', function() {
  return gulp.src( './src/js/main.js' )
  .pipe(jshint( '.jshintrc' ))
  .pipe(jshint.reporter( 'default' ))
  .pipe(notify({ message: 'jshint task complete' }));
} );


// --------------------------------------------------------------------
// Task: Cleaning
// --------------------------------------------------------------------

// Clean `./intermediate/css` directory.
gulp.task( 'clean:css', [ 'csslint' ], function () {
  return del(config.cssCleanFiles);
} );

// Clean `./intermediate/js` directory.
gulp.task( 'clean:js', [ 'jshint' ], function () {
  return del(config.jsCleanFiles);
} );

// Clean `./dist` directory.
gulp.task( 'clean:dist', function () {
  return del(config.distCleanFiles);
} );


// --------------------------------------------------------------------
// Task: Styles
// --------------------------------------------------------------------

gulp.task( 'styles', [ 'clean:css' ], function() {
  return gulp.src(config.cssConcatFiles, { base: './src' })
  .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
      .pipe(autoprefixer({
        browsers: [ 'last 3 versions' ],
        cascade: false
      }))
      .pipe(concat( 'styles.css' ))
      .pipe(gulp.dest( './intermediate/css' ))
      .pipe(cssnano())
      .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write( '../maps' ))
  .pipe(plumber.stop())
  .pipe(gulp.dest( './intermediate/css' ))
  .pipe(notify({ message: 'Styles task complete', onLast: true }));
} );


// --------------------------------------------------------------------
// Task: Scripts
// --------------------------------------------------------------------

gulp.task( 'scripts', [ 'clean:js' ], function() {
  return gulp.src(config.jsConcatFiles, { base: './src' })
  .pipe(plumber({ errorHandler: onError }))
    .pipe(sourcemaps.init())
      .pipe(concat( 'scripts.js', { newLine: ';' } ))
      .pipe(gulp.dest( './intermediate/js' ))
      .pipe(stripDebug())
      .pipe(uglify({ output: { comments: /^!|@preserve|@license|@cc_on/i } }))
      .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write( '../maps' ))
  .pipe(plumber.stop())
  .pipe(gulp.dest( './intermediate/js' ))
  .pipe(notify({ message: 'Scripts task complete', onLast: true }));
} );


// --------------------------------------------------------------------
// Task: Images
// --------------------------------------------------------------------

gulp.task( 'images', function() {
  return gulp.src(config.imgMinFiles, { base: './src' })
  .pipe(plumber({ errorHandler: onError }))

  // Caching images that ran through imagemin
  .pipe(cache(imagemin({
    progressive: true,
    interlaced: true,
    svgoPlugins: [{ removeViewBox: false }],
    use: [pngquant()]
  })))
  .pipe(gulp.dest( './intermediate' ))
  .pipe(notify({ message: 'Image task complete', onLast: true }));
} );


// --------------------------------------------------------------------
// Task: Copy Changed files
// --------------------------------------------------------------------

gulp.task( 'copy:changed', function() {
  return gulp.src(config.changedCopyFiles, { base: './src' })
  .pipe(gulp.dest( './intermediate' ))
  .pipe(notify({ message: 'Changed files Copy task complete', onLast: true }));
} );


// --------------------------------------------------------------------
// Task: Watch
// --------------------------------------------------------------------

gulp.task( 'watch', function() {
  gulp.watch( './src/css/**/*.css', [ 'styles' ] ).on( 'change', reload );
  gulp.watch( './src/js/**/*.js', [ 'scripts' ] ).on( 'change', reload );
  gulp.watch( './src/img/**/*', [ 'images' ] ).on( 'change', reload );

  // Watch any file for a change in the `./src` dir and reload as required
  gulp.watch( './src/**/*', [ 'copy:changed' ] ).on( 'change', reload );
} );


// --------------------------------------------------------------------
// Task: Browser-Sync
// --------------------------------------------------------------------

// `gulp serve` - server for development code in `./src` dir.
gulp.task( 'serve', function() {
  browserSync.init({
    proxy: 'localhost/dvcables-harness.com/src',
    browser: [ 'google chrome' ]
  });
} );

// `gulp serve:intermediate` - server for testing minified code, functionality, etc. in `./intermediate` dir.
gulp.task( 'serve:intermediate', function() {
  browserSync.init({
    proxy: 'localhost/dvcables-harness.com/intermediate',
    browser: [ 'google chrome' ]
  });
} );

// `gulp serve:dist` - server for production-ready code in `./dist` dir.
gulp.task( 'serve:dist', function() {
  browserSync.init({
    proxy: 'localhost/dvcables-harness.com/dist',
    browser: [ 'google chrome' ]
  });
} );


// --------------------------------------------------------------------
// Task: Build
// --------------------------------------------------------------------

// ### Note: you should be running `gulp` before running `gulp build`.
// This step is for generating production-ready files to `./dist`.

gulp.task( 'build', [ 'clean:dist' ], function() {
  return gulp.src(config.intermediateCopyFiles, { base: './intermediate' })
  .pipe(gulp.dest( './dist' ));
} );


// --------------------------------------------------------------------
// Task: Default
// --------------------------------------------------------------------

// `gulp` - Run a complete build.

gulp.task( 'default', [ 'styles', 'scripts', 'images', 'copy:changed', 'serve:intermediate', 'watch' ] );
