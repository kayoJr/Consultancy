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
    <link rel="stylesheet" href="./css/addTask.css">
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
                    <li class="active"><a href="#">Add Task</a></li>
                    <li><a href="addUser.php">Add User</a></li>
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
                    <form action="add.php" method="POST">
                        <h2>Add Task</h2>
                        <p><?php
                        $msg = "";
                       @$msg = $_REQUEST['msg'];
                        echo $msg;
                        ?></p>
                        <div>
                            <label for="dept">Department</label>
                            <select name="dept" id="dept" require>
                                <option value="none">Select</option>
                                <option value="ict">ICT</option>
                                <option value="construction">Construction</option>
                            </select>
                        </div>

                        <div>
                            <label for="task">Task</label>
                            <textarea name="task" id="task" cols="20" rows="5" required></textarea>
                        </div>
                        <div>
                            <input class="btn" type="submit" name="submit" value="Add" id="add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>