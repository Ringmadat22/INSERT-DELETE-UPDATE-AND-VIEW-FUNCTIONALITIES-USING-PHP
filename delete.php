<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "connection.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];

            $sql = "DELETE FROM users WHERE id = '$id'";

            if ($conn->query($sql) === TRUE) {
                echo "Delete Successfull";
            } else {
                echo ("Delete failure" . $sql . "<br />" . $conn->connect_error);
            }
        }
    ?>

    <form action="delete.php" method="POST">
        id: <input type="text" name="id" placeholder="Enter user id">
        <input type="submit" value="delete">
    </form>
</body>
</html>