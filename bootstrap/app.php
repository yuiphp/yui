<?php

use Yui\Application;

/**
 * Create a new Yui application instance.
 */
return Application::configure(
    [
        'basePath' => dirname(__DIR__),
    ])->build();