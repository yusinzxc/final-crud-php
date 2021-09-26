<?php
    require('./database.php');
    $sqlSelect = "SELECT * FROM USERS";
    $querySelect = mysqli_query($connection, $sqlSelect);
?>