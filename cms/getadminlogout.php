<?php
    
    
    session_start();

    session_unset();

    session_destroy();



    echo '<script>alert("Successfully logged out");</script>';
    echo '<script>window.location.href="./login.php";</script>';