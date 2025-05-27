<?php 

namespace App\Controller;

class BaseController
{

    function index(): void
    {
        require_once "View/home/index.php";
    }

}

?>