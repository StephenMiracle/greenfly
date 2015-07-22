<?php

namespace Greenfly;
use Phlyty\App as RouteSystem;
/**
 * Application container
 *
 * @category   Greenfly
 * @package    Greenfly
 */
class App
{
    public $route;

    public function __construct()
    {
        $this->route = new RouteSystem();
    }

    public static function runDocument (array $documentTree)
    {
        $class = new static;
        $router = $class->route;

        foreach ($documentTree['get'] as $route => $content) {

            $router->get($route, function ($router) use ($content) {

                if (is_array($content)) {

                    foreach ($router->request()->getQuery()->toArray() as $key => $queryItem) {
                        $content['config']['params'][$key] = $queryItem;
                    }

                    foreach ($router->params()->getParams() as $key => $urlParam) {
                        $content['config']['params'][$key] = $urlParam;
                    }

                    if (!isset($content['config'])) {
                        $content['config'] = [];
                    }

                    return call_user_func($content['callback'], $content['config']);

                }
            });

        }

        $router->run();

    }


    public static function get ()
    {

    }

}
