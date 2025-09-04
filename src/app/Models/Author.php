<?php

namespace App\Models;

use PDO;
use Core\Database;

class Author
{
    public static function all()
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->query("SELECT * FROM authors ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
