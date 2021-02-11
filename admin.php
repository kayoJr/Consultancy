<?php
require_once 'connect.php';
require_once 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <div class="adminPanel">
        <div class="side">
            <div class="logo">
                <h1>GCS</h1>
            </div>
            <div class="navs">
                <ul>
                    <li class="active"><a href="#">Task</a></li>
                    <li><a href="addTask.php">Add Task</a></li>
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
                    <nav>
                        <h3 data-tab-target="#page1" id="pagen1" class="active tab">Pending Tasks</h3>
                        <h3 data-tab-target="#page2" class="tab" id="pagen2">Completed Tasks</h3>
                    </nav>
                    <div class="tab-content">
                        <div id="page1" data-tab-content class="active">
                            <?php
                        $sql = "SELECT * FROM `pending_tasks` ORDER BY `id` DESC;";
                        $result = $conn->query($sql);
                        if(@$result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                    ?>
                            <div class="box">
                                <div>
                                    <p class="heading">
                                        <?php
                                echo $row['header'];
                                ?>
                                    </p>
                                    <p>
                                        <?php
                                echo $row['task']. "<br>";
                            ?>
                                    </p>
                                </div>
                                <div>
                                <?php
                                echo "<a class='btn' href='delete.php?rn=$row[id]'>Delete</a>";
                                
                                ?>
                                </div>
                            </div>
                            <?php           
                            }
                        }
                    ?>
                        </div>

                        <div id="page2" data-tab-content>
                        <?php
                        $sql = "SELECT * FROM `completed_task` ORDER BY `id` DESC;";
                        $result = $conn->query($sql);
                        if(@$result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                    ?>
                            <div class="box">
                                <div>
                                    <p class="heading">
                                        <?php
                                echo $row['header'];
                                ?>
                                    </p>
                                    <p>
                                        <?php
                                echo $row['task']. "<br>";
                            ?>
                                    </p>
                                </div>
                                <div>
                                <?php
                                echo "<a class='btn btn-white' href='delete_comp.php?rn=$row[id]'>Delete</a>";
                                
                                ?>
                                </div>
                            </div>
                            <?php           
                            }
                        }
                    ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>