<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

// Carrega variáveis do arquivo .env
$dotenv = Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

// Teste se a variável DB_HOST foi carregada corretamente
if (!getenv('DB_HOST')) {
    die('Erro: Variável de ambiente DB_HOST não carregada.');
}

// Teste se as variáveis carregaram
var_dump(getenv('DB_HOST'));

use App\Controllers\AuthorController;

$controller = new AuthorController();
$controller->index();
