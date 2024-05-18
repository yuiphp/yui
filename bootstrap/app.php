<?php

use Yui\Application;

/**
 * Create a new Yui application instance.
 */
return Application::configure()
	->with(
		basePath: dirname(__DIR__),
	)
	->create();