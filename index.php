<?php

    include 'includes/class-autoload.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO-OOP connection</title>
</head>
<body>

    <?php
        $usersObj = new UsersView();
        $usersObj->showUser("DaDa");

        $usersObj2 = new UsersContr();
        $usersObj2->createUser("Jane", "dolo", "1834-09-09");
    ?>

</body>
</html>
