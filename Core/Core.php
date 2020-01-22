<?php

namespace Core;
use Core\Router;
include "src/routes.php";

class Core
{
    public function run()
    {
        $link = str_replace(BASE_URI, "", $_SERVER['REQUEST_URI']);

        include "src/routes.php";

        $tab = router::get($link);

        $tab['controller'] = ucfirst($tab['controller']);

        $controller = "Controller\\" . $tab['controller'] . "Controller";

        $action = $tab['action']. "Action";

        $app = new $controller();
        $app->$action();

        $route = (Router::get());
    }
}