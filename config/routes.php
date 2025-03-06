<?php
use Cake\Routing\RouteBuilder;
use BaserCore\Routing\BcRouteLoader;

return function (RouteBuilder $routes) {
    BcRouteLoader::loadPluginRoutes($routes);
};