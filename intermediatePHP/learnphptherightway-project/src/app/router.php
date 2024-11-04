<?php

declare(strict_types=1);

namespace App;

require 'Exceptions/RouteNotFoundException.php';

use App\Exceptions\RouteNotFoundException;

class Router
{
    private array $routes;

    public function register(string $requestMethod, string $route, callable|array $action) : self
    {
        $this->routes[$requestMethod][$route] = $action;

        return $this;
    }

    public function get(string $route, callable|array $action) : self
    {
        return $this->register('GET', $route, $action);

    }

    public function post(string $route, callable|array $action) : self
    {
        return $this->register('POST', $route, $action);

    }

    public function routes() : array
    {
        return $this->routes;
    }

    public function resolve(string $requestUri, string $requestMethod)
    {
        $route = explode('?', $requestUri)[0]; // explode turns the string into array where '?' will be separating point.

        $action = $this->routes[$requestMethod][$route] ?? null;

        if(!$action) {
            echo 'Hello';
            throw new RouteNotFoundException();
        }

        if(is_callable($action)) {
            call_user_func($action);
        }

        if(is_array($action)) {
            [$class, $method] = $action;

            if(class_exists($class)) {
                $class = new $class();

                if(method_exists($class, $method)) {
                    return call_user_func_array([$class, $method], []);
                }
            }
        }

        throw new RouteNotFoundException();
        
    }
}
