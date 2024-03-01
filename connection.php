<?php
$con = mysqli_connect('localhost', 'root', '','user');
if(mysqli_connect_errorno()){
    echo "Faild";
    exit();
}
echo "success";
?>