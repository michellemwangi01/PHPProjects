<?php

if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}

//header("Location: login.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is the logout page</h1>
</body>
</html>