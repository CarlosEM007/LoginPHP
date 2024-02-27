<?php

    //Close the server
    session_start();
    session_unset();
    session_destroy();
    header("location: ../login/index.php");
?>