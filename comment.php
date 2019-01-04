<?php
include "connect.php";

$user_id = $_COOKIE['user_id'];
$publish_id = $_POST["id"];
$fromid = $_POST["fromid"];
$cmt = $_POST["comment"];
$sql = "insert into comment(publish_id,user_id,cmt) values('$publish_id','$user_id','$cmt');";
$res = mysqli_query($conn,$sql);

mysqli_close($conn);
if($fromid==0){
	echo "<script>window.location.href='http://bbs.yiwangchunyu.wang/bbs.php'</script>";
}else{
	echo "<script>window.location.href='http://bbs.yiwangchunyu.wang/myarticles.php?userid=$fromid'</script>";
}

?>