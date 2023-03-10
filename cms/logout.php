<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Logout</title>
</head>

<!-- A hero image added to the background -->
<body id="Body-back">

    <!-- Start of navigation bar -->
    <nav>
        <ul>
            <li class="cart"><a href="#cart"><i
                        class="fas fa-dumbbell"></i><span></span><span></span><span>FitFury</span></a></li>
            <li><a href="./cms.php">Home</a></li>
            <li><a id ="login/logout" href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <!-- End of navigation bar -->

    <!-- Start of login -->
    <div class="LogoutBody">
        <!-- <form onsubmit action="getLogout.php" method="post"> -->
            <div id="conlogout">
                <h2 id="Login-title">LOGOUT</h2>
                <p id="Logout-para"> Do you want to logout?</p>
                <br>
                <!-- <img src="../images/LogIcon.jpg" class="Login-icon"> -->

                <!-- Entry box for username -->
                <!-- <input class="loginput" id="uname" type="text" placeholder="Username" name="uname" required /> -->
                <!-- <br> -->

                <!-- Entry box for password -->
                <!-- <input class="loginput" id="pass" type="password" placeholder="Password" name="pass" required /> -->
                <!-- <br> -->

                <!-- logout button -->
                <button id="logout1but" type="button" onclick="window.location.href='getadminlogout.php';">Yes</button>
                <button id="logout2but" type="button" onclick="window.location.href='./cms.php';">No</button>
            </div>
        <!-- </form> -->
    </div>
    <!-- End of login -->

    <!-- Start of footer -->
    <footer>
        <p>Copyright ?? 2021 FitFury.com. All rights reserved.</p>
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