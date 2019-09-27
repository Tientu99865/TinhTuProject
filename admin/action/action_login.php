<?php
session_start();
?>
<?php
include ('../../includes/mysqli_connect.php');
include ('../../includes/functions.php');
$msg= '';
$suc= '';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $errors = array();
    if (isset($_POST['account']) && filter_var($_POST['account'],FILTER_VALIDATE_EMAIL)){
        $account = mysqli_real_escape_string($dbc,$_POST['account']);
    }else{
        $errors[] = 'Làm ơn điền tài khoản';
    }
    if (isset($_POST['password']) && preg_match('/^[\w\'.-]{6,20}$/',$_POST['password'])){
        $password = mysqli_real_escape_string($dbc,$_POST['password']);
    }else{
        $errors[] = 'Làm ơn điền mật khẩu';
    }
    if (empty($errors)){
        $q = " SELECT admin_id,admin_name,admin_account,admin_password FROM admin WHERE (admin_account = '$account' AND admin_password = '$password')";
        $r = mysqli_query($dbc,$q);
        confirm_query($r,$q);

        if (mysqli_num_rows($r) == 1){
            list($id,$name,$account,$password) = mysqli_fetch_array($r,MYSQLI_NUM);
            $_SESSION['admin_id'] = $id;
            $_SESSION['admin_name'] = $name;
            $_SESSION['admin_account'] = $account;
            $_SESSION['admin_password'] = $password;
            $suc = 1;
        }else{
            $msg = "Tài khoản hoặc mật khẩu không đúng.";
            $suc = 0;
        }
    }else{
        foreach ($errors as $error){
            $msg .=$error."<br/>";
        }
    }
    if ($suc == 1){
        header('Location: ../admin_index.php');
    }else{

        header('Location: ../login.php?msg='.$msg);
    }
}
?>