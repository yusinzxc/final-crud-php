<?php 
    require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Users</title>
</head>
<body>
    <div class="main">


        <div class="create-users">
            <form action="/crud/create.php" method="post" class="create-users-form">
                <h1>Create Users</h1>
                <input type="username" name='username' placeholder='Username'>
                <input type="password" name='password' placeholder='New password'>
                <input type="submit" name='create' value="Create">
            </form>
        </div>

        <div class="users">     
            <table>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                <?php while($records = mysqli_fetch_array($querySelect)){ ?>
                <tr>
                    <td><?php echo $records['id'] ?></td>
                    <td><?php echo $records['username'] ?></td>
                    <td><?php echo $records['password'] ?></td>
                    <td class='td-buttons'>
                        <form action="/crud/update.php" class='td-edit' method='post'>
                            <input type="submit" name="edit" value="Edit" class='edit'>
                            <input type="hidden" name="editID" value="<?php echo $records['id'] ?>">
                            <input type="hidden" name="editUsername" value="<?php echo $records['username'] ?>">
                            <input type="hidden" name="editPassword" value="<?php echo $records['password'] ?>">                        
                        </form>
                        <form action="/crud/delete.php" class='td-delete' method="post">
                            <input type="submit" name="delete" value="Delete" class='delete'>
                            <input type="hidden" name="deleteID" value="<?php echo $records['id'] ?>">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</body>
</html>