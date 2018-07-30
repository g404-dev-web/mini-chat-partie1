<?php

include('connection.php');

$messagesQuery = $database->query(
    'SELECT * FROM messages'
);

$messages = $messagesQuery->fetchAll();