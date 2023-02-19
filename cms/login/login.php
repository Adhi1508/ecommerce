<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>E-commerce Website</title>
</head>

<body id="Body-back">
    <!-- Start of navigation bar -->
    <nav>
        <ul>
            <li class="cart"><a href="#cart"><i
                        class="fas fa-dumbbell"></i><span></span><span></span><span>FitFury</span></a></li>
            <li><a href="../cms/cms.php">Home</a></li>
            <li><a href="../login/login.php">Login</a></li>
        </ul>
    </nav>
    <!-- End of navigation bar -->

    <!-- Start of admin login -->
    <div class="LogBody">
        <div id="conlogin">
            <h2 id="Login-title">ADMIN LOGIN</h2>
            <img src="../images/LogIcon.jpg" class="Login-icon">
            <input class="loginput" id="Uname" type="text" placeholder="username" required />
            <br>
            <input class="loginput" id="pass" type="password" placeholder="password" required />
            <br>
            <button id="logbut">login</button>
        </div>
    </div>
    <!-- End of admin login -->

    <!-- Start of footer -->
    <footer>
        <p>Copyright © 2021 FitFury.com. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>
    <!-- End of footer -->

</body>

</html>