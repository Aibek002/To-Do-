<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test page</title>
</head>
<body>
   <?php
   $user='root';
   $pass='root';
   $dsn='mysql:host=mysql1;dbname=information_schema;charset=utf8';
   $pdo=new PDO($dsn , $user , $pass);

   $stmt= $pdo->query('select * from tables');
   $row=$stmt->fetch();
   print_r($row);
   
   ?>
</body>
</html>
