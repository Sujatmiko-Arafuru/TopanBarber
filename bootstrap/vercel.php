<?php

/**
 * Vercel serverless bootstrap: writable /tmp paths and drivers that
 * do not need a persistent database.
 */
$root = '/tmp/topanbarber';

$directories = [
    $root.'/storage/app/public',
    $root.'/storage/framework/cache/data',
    $root.'/storage/framework/sessions',
    $root.'/storage/framework/views',
    $root.'/storage/logs',
    $root.'/views',
];

foreach ($directories as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

$sqlite = $root.'/database.sqlite';
if (! file_exists($sqlite)) {
    touch($sqlite);
}

$overrides = [
    'APP_ENV' => 'production',
    'LOG_CHANNEL' => 'stderr',
    'LOG_STACK' => 'stderr',
    'SESSION_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'CACHE_DRIVER' => 'array',
    'QUEUE_CONNECTION' => 'sync',
    'VIEW_COMPILED_PATH' => $root.'/views',
    'DB_CONNECTION' => 'sqlite',
    'DB_DATABASE' => $sqlite,
    'APP_MAINTENANCE_DRIVER' => 'file',
    'APP_MAINTENANCE_STORE' => 'array',
];

$currentKey = (string) (getenv('APP_KEY') ?: ($_ENV['APP_KEY'] ?? ''));
if ($currentKey === '') {
    $overrides['APP_KEY'] = 'base64:'.base64_encode(str_repeat('T', 32));
}

foreach ($overrides as $key => $value) {
    putenv($key.'='.$value);
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}
