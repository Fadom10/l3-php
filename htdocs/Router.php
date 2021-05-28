<?php

use AppTP3\Controller\CatalogController;
class Router
{

    /**
     *
     */
    function process()
    {
        /**
         * ex http://localhost/
         *
         * $uri = /
         */
        $uri = $_SERVER['REQUEST_URI'];
        echo $uri.'<br>';

        /**
         * ex http://localhost/catalog
         *
         * $uri = /catalog
         */

        /**
         * ex http://localhost/catalog/product
         *
         * $uri = /catalog/product
         */

        /**
         * mapping entre $uri et routes.json
         * Prevoir route non connue => 404
         */

        $controllerAll ="";
        $Json = file_get_contents("routes.json");
        $routes = json_decode($Json, true);

        foreach ($routes as $route){
            if($uri == $route['path']){
                $controllerAll = "AppTP3\Controller\"".$route['controller'];
                var_dump($controllerAll);
                break;
            }else{
                header("HTTP/1.0 404 Not Found");
                http_response_code(404);
                echo '404';
                break;
            }
        }


        $controles = explode("@", $controllerAll);

        function redirection($arg, $arg2) {
            $arg = new $arg;
            $arg->$arg2;
        }

        call_user_func_array("redirection", array($controles[0], $controles[1]));

    }

}