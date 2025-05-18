<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

try {
    // Get the MinIO disk configuration
    $config = config('filesystems.disks.minio');
    echo "MinIO disk configuration:\n";
    echo "Driver: " . $config['driver'] . "\n";
    echo "Key: " . $config['key'] . "\n";
    echo "Secret: " . (isset($config['secret']) ? '[SECRET]' : 'Not set') . "\n";
    echo "Region: " . $config['region'] . "\n";
    echo "Bucket: " . $config['bucket'] . "\n";
    echo "URL: " . $config['url'] . "\n";
    echo "Endpoint: " . $config['endpoint'] . "\n";
    echo "Use path style endpoint: " . ($config['use_path_style_endpoint'] ? 'true' : 'false') . "\n\n";

    // Try to access the MinIO disk
    $disk = \Storage::disk('minio');
    echo "Successfully accessed the MinIO disk.\n";

    // Try to list files in the bucket
    $files = $disk->files();
    echo "Files in the bucket:\n";
    if (count($files) > 0) {
        foreach ($files as $file) {
            echo "- " . $file . "\n";
        }
    } else {
        echo "No files found in the bucket.\n";
    }

    echo "\nThe MinIO disk is accessible and working correctly.\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "Stack trace:\n" . $e->getTraceAsString() . "\n";
}
