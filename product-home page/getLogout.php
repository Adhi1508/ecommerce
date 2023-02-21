<?php
    echo'<script src="./basket.js"></script>';
    echo '<script>emptyBasket()</script>';
    
    session_start();

    session_unset();

    session_destroy();



    echo '<script>alert("Successfully logged out");</script>';
    echo '<script>window.location.href="./index.php";</script>';