<?php
require 'add.php';
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/addUser.css">
</head>

<body>
    <div class="adminPanel">
        <div class="side">
            <div class="logo">
                <h1>GCS</h1>
            </div>
            <div class="navs">
                <ul>
                    <li><a href="admin.php">Task</a></li>
                    <li><a href="addTask.php">Add Task</a></li>
                    <li class="active"><a href="#">Add User</a></li>
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
                    <form action="user.php" method="POST">
                        <h2>Add User</h2>
                        <p id="msg">
        <?php
@$msg = $_REQUEST['warning'];
echo $msg;
?>
        </p>
        <p id="msg_green">
        <?php
@$msg = $_REQUEST['msg'];
echo $msg;
?>
        </p>

            <div class="grid">
                <div>
                    <label for="id">ID</label>
                    <input type="number" name="id" id="id" >
                </div>
                <div>
                     <label for="role">Role</label>
                     <select name="role" id="role">
                                <option value="none">Select</option>
                                <option value="admin">Admin</option>
                                <option value="employee">Employee</option>
                       </select>
                </div>
                <div>
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" >
                        </div>
                        <div>
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" >
                        </div>
                        <div>
                        <label for="pass">Password</label>
                        <input type="password" name="pass" id="pass">
                    </div>
                    <div>
                     <label for="dept">Dep't</label>
                     <select name="department" id="dept">
                                <option value="none">Select</option>
                                <option value="ict">ICT</option>
                                <option value="construction">Construction</option>
                       </select>
                </div>
            </div>
            <p id="msg">
                Don't select Department option if the role is <strong>Admin</strong>
            </p>
                <div>
                <input class="btn" type="submit" name="submit" value="Add User">
            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>