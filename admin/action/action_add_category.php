<?php
include ('../../includes/mysqli_connect.php');
include ('../../includes/functions.php');
$msg= '';
$suc= '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = array();
        //check category_name
        if (empty($_POST['category'])){
            $errors[] = 'Làm ơn !!! Bạn hãy điền cho tên danh mục';
        }else {
            $cat_name = mysqli_real_escape_string($dbc,strip_tags($_POST['category']));
        }
        //check category_position
        if (isset($_POST['position']) && filter_var($_POST['position'],FILTER_VALIDATE_INT,array('min_array' => 1))){
            $position = $_POST['position'];
        }else {
            $errors[] = 'Làm ơn !!! Bạn hãy chọn vị trí cho danh mục';
        }
        //check category_url(url co the co hoac ko)
        $url = mysqli_real_escape_string($dbc,$_POST['url']);


        if (empty($errors)){
            //Neu ko co loi nao xay ra thi bat dau insert du lieu
            $q = "INSERT INTO categories (cat_name,position,url) VALUE ('{$cat_name}',$position,'{$url}')";
            $r = mysqli_query($dbc,$q);
            confirm_query($r,$q);

            if (mysqli_affected_rows($dbc) == 1){
                $msg = "Thêm danh mục thành công";
                $suc = 1;
            }else{
                $msg = "Lỗi!Thêm danh mục không thành công";
                $suc = 0;
            }
        } else {
            foreach ($errors as $error){
                $msg .= $error . "<br/>";
            }
        }

        header('Location: ../add_category.php?msg=' . $msg.'&&'.'suc='.$suc);
    }
?>