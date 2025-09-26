<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo '<pre>';
var_dump($_ENV);
var_dump(getenv('DB_NAME'));
echo '</pre>';
