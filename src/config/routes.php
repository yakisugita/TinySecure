<?php
use Cake\Routing\RouteBuilder;
use BaserCore\Routing\BcRouteLoader;

return function (RouteBuilder $routes) {
    // baserCMS のプラグインのルーティングを読み込む
    BcRouteLoader::loadPluginRoutes($routes);
};
