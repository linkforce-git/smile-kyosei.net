// 定数
//var url = "http://iryo-datsumo.net/nagoya/rank/"; // ブラウザ自動リロードで使用

//var lpname = 'lp01/'; // コンパイルするLP名を入れる
//var lpname = 'plan_mouthpiece/'; // コンパイルするLP名を入れる
var lpname = ''; // コンパイルするLP名を入れる


// プラグイン読み込み
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var sass = require('gulp-sass')(require('sass'));
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-clean-css');
var rename = require('gulp-rename');
var svgstore = require('gulp-svgstore');
var cheerio = require('gulp-cheerio');
var imagemin = require('gulp-imagemin');
var pngquant =  require('imagemin-pngquant');
var mozjpeg = require('imagemin-mozjpeg');
var webp = require('gulp-webp');
var changed = require('gulp-changed');
var browsersync = require("browser-sync").create();

// /_scss/以下のSCSSファイル
gulp.task('mainScss', function(done) {
    gulp.src(lpname + 'resources/_scss/**/!(_)*.scss', {base: '_scss'})
    .pipe(plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(sass({
        outputStyle: 'expanded'
    }))
    .pipe(autoprefixer())

    // .cssを出力
    .pipe(rename({dirname: 'css'}))
    .pipe(gulp.dest(lpname + 'assets'))

    // min.cssを出力
    .pipe(cssmin())
    .pipe(rename({extname: '.min.css'}))
    .pipe(gulp.dest(lpname + 'assets'));
    done();
});

// svg生成
gulp.task('svg', function (done) {
    // 個別svgの圧縮
    gulp.src(lpname + 'resources/svg/**/*.svg')
    .pipe(changed(lpname + 'assets/svg'))
    .pipe(imagemin([
        imagemin.svgo({
            plugins: [
                { removeViewBox: false },
            ]
        })
    ]))
    .pipe(gulp.dest(lpname + 'assets/svg'));

    // icons以下のファイルをまとめてsvgスプライトを生成
    gulp.src(lpname + 'resources/svg/icons/*.svg')
    .pipe(imagemin([
        imagemin.svgo({
            plugins: [
                { removeViewBox: false },
            ]
        })
    ]))
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(cheerio({
        run: function ($, file) {
            $('style,title,defs').remove();
            $('[id]:not(symbol)').removeAttr('id');
            $('[class]').removeAttr('class');
            $('[data-name]').removeAttr('data-name');
            $('[fill]').removeAttr('fill');
            $('[stroke]').removeAttr('stroke');
            $('[style]:not(svg)').removeAttr('style');
            $('svg').attr('style','display:none');
        },
        parserOptions: { xmlMode: true }
    }))
    .pipe(gulp.dest(lpname + 'assets/svg'));
    done();
});

// 画像圧縮
gulp.task('imagemin', function(done) {
    gulp.src(lpname + 'resources/img/**/*.{jpg,jpeg,png,gif,svg}')
    .pipe(changed(lpname + 'assets/img'))
    .pipe(imagemin([
        pngquant({ quality: [ 0.65, 0.8 ], speed: 1 }),
        mozjpeg({ quality: 80 }),
        imagemin.svgo({
            plugins: [
                { removeViewBox: false },
            ]
        }),
        imagemin.gifsicle()
    ]))
    .pipe(gulp.dest(lpname + 'assets/img'));
    done();
});

// webp生成
gulp.task('webp', function (done) {
    gulp.src(lpname + 'resources/img/**/*.{jpg,jpeg,png}')
    .pipe(changed(lpname + 'assets/img'))
    .pipe(rename(function (path) {
        path.basename += path.extname;
    }))
    .pipe(webp({
        quality: 80,
        method: 6,
    }))
    .pipe(gulp.dest(lpname + 'assets/img'));
    done();
});

// ブラウザを立ち上げる
/*
gulp.task('build-server', function (done) {
    browsersync.init({
        proxy: url
    });
    done();
    console.log('Server was launched');
});

// ブラウザリロード
gulp.task('browser-reload', function (done){
    browsersync.reload();
    done();
    console.log('Browser reload completed');
});
*/

// ------------------------------------------------
//  ファイルの更新監視タスク
// ------------------------------------------------
// メインのSCSSの更新を監視
//gulp.task('mainWatch', function(done) {
//    gulp.watch('resources/_scss/**/*.scss', gulp.series('mainScss', 'browser-reload'));
//    done();
//});


// メインのSCSSの更新を監視
gulp.task('mainWatch', function(done) {
    gulp.watch(lpname + 'resources/_scss/**/*.scss', gulp.series('mainScss'));
    done();
});

// svgの更新を監視
gulp.task('svgWatch', function(done) {
    gulp.watch(lpname + 'resources/svg/**/*.svg', gulp.series('svg'));
    done();
});

// 画像の更新を監視
gulp.task('imgWatch', function (done) {
    gulp.watch(lpname + 'resources/img/**/*', gulp.series('imagemin', 'webp'));
    done();
});

// 全てを監視
gulp.task('default', gulp.series(
    gulp.parallel('mainScss', 'svg', 'imagemin', 'webp'),
    gulp.parallel('mainWatch', 'svgWatch', 'imgWatch')
));
