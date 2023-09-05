<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;



class ProfileTest extends TestCase 
{
    public function testUpload() 
    {
        Storage::fake('local');

        $response = $this->post('profile', [
            /** Trabajando con información ficticia (ubicada en "framework/testing") */
            'photo' => $photo = UploadedFile::fake()->image('photo.png')
        ]);

        Storage::disk('local')->assertExists("profiles/{$photo->hashName()}");

        $response->assertRedirect('profile');
    }

    /**
     * Se está comprobando un error respecto a la foto. Para esto
     * se configuró el mensaje de error
     *
     * @return void
     */
    public function test_photo_required() {
        $response = $this->post('profile', ['photo' => '']);

        $response->assertSessionHasErrors('photo');
    }
}
