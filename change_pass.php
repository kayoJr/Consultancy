<?php
require 'auth.php';
require 'connect.php';
$id = $_SESSION['user'];

if(isset($_POST['submit'])){
    $old = $_POST['old_pass'];
    $new = $_POST['new_pass'];
    $confirm = $_POST['confirm'];
    $sql = "select pass from `users` where id='$id'";
    $rs = mysqli_query($conn, $sql);
    if(mysqli_num_rows($rs)){
        while($row = mysqli_fetch_assoc($rs)){
            $current = $row['pass'];
            if($current === $old){
                if($new === $confirm){
                    $query = "update `users` set pass = '$new' where pass = '$current'";
                    $result = mysqli_query($conn, $query);
                    if($result){
                        header("Location:change_pass.php?msg=Password Changed");
                    }
                }else{
                    header("Location:change_pass.php?warning=Passwords Don't Match");
                }
            }else{
                header("Location:change_pass.php?warning=Your Old Password Is Incorrect");
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/addTask.css">
    <link rel="stylesheet" href="./css/changePass.css">
</head>

<body>
    <div class="adminPanel">
        <div class="side">
            <div class="logo">
                <h1>GCS</h1>
            </div>
            <div class="navs">
                <ul>
                    <li><a href="employee.php">Task</a></li>
                    <li class="active"><a href="change_pass.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="top">
                    <h1>Admin Panel
                    </h1>
                </div>
                <div class="bottom">
                    <form action="change_pass.php" method="POST">
                        <h2>Change Password</h2>
                 <p id="msg">
                    <?php
                    @ $msg = $_REQUEST['warning'];
                        echo $msg;
                    ?>
                    </p>
                <p id="msg_green">
                    <?php
                    @ $msg = $_REQUEST['msg'];
                        echo $msg;
                    ?>
                    </p>
                        <div>
                            <label for="old">Old Password</label>
                            <input type="password" name="old_pass" id="old">
                        </div>
                        <div>
                            <label for="new">New Password</label>
                            <input type="password" name="new_pass" id="new">
                        </div>
                        <div>
                            <label for="confirm">Confirm Password</label>
                            <input type="password" name="confirm" id="confirm">
                        </div>
                        <div>
                            <input class="btn" type="submit" name="submit" value="Change Password" id="add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>