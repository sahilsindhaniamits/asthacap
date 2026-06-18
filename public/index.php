<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine the project root path
// If deployed with all files in public_html parent (e.g., ~/asthacap/)
// adjust the path below to match your setup.
// Default: project files are ONE level above public_html
$projectRoot = __DIR__ . '/..';

// Register the Composer autoloader
require $projectRoot . '/vendor/autoload.php';

// Bootstrap Laravel and handle the incoming request
(require_once $projectRoot . '/bootstrap/app.php')
    ->handleRequest(Request::capture());
