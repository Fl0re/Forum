
/*Charger le task automater gulp*/
var gulp = require('gulp');
/*le compilateur sass de gulp */
var sass= require('gulp-sass');
//fonctionne avec l'extention chrome
var livereload= require('gulp-livereload');
//mise en forme feuilles de style
var csscomb= require('gulp-csscomb');
//lire reference des feuilles de style à l'inspection
var sourcemaps = require('gulp-sourcemaps');
//minimifi css
var cleanCSS = require('gulp-clean-css');
var htmlbeautify=require('gulp-html-beautify')


gulp.task('htmlreload', function(){
    //si ca ne fonctionne plus ctrl shift r, on spécifie d abord les fichiers sources à traiter: **_> n'importe quel dossier *= n'importe quel fichier avec l'ectension .ext
    return gulp.src('./index.html').pipe(livereload());
});
    
//documentation
 
gulp.task('sass', function () {
  return gulp.src('./styles/sass/**/*.scss')
  .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
     .pipe(sourcemaps.write())
    .pipe(gulp.dest('./styles/css'))
    .pipe(livereload());

});

gulp.task('watch', function(){livereload.listen();
    //fichier à regarder
    gulp.watch(["./styles/sass/**/*.scss", "./*.html"], ["sass","htmlreload"]);
});



 gulp.task('styles', function() {

     gulp.src('./index.html')
    .pipe(htmlbeautify())
    .pipe(gulp.dest('./'));

  return gulp.src('./styles/sass/**/*.scss')
    .pipe(csscomb())
    .pipe(gulp.dest('./styles/sass'));
});