<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
        public function test_usuarios()
    {
        $users = User::all();

        $view = $this->view('usuarios.index', ['users' =>  $users]);

        $view->assertSee('Geronimo');
    }
}
