<?php

use App\Controller\BaseController;

require_once __DIR__ . "./vendor/autoload.php";

if ($_GET):

    $controller = $_GET['controller'];
    $metodo = $_GET['metodo'];

    $objClass = new $objClass();
    $obj->$metodo();

else:
    $inicio = new BaseController();
    $inicio->index();

endif;

?>