<?php

    require('./database.php');

    if(isset($_POST['delete'])){

        $deleteID = $_POST['deleteID'];

        $sqlDelete = "DELETE FROM USERS WHERE id = $deleteID";
        $queryDelete = mysqli_query($connection, $sqlDelete);

        echo "<script>window.location.href = './index.php'</script>";
    }

?>