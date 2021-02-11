<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <script src="/js/login.js"></script>
</head>

<body>
    <form action="process.php" method="POST">
        <h1>
            General Consultancy
        </h1>
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
        <div class="formElement">
            <input type="number" name="id" id="id" autocomplete="off" required>
            <label for="id" class="labelName"><span class="contentName">Id</span></label>
        </div>
        <div class="formElement">
            <input type="password" name="pass" id="pass" autocomplete="off" required>
            <label for="pass" class="labelName"><span class="contentName">Password</span></label>
        </div>
        <div>
            <input type="submit" value="Login" class="btn" name="Login">
        </div>
    </form>
</body>

</html>