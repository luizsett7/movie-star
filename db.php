<?php
require_once("env_config.php");
$db_database = getenv("DB_DATABASE");
$db_host = getenv("DB_HOST");
$db_username = getenv("DB_USERNAME");
$db_password = getenv("DB_PASSWORD");

$conn = new PDO("mysql:dbname=" . $db_database . ";host=" . $db_host, $db_username, $db_password);

// show errors PDO
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
