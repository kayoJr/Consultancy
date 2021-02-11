<?php 
require ('connect.php');
session_start();
    if(isset($_POST['Login']))
    {
        // $id = $_POST['id'];
        // $pass = $_POST['pass'];
      
            $query="select * from users where id='".$_POST['id']."' and Pass='".$_POST['pass']."'";
            $result=mysqli_query($conn, $query);
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['user'] = $_POST['id'];
                $sql = "select role from users where id='".$_POST['id']."' and Pass='".$_POST['pass']."'";
                $rs=mysqli_query($conn, $query);
                //global $row;
                if($row = mysqli_fetch_assoc($rs)){
                   // echo $row['role'];
                   if($row['role']==="admin"){
                       header("Location:admin.php");
                   }else{
                       header("Location:employee.php");
                   }
                }
            }
            else
            {
                header("Location:login.php?warning=Id or Password is incorrect!");
            }
       
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>