<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Author
{
    public static function all()
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->query("SELECT * FROM authors ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
