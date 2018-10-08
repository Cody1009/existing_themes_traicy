var path = require('path');
var fs = require('fs');
var pkg = JSON.parse(fs.readFileSync('./package.json'));
var assetsPath = path.resolve(pkg.path.assetsDir);

var gulp = require('gulp');
// sass compiler
var sass = require('gulp-sass');
// add vender prifix
var autoprefixer = require('gulp-autoprefixer');
// error handling
var plumber = require('gulp-plumber');
var cleanCSS = require('gulp-clean-css');

gulp.task('sass', function() {
    gulp.src(path.join(assetsPath, 'sass/main.scss'))
        .pipe(plumber({
          errorHandler: function(err) {
            console.log(err.messageFormatted);
            this.emit('end');
          }
        }))
        .pipe(sass())
        .pipe(autoprefixer({
          browsers: ["last 2 versions", "ie >= 9", "Android >= 4","ios_saf >= 8"],
          cascade: false
        }))
			  .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest(path.join(assetsPath, 'css/')));
});

gulp.task('default', function() {
    gulp.watch(path.join(assetsPath, 'sass/**/*.scss'),['sass']);
});
