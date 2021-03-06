<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PruebaModuloUser extends TestCase
{
    /** @return void */
    function test_it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
        	->assertStatus(200)
        	->assertSee('usuarios');
    }

    /** @return void */
    function test_it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
        	->assertStatus(200)
        	->assertSee('Mostrando detalle del usuario: 5');
    }
}
