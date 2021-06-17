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
        $int = 0;
        foreach ($routes as $route){
            if($uri == $route['path']){
                $controllerAll = "AppTP3\Controller\\".$route['controller'];
                $int = 0;
                break;
            }else{
                header("HTTP/1.0 404 Not Found");
                http_response_code(404);
                $int = 1;
            }
        }

        if ($int == 1) {
            echo '404';
        }else{

            $controles = explode("@", $controllerAll);

            #call_user_func_array("redirection", array($controles[0], $controles[1]));

            $controllerInstance = $controles[0];
            $method= $controles[1];
            var_dump($controllerInstance);
            var_dump($method);

            return(new $controllerInstance())->{$method}();
        }

    }

}