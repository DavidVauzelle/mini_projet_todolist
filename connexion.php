<?php

$dbname = 'mini_projet_todolist';
$host = '127.0.0.1';
// $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$user = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// $dbh = new PDO($dsn, $user, $password, $options);
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $options);