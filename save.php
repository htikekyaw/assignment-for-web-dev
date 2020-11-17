<?php
include("base.php");
include("function.php");

// echo "<pre>";
// $tempFile = $_FILES['upload']['tmp_name'];
// $fileName = $_FILES['upload']['name'];
// print_r($_FILES);
// // $saveFolder = "store/";
// // if(move_uploaded_file($tempFile,$saveFolder.$fileName)){
// //     header("location:input_form.php");
// // }

$pic=$_POST["profilepp"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$sql = "INSERT INTO user (name,email,phone,photo) VALUES('$name','$email','$phone','$pic')";
runQuery($sql);
header("location:input_form.php");
