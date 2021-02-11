<?php
require_once 'connect.php';
require_once 'auth.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
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
                    <li><a href="change_pass.php">Change Password</a></li>
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
                    $user = $_SESSION['user'];
                   // $query = "SELECT `department` FROM `users` WHERE 'id'= '$user'";
                    $query="select department from users where id='".$user."'";
                    $result=mysqli_query($conn, $query);
                   
                        if($row = mysqli_fetch_assoc($result)){
                        // echo $row['department'];
                         if($row['department']==="construction"){
                            $pos = "construction";
                            $sql="select * from pending_tasks where department='".$pos."' ORDER BY id DESC";
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
                                echo $row['task'];
                            ?>
                                        </div>
                                        <div>
                                        <?php
                                           echo "<a class='btn' href='done.php?rn=$row[id]'>Done</a>";
                                            ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                        }else{
                            $pos = "ict";
                            $sql="select * from pending_tasks where department='".$pos."' ORDER BY id DESC";
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
                                echo $row['task'];
                            ?>
                                        </div>
                                        <div>
                                        <?php
                                           echo "<a class='btn' href='done.php?rn=$row[id]'>Done</a>";
                                            ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                        }
                        }


                ?>

                        </div>
                        <div id="page2" data-tab-content>
                        <?php
                    $user = $_SESSION['user'];
                   // $query = "SELECT `department` FROM `users` WHERE 'id'= '$user'";
                    $query="select department from users where id='".$user."'";
                    $result=mysqli_query($conn, $query);
                   
                        if($row = mysqli_fetch_assoc($result)){
                        // echo $row['department'];
                         if($row['department']==="construction"){
                            $pos = "construction";
                            $sql="select * from completed_task where department='".$pos."' ORDER BY id DESC";
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
                                echo $row['task'];
                            ?>
                                        </div>
                                       
                                    </div>
                            <?php
                                }
                            }
                        }else{
                            $pos = "ict";
                            $sql="select * from completed_task where department='".$pos."' ORDER BY id DESC";
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
                                echo $row['task'];
                            ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
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