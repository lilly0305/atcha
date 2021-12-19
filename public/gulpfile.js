var gulpfile = require('gulp');
var sass = require('gulp-sass');
var browserSync = require("browser-sync").create();

function compile (){

    return (
        gulpfile.src("sass/*.scss")
            .pipe(sass()).on("error", sass.logError)
            .pipe(gulpfile.dest("css"))
            .pipe(browserSync.stream())
    );
};

function reload(done) {
    browserSync.reload();
    done();
};


function watch(){
    browserSync.init({
        server: {
            baseDir: "./"}
    });


    gulpfile.watch("sass/*.scss", compile);
    gulpfile.watch("index.php", reload)};



exports.watch = watch;
