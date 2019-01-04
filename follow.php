<?php
$myid = $_COOKIE['user_id'];
$userid = $myid;
if(isset($_GET["userid"])){
	include_once "connect.php";
	$userid = $_GET["userid"];
	echo $myid.'<br>';
	echo $userid.'<br>';
	$sql = "select * from follow where user_id1='$myid' and user_id2='$userid';";
	$res = mysqli_query($conn,$sql);
	if(mysqli_num_rows($res) > 0){
		echo 'delete';
		$sqldel = "delete from follow where user_id1='$myid' and user_id2='$userid';";
		mysqli_query($conn,$sqldel);
	}else{
		echo 'insert';
		$sqlins = "insert into follow(user_id1,user_id2) values('$myid', '$userid');";
		mysqli_query($conn,$sqlins);
	}
}
echo "请等待...";
echo '<script>window.location.href="http://bbs.yiwangchunyu.wang/profile.php?userid='.$userid.'"</script>';


?>