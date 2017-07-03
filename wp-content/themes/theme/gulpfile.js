var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    csso = require('gulp-csso'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglifyjs'); //(для сжатия JS)


gulp.task('sass', function () {
    return gulp.src('source/sass/main.sass')
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(csso())
        .pipe(rename('main-min.css'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('css-libs', function () {
    return gulp.src('css/main.css')
        .pipe(csso())
        .pipe(rename('main-min.css'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}));// Обновляем CSS на странице при изменении
});

gulp.task('scripts', function () {
    return gulp.src(['source/js/*.js', '!source/js/jquery.min.js'])
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest('js')) // Выгружаем в папку app/js
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function () {
    browserSync.init({
        // server: {
        //     baseDir: './'
        // },
        proxy: 'odysseyofthemind.loc/wp-content/theme',
        notify: false
    });
});

gulp.task('watch', ['browser-sync', 'sass', 'scripts'], function () {
    gulp.watch('source/sass/**/*.sass', ['sass']);//Gulp наблюдает за всеми sass файлами и при сохранении выполняет таск sass, который автоматически компилирует их в css файлы.
    gulp.watch('css/**/*.css', ['css-libs']);
    gulp.watch('source/js/common.js', ['scripts']);
    gulp.watch('*.php', browserSync.reload);
});