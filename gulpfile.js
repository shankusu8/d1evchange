var gulp = require('gulp');
var path = require('path');

var less = require('gulp-less'); //编译成css
var spritesmith = require('gulp.spritesmith'); //小图标合并
var livereload = require('gulp-livereload');  // 网页自动刷新（服务器控制客户端同步刷新）
var webserver = require('gulp-webserver'); // 本地服务器
var imagemin = require('gulp-imagemin'); //压缩图片
var rename = require('gulp-rename');

gulp.task('scripts',function () {
        return gulp.src('src/first/js/*.js')
            .pipe(rename({ suffix: '' }))
        .pipe(gulp.dest('src/public/js'));
});

//压缩图片
gulp.task('minImage',function () {
    gulp.src('src/first/images/*.+(jpeg|jpg|png)')
        .pipe(imagemin())
        .pipe(gulp.dest('src/public/images'));
});

//雪碧图
gulp.task('sprite2', function () {
  var spriteData = gulp.src('src/*.png').pipe(spritesmith({
    imgName: 'sprite.png',
    cssName: 'sprite.css',
	padding: 10
  }));
  return spriteData.pipe(gulp.dest('path/to/output/'));
});

//less
gulp.task('less', function () {
  return gulp.src('./src/first/less/*.less')
      .pipe(less())
      .pipe(gulp.dest('./src/public/css'));
});

//刷新页面
gulp.task('webserver', function() {
  gulp.src( './' ) // 服务器目录（./代表根目录）
      .pipe(webserver({ // 运行gulp-webserver
        livereload: true, // 启用LiveReload
        open: true, // 服务器启动时自动打开网页
        port:'2345'
      }));
});

// 监听任务
gulp.task('watch',function(){
    gulp.watch('./src/first/js/*.js',['scripts']);
    gulp.watch( '*/*.html', ['html']) // 监听根目录下所有.html文件
    gulp.watch( './src/first/less/*.less', ['less']) // 监听less文件
});


//默认任务
// gulp.task('default',['watch','lessWatch','webserver']);
gulp.task('default',['watch','scripts','webserver']);