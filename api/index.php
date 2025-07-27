<?php

// Vercel PHP entry point for Laravel
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

// Set basic environment
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Create .env file if not exists
if (!file_exists(__DIR__ . '/../.env')) {
    if (file_exists(__DIR__ . '/../.env.production')) {
        copy(__DIR__ . '/../.env.production', __DIR__ . '/../.env');
    }
}

// Bootstrap Laravel
require_once __DIR__ . '/../public/index.php';
