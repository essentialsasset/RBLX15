<?php
session_start();
$config = include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

foreach (glob($_SERVER['DOCUMENT_ROOT'] . '/config/classes/*.php') as $class) {
    include_once $class;
}

try {
    $pdo = new PDO(
        "mysql:host=" . config['database']['host'] . ";dbname=" . config['database']['database'],
        config['database']['user'],
        config['database']['password'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    header('Content-Type: application/json');
    exit(json_encode(['error' => "true", "message" => "Database Error. Please Contact Administrator"])); //$e->getMessage()
}

if (config["site"]["maintenance"] and !$_SESSION["devpass"]) {
    header('Content-Type: application/json');
    exit(header("Location: /maintentance"));
}
  

