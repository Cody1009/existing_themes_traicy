// glup・使用する各プラグインを最初に読み込む
var gulp = require("gulp"),
		uglify = require("gulp-uglify"),
		concat = require("gulp-concat"),
		plumber = require("gulp-plumber"),
		cleanCSS = require('gulp-clean-css'),
		sass = require('gulp-sass');

// それぞれのプラグインで行う処理を書いていく
var target_sass = [
	"sass/style.sass"
]
var target_css = [
	"css/style.css",
	"css/front-page.css",
	"css/single.css",
	"css/footer.css",
	"css/header.css",
	"css/compe-box.css",
	"css/page.css"
];
gulp.task('css.concat.minify', function() {
	return gulp.src(target_css)
		.pipe(plumber())
		.pipe(concat('min.css'))
	  .pipe(cleanCSS({compatibility: 'ie8'}))
		.pipe(gulp.dest('./css/'));
});

// 監視して処理するのをひとまとめにしておく。
gulp.task('css', ['css.concat.minify']);

// ファイルを監視して実行させる
gulp.task('default', function() {
	gulp.watch(target_css, ['css']);
});
