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
     $res1 = pg_query($conn,"SELECT id FROM infor ") or 
     die(pg_error($conn));
    ?>
    <h1>hii </h1>
</body>
</html>