const {gulp,parallel,src,dest,watch} = require('gulp');
const imagemin= require('gulp-imagemin');
const uglify= require('gulp-uglify');
const sass= require('gulp-sass');
const autoprefixer= require('gulp-autoprefixer');

function msg(){
  console.log('Gulp script working');
}

function copyhtml(){
  return src('src/*.html')
    .pipe(dest('dist'));
}

function imgmin(){
    return src('src/img/*')
    .pipe(imagemin())
    .pipe(dest('dist/img'));
  }

function js(){
    src('src/js/*.js')
      .pipe(uglify())
      .pipe(dest('dist/js/*.js'));
}

function compilecss(){
 src('src/sass/*.scss')
  .pipe(sass({outputStyle: 'compressed'}))
  .pipe(dest('src/css'))
  .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(dest('dist/css'));
}
function watchItBabe(){
  watch(['src/*.html'],copyhtml);
  watch(['src/sass/*.scss'],compilecss);
  watch(['src/img/*'],imgmin);
  watch(['src/js/*.js'],js);
}

exports.wt= watchItBabe;
exports.default = parallel(msg, copyhtml, imgmin, js, compilecss);
exports.js= js;
exports.css= compilecss;
exports.img= imgmin;
exports.html= copyhtml;
