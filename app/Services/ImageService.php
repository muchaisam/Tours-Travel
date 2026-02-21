<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Upload an image to storage.
     *
     * @return string The stored path
     */
    public function upload(UploadedFile $file, string $directory): string
    {
        return $file->store($directory);
    }

    /**
     * Delete an image from storage.
     */
    public function delete(?string $path): bool
    {
        if ($path && Storage::exists($path)) {
            return Storage::delete($path);
        }

        return false;
    }

    /**
     * Replace an existing image with a new one.
     *
     * @return string The new stored path
     */
    public function replace(UploadedFile $file, string $directory, ?string $oldPath): string
    {
        $this->delete($oldPath);

        return $this->upload($file, $directory);
    }

    /**
     * Get the public URL for an image.
     */
    public function getUrl(?string $path): ?string
    {
        if ($path && Storage::exists($path)) {
            return Storage::url($path);
        }

        return null;
    }
}
