<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\Controllers\AuthorController;

$rootPath = dirname(__FILE__, 2);

// Load environment variables
$dotenv = Dotenv::createImmutable($rootPath);
$dotenv->load();

$controller = new AuthorController();
$controller->index();
