<?php

    @include('config.php');
    session_start();

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $password = md5($_POST['password']);
        $password2 = md5($_POST['password2']);
        $user_type = $_POST['user_type'];   

        $select = " SELECT * FROM users WHERE email = '$email ' && password = '$password' ";

        $result = mysqli_query($con, $select);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin') {
                $_SESSION['admin_name'] = $row['name'];
                header('Location:admin-page.php');
            }else if ($row['user_type'] == 'user'){
                $_SESSION['user_name'] = $row['name'];
                header('Location:user-page.php');
            }
        } else {
            $error = "Hãy kiểm tra lại Emai và Password !";
        }
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/registry-login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <!-- <div class="background-input"></div> -->
        <form action="" method = "post">
            <h3>Login Now</h3>
            <?php 
            if(isset($error)){
                    echo "<span class='error-msg'> $error </span>";
            };
            ?>
            <div>
                <input type="text" name = "email" required placeholder = "Nhập Email">
                <span> 
                    <i class="fa-solid fa-user"></i>    
                </span>
            </div>
            <div>
                <input type="password" name = "password" required placeholder = "Nhập Password">            
                <span> 
                    <i class="fa-solid fa-lock"></i>    
                </span>
            </div>
            <a href=""><h6>Forgot Password?</h6></a>
            <input type="submit"  name = "submit" value = "login now" class = "form-btn">
            <!-- <p> Bạn chưa có tài khoản ? <a href="registry.php">Registry Now</a></p> -->
        </form>
    </div>

    <div class="footer">

        <p> Bạn chưa có tài khoản ? <a href="registry.php">Registry Now</a></p>

    </div>
</body>
</html>