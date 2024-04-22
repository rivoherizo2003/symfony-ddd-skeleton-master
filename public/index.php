<?php

use function Symfony\Component\DependencyInjection\Loader\Configurator\env;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return static function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG'], $context['APP_CONTEXT']);
};
