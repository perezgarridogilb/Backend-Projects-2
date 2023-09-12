<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     use RefreshDatabase;

    public function testEmpty()
    {
        $response = $this
        ->get('/')
        ->assertStatus(200)
        ->assertSee('No hay etiquetas');
    }
}
