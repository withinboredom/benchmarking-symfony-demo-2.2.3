<?php
$_SERVER['SCRIPT_FILENAME'] ??= dirname(__DIR__) . '/public/index.php';
$_SERVER['REQUEST_URI'] ??= '/en/blog/';

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};