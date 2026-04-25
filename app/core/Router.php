<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $uri, string $action): void // On stocke toutes tes routes dans un tableau
    {
        $this->routes[] = [
            'method' => 'GET',
            'uri' => $uri,
            'action' => $action
        ];
    }

    public function dispatch(string $requestUri, string $requestMethod): void // C’est la fonction qui : reçoit l’URL actuelle cherche une route correspondante
    {
        foreach ($this->routes as $route) {

            if ($route['method'] !== $requestMethod) {
                continue;
            }

            $pattern = $this->convertToRegex($route['uri']);

            if (preg_match($pattern, $requestUri, $matches)) {

                array_shift($matches);

                $this->callAction($route['action'], $matches);
                return;
            }
        }

        $this->abort404();
    }

    private function convertToRegex(string $uri): string
    {
        $pattern = preg_replace('#\{[^/]+\}#', '([^/]+)', $uri);
        return '#^' . $pattern . '$#';
    }

    private function callAction(string $action, array $params): void
    {
        [$controllerName, $method] = explode('@', $action);

        $controllerClass = "App\\Controllers\\$controllerName";

        if (!class_exists($controllerClass)) {
            throw new \Exception("Controller $controllerClass not found");
        }

        $controller = new $controllerClass();

        if (!method_exists($controller, $method)) {
            throw new \Exception("Method $method not found");
        }

        call_user_func_array([$controller, $method], $params);
    }

    private function abort404(): void
    {
        http_response_code(404);
        require "../app/views/pages/404.php";
    }
}