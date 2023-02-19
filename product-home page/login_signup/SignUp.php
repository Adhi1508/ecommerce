<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>SignUp</title>
</head>

<!-- A hero image added to the background -->

<body id="Body-back">

    <!-- Start of navigation bar -->
    <nav>
        <ul>
            <li class="cart"><a href="#cart"><i
                        class="fas fa-dumbbell"></i><span></span><span></span><span>FitFury</span></a></li>
            <form class="search-form">
                <input type="text" placeholder="Search for products">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <li><a href="../home/home.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="Signup.php">SignUp</a></li>
            <li class="cart"><a href="../home/home.php"><i class="fa fa-shopping-cart"></i><span>Cart</span></a></li>
        </ul>
    </nav>
    <!-- End of navigation bar -->

    <script src ="SignUp.js"></script>
    <!-- Start of SignUp using the more or less the same CSS as the lgin page -->
    <div class="SignBody">
        <form onsubmit="return Validate()"
            action="getRegistration.php" method="post">
            <div id="conSign">
                <h2 id="Login-title">CUSTOMER SIGNUP</h2>
                <img src="../images/LogIcon.jpg" class="Login-icon">
                <input class="loginput" id="fname" type="text" name= "fname" placeholder="First name" required />
                <br>
                <input class="loginput" id="lname" type="text" name= "lname" placeholder="Last name" required />
                <br>
                <input class="loginput" id="uname" type="text" name= "uname" placeholder="Username" required />
                <br>
                <input class="loginput" id="pass" type="password" name= "pass" placeholder="Password" onkeyup="checkPass()" required />
                <span id="strength">...</span>
                <br>
                <input class="loginput" id="cpass" type="password" name= "cpass" placeholder="Confirm password" required />
                <br>
                <button id="logbut" type="submit">SignUp</button>
            </div>
        </form>
    </div>

    <!-- End of SignUp -->


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