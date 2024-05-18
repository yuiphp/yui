<?php

use Yui\Application;

/**
 * Configure the application to be bootstrapped.
 */
return Application::configure()
	->with(
		basePath: dirname(__DIR__),
		bootstrapPath: dirname(__DIR__).'/bootstrap',
		databasePath: dirname(__DIR__).'/app/Database',
		publicPath: dirname(__DIR__).'/public',
		resourcePath: dirname(__DIR__).'/resources',
		storagePath: dirname(__DIR__).'/storage',
		routesPath: dirname(__DIR__).'/app/Routes',
	)
	->create();