<?php 

namespace App\Controller;

class BaseController
{
    public function index(): void
    {
        require_once __DIR__ . '/../View/home/index.php';
    }
}


?>