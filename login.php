<?php
header("Content-type: text/html; charset=utf-8"); 
class data {
        public $code = 0;
        public $data  = "";
        public $msg = "";
   }
if(!empty($_COOKIE['email'])&!empty($_COOKIE['password'])){
    include_once './connect.php';
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $sql = "select id from t_user where email = '$email' and password = '$password' ;";
    $res = mysqli_query( $conn, $sql );
    $data = new data();
    if (mysqli_num_rows($res) > 0) {
         echo "<script>window.location.href='./bbs.php'</script>";
        mysqli_close($conn);
    }
}


if(!empty($_POST)){
    include_once './connect.php';
    $email = $_POST['email'];
    $password = md5(trim($_POST['password']));
    $sql = "select id from t_user where email = '$email' and password = '$password' ;";
    $res = mysqli_query( $conn, $sql );
    $data = new data();
    if (mysqli_num_rows($res) > 0) {
        while($row = mysqli_fetch_assoc($res)) {
         $data->data = $row['id'];
         $data->code = 1;
         $data->msg="登录成功";
         echo ($data->msg);
         setcookie('user_id',$data->data);
         setcookie('email',$email);
         setcookie('password',$password);
         echo "<script>window.location.href='bbs.php'</script>";
        }
        mysqli_close($conn);
    }

    else{
    	//res->data = $row['id'];
        $data->code = 0;
        $data->msg="登录失败，用户名或密码错误！";
        echo ($data->msg);
        if(isset($_POST)){
        unset($_POST);
        }
        // echo (json_encode($_POST) );
}
//clear the POST array   



}

?>