<?php

/**
 * Created by PhpStorm.
 * User: vitalik
 * Date: 22.06.17
 * Time: 14:31
 */
class Router
{
    private $routes; // масив для зберігання маршрутів

    public function __construct()
    {
        $routesPath= ROOT.'/config/routes.php';
        $this->routes = include ($routesPath); // властивості routes присвоюєм масив маршрутів
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI() // Отримуєм строку запросу
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
           return $uri = trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() // приймає управління від FRONT CONTROLLER і аналізує запрос
    {
        // Отримуєм строку запросу
        $uri = $this->getURI();

        // Перевіряєм наявність такого запросу в файлі routes
        foreach ($this->routes as $uriPattern => $path){

            // Порівнюємо $uriPattern і $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Отримуємо внутрішній шлях із зовнішнього за правилом
                $internalRout = preg_replace("~$uriPattern~", $path, $uri);

                // Оприділяєм який контроллер і action оброблятиме запрос
                $segments = explode('/',$internalRout); // розбиває строку на підстроки

                //array_shift отримує значення першого елемента масиву і видаляє його з нього
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName); //робить першу букву великою

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                // Підключаєм файл класс-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName. '.php';

                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                }

                // Створюєм об'єкт класса-контроллера,
                $controllerObject = new $controllerName;

                //Викликаєм потрібний метод (тобто action) і передаємо йому параметри
                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);

                if ($result != null) {
                    break;
                }
            }
        }
    }

}