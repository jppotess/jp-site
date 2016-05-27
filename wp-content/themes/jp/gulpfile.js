var gulp         = require('gulp');
var del          = require('del');
var runSequence  = require('run-sequence');

var sourcemaps   = require('gulp-sourcemaps');
var sass         = require('gulp-sass');
var minifyCss    = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');

var babel        = require("gulp-babel");
var jshint       = require('gulp-jshint');

var concat       = require('gulp-concat');
var uglify       = require('gulp-uglify');
var plumber      = require('gulp-plumber');
var notify       = require('gulp-notify');

var browserSync  = require('browser-sync');
var reload       = browserSync.reload;

var imagemin     = require('gulp-imagemin');


// Options Variables
var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

var plumberErrorHandler = { errorHandler: notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
    })
};

// Compile Sass into CSS
gulp.task('sass', function() {
    return gulp.src('scss/site.scss')
    .pipe(plumber(plumberErrorHandler))
    .pipe(sourcemaps.init())
    .pipe(sass({
        includePaths: [
            './node_modules/bulma',
        ]
    }))
    .pipe(concat('site.css'))
    // .pipe(concat('site.min.css'))
    // .pipe(minifyCss())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(sourcemaps.write('.'))        
    .pipe(gulp.dest('assets/css/'))
    .pipe(reload({stream: true}));
})


// Compile Babel es6 to JS
gulp.task("babel", function() {
    return gulp.src("js/**/*.js")
    .pipe(plumber(plumberErrorHandler))
        .pipe(jshint())
        .pipe(jshint.reporter('fail'))
    .pipe(sourcemaps.init())
    .pipe(babel({
        presets: ['es2015']
    }))
    .pipe(concat('site.js'))
    // .pipe(concat('site.min.js'))
    // .pipe(uglify())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("assets/js/"))
    .pipe(reload({stream:true}));
})


// Clean Task - except images
gulp.task('clean', function(){
    del.sync(['assets'])
})


// Build Task
gulp.task('build', function(callback){
    runSequence('clean',
        ['sass', 'babel'],
        callback
    )
})

// Watch Task
gulp.task('watch', ['build'], function() {
    gulp.watch('src/styles/**/*.scss', ['sass']);
    gulp.watch('src/scripts/**/*.js', ['babel']);
})


// Proxy Server + watch PHP sass and js
gulp.task('serve',  ['watch'], function() {

    browserSync({
        proxy: "johnpotess.dev",
    });
})


gulp.task('default', ['serve']);