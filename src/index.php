<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    require_once __DIR__ . "/api/" . $class . ".php";
});

set_exception_handler(["ErrorHandler", "handleException"]);

header("Content-Type: application/json; charset=UTF-8");

$parts = explode("/", $_SERVER["REQUEST_URI"]);

// print_r($parts);

if ($parts[1] != "accounts") {
    http_response_code(404);
    exit();
}

$id = $parts[2] ?? null;

$database = new Database("mysql", "root", "root", "app");

$connection = $database->getConnection();

$controller = new AccountController();
$controller->processRequest($_SERVER["REQUEST_METHOD"], $id);

?>
