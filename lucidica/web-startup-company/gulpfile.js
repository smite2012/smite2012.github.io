const gulp = require('gulp'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    babel = require('gulp-babel'),
    browserSync = require('browser-sync').create();

const path = {
    build: {
        js: 'prod/js/',
        style: 'prod/css/',
        img: 'prod/img/',
        fonts: 'prod/fonts/',
        html: 'prod/'
    },
    src: {
        js: 'dev/js/main.js',
        jsLib: 'dev/js/libs.js',
        style: 'dev/scss/main.scss',
        styleLib: 'dev/scss/style-libs.css',
        img: 'dev/img/**/*.{JPG,jpg,png,gif}',
        fonts: 'dev/fonts/**/*.*',
        html: 'dev/index.html',
        php: 'dev/**/*.php'
    },
    watch: {
        js: 'dev/js/**/*.js',
        style: 'dev/scss/**/*.scss',
        img: 'dev/img/**/*.*',
        fonts: 'dev/fonts/**/*.*',
        html: 'dev/**/*.html',
        php: 'dev/**/*.php'
    }
};

gulp.task('html', function () {
    return gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html))
});
gulp.task('php', function () {
    return gulp.src(path.src.php)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html))
});
gulp.task('css-libs', function () {
    return gulp.src(path.src.styleLib)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.style))
});

gulp.task('js-libs', function () {
    return gulp.src(path.src.jsLib)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.js))
});

gulp.task('js', function () {
    return gulp.src(path.src.js)
        .pipe(sourcemaps.init())
        .pipe(rigger())
        .pipe(babel({presets: ['es2015']}))
        // .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.build.js));
});

gulp.task('css', function () {
    return gulp.src(path.src.style)
       // .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(prefixer())
       // .pipe(sourcemaps.write())
        // .pipe(cssmin())
        .pipe(gulp.dest(path.build.style));
});

gulp.task('imageMin', function () {
    return gulp.src(path.src.img)
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.build.img));
});

gulp.task('watch', function () {
    gulp.watch(path.watch.style, gulp.series('css')).on("change", browserSync.reload);
    gulp.watch(path.watch.js, gulp.series('js')).on("change", browserSync.reload);
    gulp.watch(path.watch.html, gulp.series('html')).on("change", browserSync.reload);
    gulp.watch(path.watch.php, gulp.series('php'));
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "prod"
        }
    });
});

gulp.task('default', gulp.series(
    gulp.parallel('html','php','imageMin', 'css-libs', 'js-libs', 'css', 'js'),
    gulp.parallel('watch','browser-sync')
));