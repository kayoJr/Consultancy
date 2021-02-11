<?php
require 'connect.php';

$id = $_GET['rn'];
$sql="select * from pending_tasks where id='".$id."'";
$rs = mysqli_query($conn, $sql);
if(mysqli_num_rows($rs)){
    while($row = mysqli_fetch_assoc($rs)){
        $num = $row['id'];
        $header = $row['header'];
        $dept = $row['department'];
        $task = $row['task'];

        $query = "INSERT INTO `completed_task` (`id`,`header`, `department`, `task`) VALUES ('$num', '$header', '$dept', '$task');";
        $r_set = mysqli_query($conn, $query);
    if($r_set){
       
        $delete = "DELETE FROM `pending_tasks` where id = '$id'";
        $rs_delete = mysqli_query($conn, $delete);
        if($rs_delete){
            echo "<script>
            alert('Task Done');
            window.location.href='employee.php';
            </script>";
        }else{
            echo "error";
        }

    }else{
        echo "error". $query;
    }
    }
}



?>