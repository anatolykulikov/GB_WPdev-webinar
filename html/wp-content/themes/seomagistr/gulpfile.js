// Подключаем модули
const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const prefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const del = require('del');

// Определяем пути
const path = {
    src: {
        js: 'src/js/**/*.js',
        css: 'src/scss/**/*.scss'
    },
    build: 'dist/'
};

// Удаление сборки
gulp.task('delete', function() {
    return del(path.build);
})

// Сборка CSS
gulp.task('css', function() {
    return gulp.src(path.src.css)
        .pipe(sass())
        .pipe(prefixer())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest(path.build))
});

// Сборка JS
gulp.task('js', function() {
    return gulp.src(path.src.js)
        .pipe(concat('bundle.js'))
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest(path.build))
});

// Наблюдаем за изменением файлов
gulp.task('watch', function() {
    gulp.watch(path.src.js, gulp.series('js'));
    gulp.watch(path.src.css, gulp.series('css'));
});

// Сборки
gulp.task('dev', gulp.series('delete', gulp.parallel('js', 'css'), 'watch'));
gulp.task('build', gulp.series('delete', gulp.parallel('js', 'css')));