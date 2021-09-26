<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'crud';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){

        echo "Error: <br>";
        echo mysqli_connect_error();

    }else {
        
    }
?>