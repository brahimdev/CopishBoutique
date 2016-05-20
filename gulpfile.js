var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
	gulp.src('assets/sass/main.scss')
	.pipe(sass())
	.pipe(autoprefixer('last 10 version'))
	.pipe(gulp.dest('assets/css'))
});

//watch for css task
gulp.task('watch', function() {
	gulp.watch('assets/sass/**/*.scss', ['css'])
});

//default task to watch
gulp.task('default', ['watch']);