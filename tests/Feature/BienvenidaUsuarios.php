<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BienvenidaUsuarios extends TestCase
{
    /**
     * @test 
     */
    function bienvenido_usuarios()
    {
        $this->get('/saludo/uan/juan25');
            ->assertStatus(200)
            ->assertSee('Bienvenido Juan, tu apodo es juan25');
    }


    /**
     * @test 
     */
    function bienvenido_usuarios()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }



}
