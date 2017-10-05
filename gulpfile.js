'use-strict';

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require("gulp-uglify");
var rename = require('gulp-rename');
var pump = require("pump");

gulp.task('concatScripts', function() {
   gulp.src(["js/adminBar.js",
              "js/main.js",
              "js/animation.js",
              "js/behance.js",
              "js/fadeScroll.js",
              "js/switch.js"]).pipe(concat("app.js")).pipe(gulp.dest("js"));
});
gulp.task("minifyScripts", function(cb) {
    pump([gulp.src('js/app.js'),
         uglify(),
         rename("app.min.js"),
        gulp.dest("js")], cb);
});
gulp.task('default', ["concatScripts", "minifyScripts"]);