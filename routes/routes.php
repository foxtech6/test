<?php

use Foxtech\Kernel\Route;

$route = new Route();

$route->add('/', 'MainController@index');
$route->add('addresses', 'MainController@listAddresses');
$route->add('add', 'MainController@addMarker');
$route->add('clear', 'MainController@clearMarkers');
