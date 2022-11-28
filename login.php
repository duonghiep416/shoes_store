<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/login.css">
</head>
<body>
    <div class="form">
        <div class="login-img">
            <img src="assets/img/login.jpg" alt="">
        </div>
        <form class="form-login" method="POST">
            <h1>Member Login</h1>
            <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <input type="text" name="username" id="" class="login-email" placeholder="Username">
            </div>
            <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="" class="login-password" placeholder="Password">
            </div>
            <input class="loginbtn" type="submit" value="Login" name="login">
            <p>Don't have an account? <a href="register.php">Signup now</a></p>
        </form>
        <?php

            $connect = mysqli_connect('localhost','root','','register_data');
            if(!$connect){
                echo "Kết nối thất bại";
            }
            //Nhận dữ liệu từ form 
            if(isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
            //Xây dựng câu truy vấn
            $sql = "SELECT * FROM  users WHERE username = '$username' AND password = '$password'";
            //Thực thi truy vấn
            $result = mysqli_query($connect, $sql);
            //Nhận kết quả trả về là số dòng truy vấn và xử lý
            $count = mysqli_num_rows($result);
            if($count > 0) {
                echo"<script> window.open('index.php','_self') </script>";
            }
            else {
                echo "<p class='noti_result'>Incorrect username or password</p>";  
            }
            }
            ?>
    </div>
</body>
</html>