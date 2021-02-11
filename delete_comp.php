<?php
require 'connect.php';
$id = $_GET['rn'];
$sql = "DELETE FROM `completed_task` where id = '$id'";
$rs = mysqli_query($conn, $sql);
if($rs){
    echo "<script>
    alert('Task Deleted');
    window.location.href='admin.php';
    </script>";
}else{
    echo "not deleted";
}
?>