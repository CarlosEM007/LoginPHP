<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema_usuarios";

    $connect = mysqli_connect($servername, $username, $password, $dbname);

    if(mysqli_connect_error()){
        echo "<script>alert('falha ao acessa DATA BASE')</script>".mysqli_connect_error($connect);
    }

?>