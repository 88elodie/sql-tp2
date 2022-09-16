<?php
function authentication_model_search($request){
require_once(CONNEX_DIR);
foreach($request as $key=>$value){
    $$key=mysqli_real_escape_string($con,$value);
}

$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($con, $sql);

$rowcount = mysqli_num_rows($result);
 if($rowcount == 1) {
    $user = mysqli_fetch_assoc($result);
    $dbPassword = $user['user_password'];
    if(password_verify($password, $dbPassword)) {
        session_regenerate_id();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

        header("Location: index.php");
    }else{
        header("Location: index.php?module=user&action=login&msg=2");
     }
 }else{
    header("Location: index.php?module=user&action=login&msg=1");
 }
}