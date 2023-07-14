
<?php 

/** Not being used in this version */

class Router
{
    protected $routes = [];

    public function addRoute($path, $handler)
    {
        $this->routes[$path] = $handler;
    }

    public function resolve()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $path = rtrim(parse_url($requestUri, PHP_URL_PATH), '/');
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$path])) {
            $handler = $this->routes[$path];
            if (is_callable($handler)) {
                call_user_func($handler);
            } else {
                $segments = explode('@', $handler);
                $controllerName = $segments[0];
                $actionName = $segments[1];

                $controller = new $controllerName();
                $controller->$actionName();
            }
        } else {
            echo '404 Not Found R';
        }
    }
}