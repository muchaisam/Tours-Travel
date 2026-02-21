<?php

namespace Tests\Unit\Services;

use App\Services\ImageService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ImageServiceTest extends TestCase
{
    protected ImageService $imageService;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('local');
        $this->imageService = new ImageService;
    }

    public function test_upload_stores_file_and_returns_path(): void
    {
        $file = UploadedFile::fake()->image('test.jpg');

        $path = $this->imageService->upload($file, 'destinations');

        Storage::disk('local')->assertExists($path);
        $this->assertStringStartsWith('destinations/', $path);
    }

    public function test_delete_removes_existing_file(): void
    {
        $file = UploadedFile::fake()->image('test.jpg');
        $path = $file->store('destinations');

        $result = $this->imageService->delete($path);

        $this->assertTrue($result);
        Storage::disk('local')->assertMissing($path);
    }

    public function test_delete_returns_false_for_non_existing_file(): void
    {
        $result = $this->imageService->delete('non-existing/file.jpg');

        $this->assertFalse($result);
    }

    public function test_delete_returns_false_for_null_path(): void
    {
        $result = $this->imageService->delete(null);

        $this->assertFalse($result);
    }

    public function test_replace_deletes_old_and_uploads_new(): void
    {
        $oldFile = UploadedFile::fake()->image('old.jpg');
        $oldPath = $oldFile->store('destinations');

        $newFile = UploadedFile::fake()->image('new.jpg');
        $newPath = $this->imageService->replace($newFile, 'destinations', $oldPath);

        Storage::disk('local')->assertMissing($oldPath);
        Storage::disk('local')->assertExists($newPath);
    }

    public function test_get_url_returns_url_for_existing_file(): void
    {
        $file = UploadedFile::fake()->image('test.jpg');
        $path = $file->store('destinations');

        $url = $this->imageService->getUrl($path);

        $this->assertNotNull($url);
        $this->assertStringContainsString($path, $url);
    }

    public function test_get_url_returns_null_for_non_existing_file(): void
    {
        $url = $this->imageService->getUrl('non-existing/file.jpg');

        $this->assertNull($url);
    }
}
