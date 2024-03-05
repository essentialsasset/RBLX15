<?php
session_start();
$config = include_once $_SERVER['DOCUMENT_ROOT'] . '/testingfoldercausewhynot/config/config.php';

foreach (glob($_SERVER['DOCUMENT_ROOT'] . '/testingfoldercausewhynot/config/classes/*.php') as $class) {
    include_once $class;
}

try {
    $pdo = new PDO(
        "mysql:host=" . config1['database']['host'] . ";dbname=" . config1['database']['database'],
        config1['database']['user'],
        config1['database']['password'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    header('Content-Type: application/json');
    exit(json_encode(['error' => "true", "message" => "Database Error. Please Contact Administrator"])); //$e->getMessage()
}

if (config1["site"]["maintenance"] and !$_SESSION["devpass"]) {
    header('Content-Type: application/json');
    exit(header("Location: /testingfoldercausewhynot/maintentance"));
}
  

