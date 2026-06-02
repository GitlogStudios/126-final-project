<?php
require_once __DIR__ . '/db_config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

if ($conn->connect_error) {
    die("Database connection failed.");
}
?>