<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class MinioImageTest extends TestCase
{
    use RefreshDatabase;

    public function test_image_is_stored_in_minio_and_url_is_signed()
    {
        // Create a fake image
        Storage::fake('minio');
        $file = UploadedFile::fake()->image('test-image.jpg');

        // Create a user
        $user = User::factory()->create();

        // Create a category
        $category = Category::factory()->create();

        // Create a post with the image
        $post = Post::create([
            'title' => 'Test Post',
            'content' => 'This is a test post',
            'user_id' => $user->id,
            'category_id' => $category->id,
            'published_at' => now(),
        ]);

        // Add the image to the post
        $post->addMedia($file)->toMediaCollection();

        // Get the image URL
        $imageUrl = $post->imageUrl();

        // Assert that the URL is a signed URL (contains a signature parameter)
        $this->assertStringContainsString('X-Amz-Signature', $imageUrl);

        // Assert that the URL is from MinIO
        $this->assertStringContainsString(config('filesystems.disks.minio.url'), $imageUrl);
    }
}
