<?php

/**
 * Plugin Name: LaraSpark
 * Description: WordPress plugin with Laravel framework
 * Version: 0.0.0-alpha
 * Author: Yevhenii Volosiuk
 * Requires PHP: >=8.0
 */

declare(strict_types=1);

use Illuminate\Http\Request;

// Register the Composer autoloader...
require_once __DIR__ . '/vendor/autoload.php';

add_action('plugins_loaded', function () {
    // Bootstrap WordPress plugin and handle the request...
    (require_once __DIR__.'/bootstrap/app.php')
        ->handleRequest(Request::capture());
});
