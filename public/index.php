<?php

declare(strict_types=1);

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Get the configured application...
$app = require __DIR__ . '/../bootstrap/app.php';

// Boot the application...
$app->handleRequest();