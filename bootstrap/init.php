<?php

include "constants.php";
include "config.php";
// include BASE_PATH . "vendor/autoload.php";
include BASE_PATH ."/libs/lib_helper.php";

try {
    $pdo = new PDO("mysql:dbname=$database_config->db;host={$database_config->host}", $database_config->user, $database_config->pass);
} catch (PDOException $e) {
    diePage('Connection failed: ' . $e->getMessage());
}

include BASE_PATH ."/libs/lib_link.php";
// include BASE_PATH . "libs/lib-tasks.php";