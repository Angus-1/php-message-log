<?php
session_start();

// if not logged in, redirect login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the chat room.</h1>
    <p>
       <a href="log.php" class="btn btn-warning">Access chat messages</a>
       <br><br>
        <a href="reset-password.php" class="btn btn-warning">Reset account Password</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
        <br><br>
    </p>
</body>
</html>
