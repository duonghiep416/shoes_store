<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/register.css">
</head>
<body>
    <div class="form">
        <div class="login-img">
            <img src="assets/img/login.jpg" alt="">
        </div>
        <form class="form-login" method="POST">
            <h1>Member Register</h1>
            <div class="first-name" style="display: none;">
                <i class="fa-solid fa-spell-check"></i>
                <input type="text" name="user_id" id="" class="login-email" placeholder="ID">
            </div>
            <div class="first-name">
                <i class="fa-solid fa-spell-check"></i>
                <input type="text" name="user_first_name" id="" class="login-email" placeholder="First name">
            </div>
            <div class="last-name">
                <i class="fa-solid fa-spell-check"></i>
                <input type="text" name="user_last_name" id="" class="login-email" placeholder="Last name">
            </div>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="username" id="" class="login-email" placeholder="Email">
            </div>
            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="" class="login-password" placeholder="Password">
            </div>
            <input class="loginbtn" type="submit" value="Register Now" name="register">
            <p>Already have an account? <a href="login.php">Login now</a></p>
        </form>
    </div>
    <?php
        $connect = mysqli_connect('localhost','root','','register_data');
        if(isset($_POST['register'])) {
            $user_id = $_POST['user_id'];
            $user_first_name = $_POST['user_first_name'];
            $user_last_name	 = $_POST['user_last_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "INSERT INTO  users VALUES('$user_id', '$user_first_name', '$user_last_name', '$username', '$password')";
            $result = mysqli_query($connect, $sql);
            if($result) {
                echo"<p class='noti_result'>Successful</p>";
            }
            else {
                echo "<p class='noti_result'>Failed</p>";
            }
        }
    ?>
</body>
</html>