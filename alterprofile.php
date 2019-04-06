<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ECNU BBS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/demo.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">
  <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

   <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <style type="text/css">
  	body{
  		margin-top:0px;
  	}
  </style>
</head>

<body>

			<div id="particles-js"></div>
		
			<ul class="cb-slideshow">
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	        </ul>
	

	<div class=""> &nbsp</div>
	<!-- 图片轮播 -->

	<div class= "rounded tm-content col-xs-12 col-sm-8 col-md-8 offset-md-2 ">
		<div id="demo rounded" class="carousel slide" data-ride="carousel">
		 
		  <!-- 指示符 -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		 
		  <!-- 轮播图片 -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="http://static.runoob.com/images/mix/img_fjords_wide.jpg">
		    </div>
		    <div class="carousel-item">
		      <img src="http://static.runoob.com/images/mix/img_nature_wide.jpg">
		    </div>
		    <div class="carousel-item">
		      <img src="http://static.runoob.com/images/mix/img_mountains_wide.jpg">
		    </div>
		 </div>
		 
		  <!-- 左右切换按钮 -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>
 
</div>
<!-- 导航栏 -->
		<nav class="rounded navbar navbar-expand-sm bg-dark navbar-dark">
		  <!-- Brand -->
		  <a class="navbar-brand" href="http://bbs.yiwangchunyu.wang/bbs.php">BBS首页</a>

		  <!-- Links -->
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">校园服务</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://bbs.yiwangchunyu.wang/aboutus.php">关于我们</a>
		    </li>

		    <!-- Dropdown -->
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        我的
		      </a>
		      <div class="dropdown-menu" overflow='visible'  >
		        <a class="dropdown-item" href="http://bbs.yiwangchunyu.wang/profile.php">个人信息</a>
		        <a class="dropdown-item" href="http://bbs.yiwangchunyu.wang/myarticles.php">我的发布</a>
		        <a class="dropdown-item" href="http://bbs.yiwangchunyu.wang/alterprofile.php">完善资料</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <button type="button" class="btn btn-success" onclick="javascrtpt:window.location.href='http://bbs.yiwangchunyu.wang/pages/editor/edit.php'">发布</button>
		    </li>
		  </ul>
		  <div class="pull-right offset-md-3">
		  		<form class="form-inline pull-right">
    				<input class="form-control" type="text" placeholder="Search">
    				<button class="btn btn-success" type="button">Search</button>
  		  		</form>
		  </div>
		  
		</nav>



			<div class="container-fluid" style="margin-top: 10px">

				<form action="upload_profile.php" method="post" enctype="multipart/form-data" class="form-horizontal">
				      
					  <div class="form-group">
					  	<?php
					  		include_once "connect.php";
					  		$userid = $_COOKIE['user_id'];
				      		$sql = "select * from t_user where id='$userid';";
				      		$res = mysqli_query($conn,$sql);
							if (mysqli_num_rows($res) > 0) {
			    			// 输出数据
				    			while($row = mysqli_fetch_assoc($res)) {

				    				echo 	'<label for="usr">修改昵称</label>
					      					<input type="text" class="form-control" name="username" value="'.$row["username"].'">
					      					<label for="usr">个性签名、自我介绍</label>
					      					<textarea class="form-control" rows="5" name="intro">'.$row["intro"].'</textarea>';
				    			}
				    		}

				      		mysqli_close($conn);

					  	?>
					  	
				      <label for="sel1">请选择性别</label>
				      <select class="form-control" id="sel1" name="gender">
				        <option>男</option>
				        <option>女</option>
				      </select>
				      <label for="sel1">请选择院系</label>
				      <select class="form-control" id="" name="faculty">
				      	<?php
				      		include "connect.php";
				      		$sqlf = "select * from faculty;";
				      		$resf = mysqli_query($conn,$sqlf);
							if (mysqli_num_rows($resf) > 0) {
			    			// 输出数据
				    			while($row = mysqli_fetch_assoc($resf)) {
				    				echo '<option value='.$row["id"].'>'.$row["name"].'</option>';
				    			}
				    		}

				      		mysqli_close($conn);
				      	?>
			      		</select>
			      		<label class="col-sm-1 control-label" for="inputfile">头像</label>
    					<input type="file" class="col-sm-11" name="myfile" id="inputfile">

			    	</div>
				  	<button type="submit" class="btn btn-success col-sm-12 ">提交修改</button>

				 </form>
		


				

			</div>
	</div>	
    <footer class="footer navbar-fixed-bottom text-center">
      <div class="container">
          <p>Copyright © 2018 <a href="http://yiwangchunyu.wang"> yiwangchunyu </a> </p>
      </div>
    </footer>
</body>

	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</html>