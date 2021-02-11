<?php

require 'connect.php';
$GLOBALS;
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    
    $sql = "INSERT INTO `users`(`id`, `fname`, `lname`, `pass`, `role`) VALUES ('$id', '$fname', '$lname', '$pass', '$role')";
    $rs = mysqli_query($conn, $sql);
    if($rs){
        header("Location:addUser.php?msg=User Added Successfully");
    }else{
        header("Location:addUser.php?warning=Error Adding User");
    }
}

?>