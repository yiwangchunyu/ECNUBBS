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

	<div class= "rounded tm-content col-xs-12 col-sm-6 col-md-6 offset-md-3 ">
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
		</nav>



		<div class="container-fluid" style="margin-top: 10px">
			<?php
				include_once "connect.php";
				$userid = $_COOKIE['user_id'];
				$myid = $userid;
				if(isset($_GET["userid"])){
					$userid = $_GET["userid"];
				}
				$email = null;
				$username = null;
				$photo = null;
				$time = null;
				$gender = null;
				$faculty = null;
				$facultyurl=null;
				$intro = null;
				$followed=0;
				if($myid!=$userid){
					$sql = "select * from follow where user_id1='$myid' and user_id2='$userid';";
					$res = mysqli_query($conn,$sql);
					if(mysqli_num_rows($res) > 0){
						$followed=1;
		
					}
				}
				$sql = "select * from t_user where id = '$userid';";
				$res = mysqli_query( $conn, $sql );
				if (mysqli_num_rows($res) > 0) {
    			// 输出数据
	    			while($row = mysqli_fetch_assoc($res)) {
	    				$email = $row["email"];
	    				$username = $row["username"];
	    				$photo = $row["photo"];
	    				$time = $row["regtime"];
	    				$gender = $row["gender"];
	    				$facultyid = $row["faculty"];
	    				$intro = $row["intro"];
	    				$sqlf="select * from faculty where id='$facultyid'";
	    				$resf=mysqli_query( $conn, $sqlf );
						if (mysqli_num_rows($resf) > 0) {
		    			// 输出数据
			    			while($rowf = mysqli_fetch_assoc($resf)) {
			    				$faculty=$rowf["name"];
			    				$facultyurl=$rowf["url"];
			    			}
			    		}
			    	
					}
				}
	    		echo '<div class="card" style="width:100%; margin-bottom: 20px">
	    				<div class="text-center" style="margin-top:20px">
    						<img class="card-img-top img-fluid center-block" src="'.$photo.'" alt="image " style="width:40% ">
    					</div>
    						<div class="card-body">
					     		<h3 class="card-title text-center">'.$username.'&nbsp&nbsp&nbsp<h5 class="text-center"><small>注册时间： &nbsp'.$time.'</small></h5></h3>
					      		<p class="card-text text-dark">'.$intro.'</p>
						      	  	<ul class="list-group" style="margin-bottom: 20px">
								    	<li class="list-group-item">email: &nbsp<a href="mailto:'.$email.'">'.$email.'</a></li>
								    	<li class="list-group-item">gender: &nbsp'.$gender.'</li>
								    	<li class="list-group-item">faculty: &nbsp<a href="'.$facultyurl.'">'.$faculty.'</a></li>
								  	</ul>';
				if($userid==$myid){

				}else{
					if($followed==1){
				echo  		'<a href="http://bbs.yiwangchunyu.wang/follow.php?userid='.$userid.'" class="btn btn-warning " data-toggle="tooltip" data-placement="top" title="点击取消关注" >√ Followed</a>*';			
					}else{
				echo  		'<a href="http://bbs.yiwangchunyu.wang/follow.php?userid='.$userid.'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="点击关注" >+Follow</a>*';		
					}
				
				}
				if(($followed==1) or ($myid==$userid)){


				echo	     '<a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$userid.'&follow=2" class="btn btn-info">Following</a>*
					      	<a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$userid.'&follow=1" class="btn btn-info">Follower</a>*';

				echo	     '<a href="http://bbs.yiwangchunyu.wang/myarticles.php?userid='.$userid.'" class="btn btn-success">Articles</a>';
					   
				}else{
				echo	     '<a href="" class="btn">←点击关注后可查看更多哦</a>';

				}
				echo 	'</div>
					 </div>';;

				if(isset($_GET["follow"])){
					//查询粉丝state=1,查询关注state=2
					$state = $_GET["follow"];
					$sql = null;
					if($state==2){
						echo '<div class="card">
			    				<div class="card-body">
			     					<h4 class="card-title">Following</h4>
			      					<ul class="list-group" style="margin-bottom: 20px">';
						$sql = "select * from follow where user_id1='$userid';";
						$res = mysqli_query($conn,$sql);
						if (mysqli_num_rows($res) > 0) {
    						// 输出数据
	    					while($row = mysqli_fetch_assoc($res)) {
	    						$user_id2=$row["user_id2"];
	    						//获取用户信息
		  						$user_name = null;
		  						$user_photo = null;
		  						$user_email = null;
		  						$sqluser = "select * from t_user where id= '$user_id2';";
		  						$resuser = mysqli_query( $conn, $sqluser );
		  						if (mysqli_num_rows($resuser) > 0){
				  					while($rowuser = mysqli_fetch_assoc($resuser)){
				  						$user_name = $rowuser["username"];
				  						$user_photo = $rowuser["photo"];
				  						$user_email = $rowuser["email"];
				  					}
		  						}
		  						echo '<li class="list-group-item">
							    		<div class="form-inline">  
			           								<div class="" style="margin-left:10px; margin-right: 10px">
			           									<img src="'.$user_photo.'" class="rounded-circle " style="width:40px; height:40px；" alt="头像"> 
			           								</div>
			           								<div>
			           									<h5><a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$user_id2.'">'.$user_name.'</a>&nbsp &nbsp<small>'.$user_email.'</small></h5> 
			           								</div>
					      			
			           					</div>  
									
							    	</li>';

	    					}
	    				}


						echo 		'</ul>
			    				</div>
							</div>';
					}
					if($state==1){
						echo '<div class="card">
			    				<div class="card-body">
			     					<h4 class="card-title">Follower</h4>
			      					<ul class="list-group" style="margin-bottom: 20px">';
						$sql = "select * from follow where user_id2='$userid';";
						$res = mysqli_query($conn,$sql);
						if (mysqli_num_rows($res) > 0) {
    						// 输出数据
	    					while($row = mysqli_fetch_assoc($res)) {
	    						$user_id1=$row["user_id1"];
	    						//获取用户信息
		  						$user_name = null;
		  						$user_photo = null;
		  						$user_email = null;
		  						$sqluser = "select * from t_user where id= '$user_id1';";
		  						$resuser = mysqli_query( $conn, $sqluser );
		  						if (mysqli_num_rows($resuser) > 0){
				  					while($rowuser = mysqli_fetch_assoc($resuser)){
				  						$user_name = $rowuser["username"];
				  						$user_photo = $rowuser["photo"];
				  						$user_email = $rowuser["email"];
				  					}
		  						}
		  						echo '<li class="list-group-item">
							    		<div class="form-inline">  
			           								<div class="" style="margin-left:10px; margin-right: 10px">
			           									<img src="'.$user_photo.'" class="rounded-circle " style="width:40px; height:40px；" alt="头像"> 
			           								</div>
			           								<div>
			           									<h5><a href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$user_id1.'">'.$user_name.'</a>&nbsp &nbsp<small>'.$user_email.'</small></h5> 
			           								</div>
					      			
			           					</div>  
									
							    	</li>';

	    					}
	    				}
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