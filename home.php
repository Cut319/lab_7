<?php
    session_start();

    if(!isset($_SESSION['matric']))
    {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home Page</h1>
    <a href="logout.php">Logout</a>
    <a href="users.php">View users</a>
</body>
</html>
