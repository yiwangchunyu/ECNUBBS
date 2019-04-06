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
		      <img style="width:100%" src="http://static.runoob.com/images/mix/img_fjords_wide.jpg">
		    </div>
		    <div class="carousel-item">
		      <img style="width:100%" src="http://static.runoob.com/images/mix/img_nature_wide.jpg">
		    </div>
		    <div class="carousel-item">
		      <img style="width:100%" src="http://static.runoob.com/images/mix/img_mountains_wide.jpg">
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

		<?php
			include_once "connect.php";

			$sql = "SELECT * FROM publish order by id desc;";

			$res = mysqli_query( $conn, $sql );
			if (mysqli_num_rows($res) > 0) {
    		// 输出数据
	    		while($row = mysqli_fetch_assoc($res)) {
	      			
	      			$id = $row["id"];
	      			$user_id = $row["user_id"];
	      			$title = $row["title"];
	      			$categoryg = $row["category"];
	      			$content = $row["content"];
	      			$time = $row["time"];
		  			$url = null;
		  			//获取用户信息
		  			$user_name = null;
		  			$user_photo = null;
		  			$sqluser = "select * from t_user where id= '$user_id';";
		  			$resuser = mysqli_query( $conn, $sqluser );
		  			if (mysqli_num_rows($resuser) > 0){
		  					while($rowuser = mysqli_fetch_assoc($resuser)){
		  						$user_name = $rowuser["username"];
		  						$user_photo = $rowuser["photo"];
		  					}
		  			}
		  			//获取文章中的图片
	      			$sql_image = "SELECT * FROM article_pics WHERE publish_id= '$id';";
	      			$res_image = mysqli_query( $conn, $sql_image );
	      			if (mysqli_num_rows($res_image) > 0) {
	        			while($row_image = mysqli_fetch_assoc($res_image)) {
	          				$url = $row_image["url"];
	        			}
	        		}
	        		echo '<div class="card" style="margin-top: 10px">';
	        		echo 	'<div class="card-body">';
	        		echo 		'<h4 class="card-title">'.$title.'</h4>';
	        		echo        '<div class="row">  
           							<div class="form-inline">  
           								<div class="" style="margin-left:10px; margin-right: 10px">';
           			echo 					'<a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$user_id.'"><img src="'.$user_photo.'" class="rounded-circle " style="width:40px; height:40px；" alt="头像"></a> ';
           			echo 				'</div>
           								<div>';
           			echo					'<h5><a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$user_id.'">'.$user_name.'</a>&nbsp &nbsp<small>'.$time.'</small></h5> 
           								</div>
		      			
           							</div>  
								</div> ';

	        		echo 		'<div class="media mt-4">';
	        		if($url!=null){
	        		echo 			'<a href="'.$url.'" target="_blank">
	        							<img src="'.$url.'" class="align-self-center mr-4" style="width:200px; height:150px">
	        						</a>';
	        		}
	        		echo 			'<div class="media-body">';
	        		echo 				'<p class="card-text text-dark">'.$content.'</p>';
	        		echo 			'</div>';
	        		echo 		'</div>';
	        		echo 		'<div class="" style="padding-top: 10px">
			   							<a href="#" class="card-link" >阅读全文</a>
			        					<a href="#" class="card-link">赞(0)</a>
			   					</div>';

			   		//评论
			   		echo		'<form action="comment.php" method="post" enctype="multipart/form-data" class="form-inline ">
			   						<input type="hidden" name="id" value="'.$id.'">  
			   						<input type="hidden" name="fromid" value="0">  
								    <input type="text" class="form-control" name="comment" placeholder="评论" style="width:90%">
								    <button type="submit" class="btn btn-primary pull-right">评论</button>
								</form>';

					//展示评论
					echo 		'<h6 class="card-title">Comment</h6>
			      				<ul class="list-group" style="margin-bottom: 20px">';

						$sqlc = "select * from comment where publish_id='$id' order by id desc;";
						$resc = mysqli_query($conn,$sqlc);
						if (mysqli_num_rows($resc) > 0) {
    						// 输出数据
	    					while($rowc = mysqli_fetch_assoc($resc)) {
	    						$user_id=$rowc["user_id"];
	    						$cmt = $rowc["cmt"];
	    						$time = $rowc["time"];
	    						//获取用户信息
		  						$user_name = null;
		  						$user_photo = null;
		  						
		  						$sqluser = "select * from t_user where id= '$user_id';";
		  						$resuser = mysqli_query( $conn, $sqluser );
		  						if (mysqli_num_rows($resuser) > 0){
				  					while($rowuser = mysqli_fetch_assoc($resuser)){
				  						$user_name = $rowuser["username"];
				  						$user_photo = $rowuser["photo"];
				  						
				  					}
		  						}
		  						echo '<li class="list-group-item">
							    		<div class="form-inline" style="width=100%">  
			           								<div class="" style="margin-left:10px; margin-right: 10px">
			           									<img src="'.$user_photo.'" class="rounded-circle " style="width:30px; height:30px；" alt="头像"> 
			           								</div>
			           								<div>
			           									<h6><a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$user_id.'">'.$user_name.'</a>&nbsp &nbsp<small>'.$cmt.'&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp<small class="pull-right text-right">'.$time.'</small></small></h6> 
			           									
			           								</div>
			           								
					      			
			           					</div> 
									
							    	</li>';

	    					}
	    				}
	        		echo 	'</div>';
	        		echo '</div>';
	        		
      			}
    		}
		
    		mysqli_close($conn);
	?>


				

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