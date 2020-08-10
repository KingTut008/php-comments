<?php
$db = [
    "host" => "localhost",
    "user" => "php_comments",
    "password" => "123456",
    "dbname" => "php_comments"
];

$dns = "mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'];

try {
    $dbConnect = new PDO ($dns, $db['user'], $db['password']);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}