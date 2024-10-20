<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW</title>
</head>
<body>
    <style>
         table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <?php
        include "connection.php";

        $sql = "SELECT * FROM users WHERE 1=1";

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $_POST['username'];
            $email = $_POST['email'];

            if(!empty($username)){
                $sql .= " AND username like '%$username%'";
            }

            if(!empty($email)) {
                $sql .= " AND email like '%$email%'";
            }
        }

        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            //DISPLAY DATA INFORM OF A TABLE

            echo "<table>";
            echo "<tr><th>ID</th><th>USERNAME</th><th>EMAIL</th></tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            }

        } else {
            echo "No records";
        }

        $conn->close();
    ?>
    <form action="view.php" method="POST" >
        username: <input type="text" name="username" placeholder="Username">
        email: <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Filter" >
    </form>
</body>
</html>
