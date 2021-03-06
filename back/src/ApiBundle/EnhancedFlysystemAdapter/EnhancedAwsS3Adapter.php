<?php

namespace ApiBundle\EnhancedFlysystemAdapter;

use League\Flysystem\AwsS3v3\AwsS3Adapter;

class EnhancedAwsS3Adapter extends AwsS3Adapter implements EnhancedFlysystemAdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public function renameDir(string $path, string $newPath): bool
    {
        return $this->rename($path, $newPath);
    }
}
