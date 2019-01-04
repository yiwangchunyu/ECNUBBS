<?php
include_once "connect.php";
$id = $_GET["id"];
$sql = "delete from publish where id = '$id';";
$res = mysqli_query($conn,$sql);
mysqli_close($conn);
echo "<script>window.location.href='http://bbs.yiwangchunyu.wang/myarticles.php'</script>";


?>