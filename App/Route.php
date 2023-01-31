<?php

namespace App;

use App\MF\Init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes() {

        $routes['home'] = [
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        ];

        $routes['sobrenos'] = [
            'route' => '/sobrenos',
            'controller' => 'indexController',
            'action' => 'sobrenos'
        ];

        $this->setRoutes($routes);

    }    

}