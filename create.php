<?php 
    require('./database.php');
    
    if(isset($_POST['create'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sqlCreate = "INSERT INTO USERS VALUES (null, '$username', '$password')";
        $queryCreate = mysqli_query($connection, $sqlCreate);


        echo "<script>window.location.href = './index.php'</script>";

    }
?>