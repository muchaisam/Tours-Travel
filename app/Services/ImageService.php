<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Upload an image to storage.
     *
     * @param UploadedFile $file
     * @param string $directory
     * @return string The stored path
     */
    public function upload(UploadedFile $file, string $directory): string
    {
        return $file->store($directory);
    }

    /**
     * Delete an image from storage.
     *
     * @param string|null $path
     * @return bool
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
     * @param UploadedFile $file
     * @param string $directory
     * @param string|null $oldPath
     * @return string The new stored path
     */
    public function replace(UploadedFile $file, string $directory, ?string $oldPath): string
    {
        $this->delete($oldPath);
        return $this->upload($file, $directory);
    }

    /**
     * Get the public URL for an image.
     *
     * @param string|null $path
     * @return string|null
     */
    public function getUrl(?string $path): ?string
    {
        if ($path && Storage::exists($path)) {
            return Storage::url($path);
        }

        return null;
    }
}
