<?php
require_once __DIR__ . '/../vendor/autoload.php';

$paths = require __DIR__ . '/../paths.php';

return getApplication(
    getApplicationConfig('phprest', '1.0', true),
    $paths
);

/**
 * @param \Phprest\Config $config
 * @param array $paths
 *
 * @return \Phprest\Application
 */
function getApplication(\Phprest\Config $config, array $paths)
{
    $app = new \Phprest\Application($config);

    require_once $paths['services'];
    require_once $paths['logger'];
    require_once $paths['routes'];

    return $app;
}

/**
 * @param string $vendor
 * @param string|integer$apiVersion
 * @param boolean $debug
 *
 * @return \Phprest\Config
 */
function getApplicationConfig($vendor, $apiVersion, $debug)
{
    $config = new \Phprest\Config($vendor, $apiVersion, $debug);

    return $config;
}
