<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_can_open_login()
    {
        $response = $this->get(route('login'));

        $response->assertOk();
    }

    public function test_can_open_register()
    {
        $response = $this->get(route('register'));

        $response->assertOk();
    }

    public function test_can_open_forget_password()
    {
        $response = $this->get(route('password.request'));

        $response->assertOk();
    }

    public function test_can_open_reset_password()
    {
        $response = $this->get(route('password.reset', ['token' => 'token']));

        $response->assertOk();
    }
}
