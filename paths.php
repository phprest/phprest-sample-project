<?php
$env = getenv('PHPREST_ENV') ? getenv('PHPREST_ENV') . '/' : 'development';

return [
    'app'       => __DIR__ . '/config/app.php',
    'routes'    => __DIR__ . '/config/routes.php',
    'services'  => __DIR__ . '/config/services.php',
    'logger'    => __DIR__ . '/config/' . $env . '/logger.php'
];
