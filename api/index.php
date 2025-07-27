<?php

// Bootstrap Laravel for Vercel
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';

// Ensure proper document root
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Set up basic environment if not exists
if (!isset($_ENV['APP_KEY']) && !getenv('APP_KEY')) {
    putenv('APP_KEY=base64:bGFyYXZlbF9zZXNzaW9uOmtleTEyMzQ1Njc4OTA=');
}

// Forward to Laravel's public/index.php
require_once __DIR__ . '/../public/index.php';
