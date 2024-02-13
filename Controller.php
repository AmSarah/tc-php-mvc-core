<?php
namespace thecodeholicsarah\phpmvc;
use thecodeholicsarah\phpmvc\Application;
use thecodeholicsarah\phpmvc\middlewares\BaseMiddleware;



class Controller 
{
    public string $layout = 'main';
    public string $action = '';
    protected array $middelwares = [];

    public function render($view, $params=[]){
        return Application::$app->view->renderView($view, $params);
    }
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middelwares[] = $middleware;
    }
    public function getMiddlewares(): array {
        return $this->middelwares;
    }
}