<?php
//Start session 
    function logincheck()
    {
        session_start();

        //Find out if session exists
        if (array_key_exists("username", $_SESSION) )
        {
            echo 'Session in progress';
            echo '<br>';
            echo 'Username: ' . $_SESSION["username"];
        }
        else 
        {
            echo '<br>';
            echo 'No user Logged in';
        }
    }
    
    logincheck();
?>

