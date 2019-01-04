<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BBS Editor</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

  <script type="text/javascript" src="edit.js"></script>


<style type="text/css">

</style>

</head>
<body>

  <div class="col-md-6 col-md-offset-3">

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://bbs.yiwangchunyu.wang/bbs.php">BBS首页</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
              <li><a href="http://bbs.yiwangchunyu.wang/bbs.php">校园服务</a></li>
              <li><a href="#">联系我们</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      我的<b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="#">jmeter</a></li>
                      <li><a href="#">EJB</a></li>
                      <li><a href="#">Jasper Report</a></li>
                      <li class="divider"></li>
                      <li><a href="#">分离的链接</a></li>
                      <li class="divider"></li>
                      <li><a href="#">另一个分离的链接</a></li>
                  </ul>
              </li>
          </ul>
        </div>
      </div>
    </nav>

  <div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/1.jpg" alt="First slide">
      </div>
      <div class="item">
        <img src="../images/2.jpg" alt="Second slide">
      </div>
      <div class="item">
        <img src="../images/3.jpg" alt="Third slide">
      </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 


  <form action="upload.php" method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group" style="padding-top:10px">
        <label class="col-sm-1 control-label">标题</label>
        <div class="col-sm-11">
          <input name="title" class="form-control" id="focusedInput" type="text" value="请输入标题...">
        </div>
      </div>
      <div class="form-group ">
        <label class="col-sm-1 control-label">内容</label>
        <div class="col-sm-11 content">
          <textarea class="form-control content" name="content" style="height:250px"></textarea>
        </div>
      </div>

  <div class="form-group">
    <label class="col-sm-1 control-label" for="inputfile">图片</label>
    <input type="file" class="col-sm-11" name="myfile" id="inputfile">
  </div>

  <button type="submit" class="btn btn-success col-sm-12 ">提交</button>


              <!-- <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <img  class="img-thumbnail"src="images/1.jpg">
                        <div>默认图片</div>
                    </div>
                    <div class="col-sm-3">
                        <img class="img-thumbnail"src="images/2.jpg">
                        <div>圆角图片</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="img-thumbnail"  src="images/2.jpg">
                            <div>缩略图</div>
                        </div>
  
                    </div>
                </div>
            </div> -->
  </form>

</div>

    
    <script>
      $(document).ready(function() {
          $('#summernote').summernote();
      });
      $('#summernote').summernote({
        height: 600,                 // 定义编辑框高度
        minHeight: null,             // 定义编辑框最低的高度
        maxHeight: null,             // 定义编辑框最高德高度
        //调用图片上传
            callbacks: {
                onImageUpload: function (files) {
                    sendFile($summernote, files[0]);
                }
            }
      });
      //ajax上传图片
        function sendFile($summernote, file) {
            var formData = new FormData();
            formData.append("file", file);
            $.ajax({
                url: "upload_img.php",//路径是你控制器中上传图片的方法，下面controller里面我会写到
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    $summernote.summernote('insertImage', data, function ($image) {
                        $image.attr('src', data);
                    });
                }
            });
        }
    </script>




</body>
</html>