<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name = stripcslashes(strtolower(&_POST['userN']));
    $email = stripcslashes(&_POST['email']);
    $password = stripcslashes(&_POST['password']);
}
$name = htmlentities(mysqli_real_escape_string($con, $_POST["userN"]));
$email = htmlentities(mysqli_real_escape_string($con, $_POST["email"]));
$password = htmlentities(mysqli_real_escape_string($con, $_POST["password"]));
$gender = htmlentities(mysqli_real_escape_string($con, $_POST["gender"]));
?>