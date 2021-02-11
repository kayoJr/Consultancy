<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
    $dept = $_POST['dept'];
    $task = $_POST['task'];
    $title = $_POST['dept'];
    $sql = "INSERT INTO `pending_taskS` (`header`, `department`, `task`) VALUES ('$title', '$dept', '$task');";
    $rs = mysqli_query($conn, $sql);
    if($rs){
        header('Location:addTask.php?msg=Task Added Successfully');
    }else{
        echo "error". $sql;
    }
}

?>