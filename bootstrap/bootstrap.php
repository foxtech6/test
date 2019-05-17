<?php

require PROJECT_PATH . '/vendor/autoload.php';

if (!isset($isCli)) {
    require_once PROJECT_PATH . '/routes/routes.php';
    require_once PROJECT_PATH . '/bootstrap/configuration.php';
}

