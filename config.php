<?php

$host = 'eu-cdbr-west-01.cleardb.com';
$db = 'heroku_d7ba820f9aa6e80';
$user = 'b09ed9e4ea14e8';
$pass = '9b98fbc2';
$port = 3306;

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,          //This helps throwing errors
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,         //Sets default fecth mode
    \PDO::ATTR_EMULATE_PREPARES   => false,                                             //Use native prepared statements
];

$dsn = "mysql:host=$host;dbname=$db;port=$port";

try {
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>