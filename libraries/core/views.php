<?php
class Views
{
    function getView($controller, $role, $view){
        $controller = get_class($controller);
        if ($controller == 'Errors') {
            require_once("views/layout/header.php");
            require_once("views/errors/" . $view . ".php");
            require_once("views/layout/footer.php");
        } else {
            if ($controller == "User") {
                $view = 'views/' . $view . '.php';
            } else {
                $view = 'views/' . $controller . '/' . $view . '.php';
            }
            require_once("views/layout/header.php");
            require_once($view);
            require_once("views/layout/footer.php");
        }
    }
}
