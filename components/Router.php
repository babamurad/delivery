<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = $_SERVER['DOCUMENT_ROOT'] . '/config/routes.php'; //$routesPath = substr($routesPath,0,-1);
        $this->routes = include($routesPath);
    }
    /*
    * Return request 
    * return string
    */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();
        // проверить наличие такого запроса в routes.php
        //Если есть совпадение, определить какой контроллер
        // и action обрабатывает запрос
        foreach ($this->routes as $uriPattern => $path) {
            //будем сравнивать строку запроса и строку которая соджержится в routes
            // $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                //Определить какой контроллер 
                // и action обрабатывают запрос
                //explode разделяем строку на 2 части
                $segments = explode('/', $internalRoute);
                //array_shift получает значение первого элемента в массиве и удаляет его из массива
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName); //первая буква строки с большой буквы
                $actionName  = 'action' . ucfirst(array_shift($segments)); //таким же путем получаем имя acion
                                //get parametres
                $parametres = $segments;
                // Подключить файл класса-контроллера
                $controllerFile = $_SERVER['DOCUMENT_ROOT'] . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                //Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;
//print_r('<br>ContrObject: '.$controllerName);
//print_r('<br>ActionName: '.$actionName.'<br>');
//                $result = $controllerObject->$actionName($parametres);
                $result = call_user_func_array(array($controllerObject, $actionName), $parametres);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
