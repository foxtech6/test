<?php

use Foxtech\Kernel\{RequestMapper, Builder};

$mapper = new RequestMapper();
$mapper->setClientRoute($_SERVER['QUERY_STRING']);

if (isset($_POST)) {
    $mapper->setParams($_POST);
}

$handler = new Builder($route, $mapper);
$handler->build();
