<?php

include('connection.php');

$database->query(
    'INSERT INTO messages (nickname, message) 
    VALUES('.$database->quote($_POST["nickname"]).', '.$database->quote($_POST["message"]).')'
);

setcookie('nickname' , $_POST["nickname"], time() + 365 * 24 * 3600, '/', null, false, true);

header('Location: ../index.php');