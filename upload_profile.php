<?php

/**
*   edit界面后台数据处理；
*   by: wcy；
*   错误处理缺失，图片处理缺失；
*/

include_once "connect.php";
$user_id = $_COOKIE['user_id'];
$username = $_POST['username'];
$intro = $_POST['intro'];
$gender = $_POST['gender'];
$faculty = $_POST['faculty'];
$imgurl = null;


// echo $user_id;
// echo $username;
// echo $intro ;
// echo $gender;
// echo $faculty;
if(!empty($_FILES['myfile']['tmp_name'])){
	$savedir = 'img/profilephoto/';
	if (!is_dir($savedir)) mkdir($savedir); // 如果不存在则创建

	$temp = explode(".", $_FILES["myfile"]["name"]);
		$extension = end($temp); 
		move_uploaded_file($_FILES["myfile"]["tmp_name"], $savedir. $_FILES["myfile"]["name"]);
		$domain="http://bbs.yiwangchunyu.wang/";
		$newname =date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$extension;
		rename($savedir. $_FILES["myfile"]["name"], $savedir.$newname);
		$imgurl=$domain.$savedir.$newname;

}
$sql="update t_user set username='$username',intro='$intro',gender='$gender',faculty='$faculty' where id=$user_id;";

if($imgurl!=null){

	$sql="update t_user set username='$username', intro='$intro', gender='$gender', faculty='$faculty', photo='$imgurl' where id=$user_id;";
}else{
	$sql="update t_user set username='$username',intro='$intro' ,gender='$gender',faculty='$faculty' where id=$user_id;";
}
// echo $sql;
$res = mysqli_query( $conn, $sql );
// echo $res;
mysqli_close($conn);
echo "<script>window.location.href='http://bbs.yiwangchunyu.wang/profile.php'</script>";



?>