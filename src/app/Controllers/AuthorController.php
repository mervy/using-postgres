<?php
namespace App\Controllers;

use App\Models\Author;

class AuthorController
{
    public function index()
    {
        $authors = Author::all();
        require __DIR__ . '/../Views/authors.php';
    }
}
