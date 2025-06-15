<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ){
        if($_POST["email"] == "admin" && $_POST["pass"] == "123456"){
            //
        } else {
            header("Location : http://localhost/php_tutol/index.php");
        } ;
    };

?>

welcom to login page