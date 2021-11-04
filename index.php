<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("connec.php");
    $name=pg_query($conn,"SELECT name from infor where id=p01") or 
    die(pg_error($conn));
    echo $name;
    ?>
</body>
</html>