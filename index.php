<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hii</h1>
    <?php
    include_once("connec.php");
    $id = "id";
    $name = "name";
    $age="age"
    
    // Create connection
    $conn = pg_connect( $id, $name, $age);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . pg_connect_error());
    }
    
    $sql = "SELECT id, name, age FROM infor";
    $result = pg_query($conn, $sql);
    
    if (pg_num_rows($result) > 0) {
        // output data of each row
        while($row = pg_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    pg_close($conn);
    ?>
</body>
</html>