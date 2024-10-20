<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE FUNCTION</title>
</head>
<body>
    <?php
    include "connection.php";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql = "UPDATE users SET username = '$username' , email = '$email' WHERE id = '$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Update Successfull";
            } else {
                echo ("Update Failure" . $sql . "<br/>" . $conn->connect_error);
            }
        }
    ?>
    <form action="update.php" method="POST">
        id: <input type="text" name="id" placeholder="User Id">
        Username: <input type="text" name="username" placeholder="Username">
        Email: <input type="email" name="email" placeholder="Email">
        <input type="submit"  value="Update">
    </form>
</body>
</html>