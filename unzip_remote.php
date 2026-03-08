<?php

// Security key - This MUST match the key sent by your deploy script
$secret = 'your_secret_key_here123';

// Simple security check
if (!isset($_GET['secret']) || $_GET['secret'] !== $secret) {
    http_response_code(403);
    exit('Access Denied');
}

$zipFile = 'deploy.zip';
$extractPath = __DIR__;

// Check if zip file exists
if (!file_exists($zipFile)) {
    http_response_code(404);
    exit('Error: ' . $zipFile . ' not found.');
}

$zip = new ZipArchive;

if ($zip->open($zipFile) === true) {
    $zip->extractTo($extractPath);
    $zip->close();

    // Create storage symbolic link
    $target = $extractPath . '/storage/app/public';
    $link = $extractPath . '/public/storage';

    if (file_exists($link)) {
        echo 'Storage link already exists.<br>';
    } else {
        if (symlink($target, $link)) {
            echo 'Storage link created successfully.<br>';
        } else {
            echo 'Failed to create storage link.<br>';
        }
    }

    // Run Commands
    if (function_exists('shell_exec')) {
        echo "<h3>Running Server Commands...</h3>";
        
        // 1. Composer Update & Install
        echo "<strong>Running 'composer update'...</strong><br>";
        $output = shell_exec('export HOME=' . __DIR__ . '; composer update 2>&1');
        echo "<pre>$output</pre>";

        echo "<strong>Running 'composer install'...</strong><br>";
        $output = shell_exec('export HOME=' . __DIR__ . '; composer install --no-dev --optimize-autoloader 2>&1');
        echo "<pre>$output</pre>";
        
        // 2. Artisan Optimize
        echo "<strong>Running 'php artisan optimize'...</strong><br>";
        $output = shell_exec('php artisan optimize 2>&1');
        echo "<pre>$output</pre>";
        
    } else {
        echo "shell_exec is disabled. Cannot run server commands.<br>";
    }

    // Cleanup - Delete the zip file and this script
    unlink($zipFile);
    unlink(__FILE__);

    echo 'Deployment successful! Files unzipped and cleanup complete.';
} else {
    http_response_code(500);
    echo 'Error: Failed to unzip file.';
}
