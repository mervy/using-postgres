<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Controllers\AuthorController;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$controller = new AuthorController();
$controller->index();
