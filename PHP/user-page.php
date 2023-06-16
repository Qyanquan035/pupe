<?php  

    @include('config.php');
    session_start();

    if(!isset($_SESSION['user_name'])){
        header('Location:login-page.php');
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="../CSS/admin-user.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hi, <span> User</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
            <p>this is an user page</p>
            <a href="login.php" class="btn">login</a>
            <a href="registry.php" class="btn">registry</a>
            <a href="logout.php" class="btn">logout</a>

        </div>
    </div>
</body>
</html>