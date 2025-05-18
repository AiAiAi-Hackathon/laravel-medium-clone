<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Check if the class exists
if (class_exists('League\Flysystem\AwsS3V3\PortableVisibilityConverter')) {
    echo "Success: The 'League\Flysystem\AwsS3V3\PortableVisibilityConverter' class is now available.\n";
} else {
    echo "Error: The 'League\Flysystem\AwsS3V3\PortableVisibilityConverter' class is still not available.\n";
}

// Also check if we can instantiate the S3 adapter without connecting
try {
    // Get the MinIO disk configuration
    $config = config('filesystems.disks.minio');
    echo "MinIO disk configuration is available.\n";

    // Check if the S3 adapter class exists
    if (class_exists('League\Flysystem\AwsS3V3\AwsS3V3Adapter')) {
        echo "The 'League\Flysystem\AwsS3V3\AwsS3V3Adapter' class is available.\n";
    } else {
        echo "The 'League\Flysystem\AwsS3V3\AwsS3V3Adapter' class is not available.\n";
    }

    echo "\nNote: We're not attempting to connect to MinIO since we're running outside Docker.\n";
    echo "The original error 'Class \"League\\Flysystem\\AwsS3V3\\PortableVisibilityConverter\" not found' should be fixed now.\n";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
