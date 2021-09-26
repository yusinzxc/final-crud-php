<?php
    require('./database.php');

    if(isset($_POST['edit'])){

        $editID = $_POST['editID'];
        $editUsername = $_POST['editUsername'];
        $editPassword = $_POST['editPassword'];

        echo $editID, $editUsername, $editPassword;

    }

    if(isset($_POST['update'])) {

        $updateID = $_POST['updateID'];
        $updateUsername = $_POST['updateUsername'];
        $updatePassword = $_POST['updatePassword'];

        echo $updateID, $updateUsername, $updatePassword;

        $sqlUpdate = "UPDATE USERS SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateID";
        $queryUpdate = mysqli_query($connection, $sqlUpdate);

        echo '<script>window.location.href = "./index.php"</script>';

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/update.css">
    <title>Update User</title>
</head>
<body>
   <div class="main-update">

       <form action="/crud/update.php" class="update-form" method="post">

           <h1>Update User</h1>
           <input type="text" name="updateUsername" id="" placeholder='Username' value="<?php echo $editUsername ?>">
           <input type="text" name="updatePassword" id="" placeholder='Password' value="<?php echo $editPassword ?>">
           <input type="submit" name="update" value="Update">
           <input type="hidden" name="updateID" value="<?php echo $editID ?>">

       </form>

   </div> 
</body>
</html>