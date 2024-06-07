<?php

// Load Composer's autoload file
require __DIR__ . '/../vendor/autoload.php';

// Include the Laravel bootstrap file
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Handle the incoming request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
