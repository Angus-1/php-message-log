<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'luna');
define('DB_NAME', 'chatroom');
//for home server 

// connect to database 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connect
if($link === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
?>
