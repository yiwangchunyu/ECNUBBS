<?php

/**
*   edit界面后台数据处理；
*   by: wcy；
*   错误处理缺失，图片处理缺失；
*/

if(!(empty($_POST['title']) || empty($_POST['content']))){
	include_once "../../connect.php";
	$user_id = $_COOKIE['user_id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$sql = "insert into publish(user_id,title,category,content,time) VALUES('$user_id','$title',0,'$content',current_time());";
	$res = mysqli_query( $conn, $sql );
	$id = mysqli_insert_id($conn);
	

	if(!empty($_FILES['myfile']['tmp_name'])){
		$savedir = 'images/'.$user_id.'/';
		if (!is_dir($savedir)) mkdir($savedir); // 如果不存在则创建

    	$temp = explode(".", $_FILES["myfile"]["name"]);
  		$extension = end($temp); 
  		move_uploaded_file($_FILES["myfile"]["tmp_name"], $savedir. $_FILES["myfile"]["name"]);
  		$domain="http://bbs.yiwangchunyu.wang/pages/editor/";
  		$newname =date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$extension;
  		rename($savedir. $_FILES["myfile"]["name"], $savedir.$newname);
  		$img_url=$domain.$savedir.$newname;
  		$sql = "insert into article_pics(publish_id, url, time)values('$id','$img_url', current_time());";
  		mysqli_query( $conn, $sql );

	}
	mysqli_close($conn);
	echo "<script>window.location.href='../../bbs.php'</script>";

}  
else{
	echo "请输入标题或内容!";
}

?>