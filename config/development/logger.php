<?php

use Monolog\Handler\StreamHandler;
use Phprest\Service\Logger\Config as LoggerConfig;

/** @var \Phprest\Application $app */

/** @var \Monolog\Logger $logger */
$logger = $app->getContainer()->get(LoggerConfig::getServiceName());

$logger->pushHandler(
    new StreamHandler(__DIR__ . '/../../storage/log', \Monolog\Logger::DEBUG)
);
