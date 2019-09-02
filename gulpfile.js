const gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    del = require('del'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify');

function scss() {
    return gulp.src(
        [
            'src/style.scss'
        ])
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cleanCSS({
            level: {
                1: {
                    specialComments: 0
                }
            }
        }))
        .pipe(concat("style.css"))
        .pipe(sourcemaps.write('/'))
        .pipe(gulp.dest('dist'))
}

function js() {
    return gulp.src('src/script.js')
        .pipe(babel())
        .pipe(uglify({
            toplevel: true
        }))
        .pipe(gulp.dest("dist"));
}

function clean() {
    return del(['dist/*'])
}

gulp.task('scss', scss);

function watch() {
    gulp.watch('src/style.scss', scss);
    gulp.watch('src/script.js', js);
}

gulp.task('watch', watch);

gulp.task('build', gulp.series(
    clean,
    gulp.parallel(scss, js)
));

gulp.task('default', gulp.series('build', 'watch'));
