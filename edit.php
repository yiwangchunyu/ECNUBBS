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

</head>
<body>

  <div class="col-md-6 col-md-offset-3">

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">BBS首页</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
              <li><a href="#">校园服务</a></li>
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
      <img src="/wp-content/uploads/2014/07/slide1.png" alt="First slide">
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2014/07/slide2.png" alt="Second slide">
    </div>
    <div class="item">
      <img src="/wp-content/uploads/2014/07/slide3.png" alt="Third slide">
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


    <input name="title" type="text" class="form-control" id="contact_email" placeholder="请输入标题" required/>

    <div id="summernote"><p>请输入正文内容</p></div>
    <script>
      $(document).ready(function() {
          $('#summernote').summernote();
      });
      $('#summernote').summernote({
        height: 600,                 // 定义编辑框高度
        minHeight: null,             // 定义编辑框最低的高度
        maxHeight: null,             // 定义编辑框最高德高度
   
      });
    </script>
    <div class="container">
      <div class="row">
        <div class="">
          <button type="button" class="btn btn-success block-center">发布</button>
        </div>
      </div>
    </div>
  </div>


    <footer class="footer navbar-fixed-bottom text-center">
      <div class="container">
          <p>Copyright © 2018 <a href="http://yiwangchunyu.wang"> yiwangchunyu </a> </p>
      </div>
    </footer>
</body>
</html>