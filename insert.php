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
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

        if ($conn -> query($sql)){
          echo  "Insert successfull";
        } else {

            die("insert Failure" . $conn->connect_error);
        }
    }
    ?>
    <form action="insert.php" method="POST">
        username : <input type="text" name="username" placeholder="username">
        email : <input type="email" name="email" placeholder="email">
        <input type="submit"  value="Register">
    </form>
</body>
</html>