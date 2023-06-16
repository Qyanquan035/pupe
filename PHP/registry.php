<?php

    @include('config.php');

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $password = md5($_POST['password']);
        $password2 = md5($_POST['password2']);
        $user_type = $_POST['user_type'];   

        $select = " SELECT * FROM users WHERE email = '$email ' && password = '$password' ";

        $result = mysqli_query($con, $select);

        if(mysqli_num_rows($result) > 0) {
            $error = 'Tên đã tồn tại !';
            
        } else {
            if($password != $password2){
                $error = 'Password không trùng khớp !';
            } else {
                $insert = "INSERT INTO users(email, name, password, user_type) VALUES ('$email','$username', '$password', '$user_type')";
                mysqli_query($con, $insert);
                header('Location:login.php');
            }
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry</title>
    <link rel="stylesheet" href="../CSS/registry-login.css?v=<?php echo time()?>">
</head>
<body>
<div class="container2">
        <div class="logo">
            <a href="#" title="Logo">
                <img src="../Images/logo/logoipsum-288.svg" alt="Shop Logo" class="img-responsive">
            </a>
        </div>

        <div class="menu text-right">
            <ul>
                <li>
                    <a href="../index.html">Home</a>
                </li>
                <li>
                    <a href="../categories.html">Categories</a>
                </li>
                <li>
                    <a href="../foods.html">Foods</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <form action="" method = "post">
            <h3>Registry Now</h3>
            <?php 
            if(isset($error)){
                    echo "<span class='error-msg'> $error </span>";
            };
            ?>
            <div class="emailaa">
                <input type="email" name = "email" required placeholder = "Nhập Email">
                <span> 
                    <i class="fa-solid fa-user"></i>  
                </span>
            </div>
            <input type="text" name = "name" required placeholder = "Nhập UserName">
            <input type="password" name = "password" required placeholder = "Nhập Password">
            <input type="password" name = "password2" required placeholder = "Nhập Lại Password">
            <select name="user_type">
                <option value="user"> User </option>
                <option value="admin"> Admin </option>
            </select>
            <input type="submit"  name = "submit" value = "registry now" class = "form-btn">
        </form>
    </div>

    <div class="footer">
        <p> Bạn đã có tài khoản ? <a href="login.php">Login Now</a></p>
    </div>
</body>
</html>