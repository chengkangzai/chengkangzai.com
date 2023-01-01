<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use WithFaker;

    public function test_can_open_login()
    {
        $response = $this->get(route('login'));

        $response->assertOk();
        $response->assertSee('Login');
        $response->assertSee('Email');
        $response->assertSee('Password');
    }

    public function test_can_login_invalid()
    {
        $response = $this->post(route('login'), [
            'email' => '',
            'password' => '',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasErrors('email');
        $response->assertSessionHasErrors('password');

        $this->assertGuest();

        $this->post(route('login'), [
            'email' => User::first()->email,
            'password' => '',
        ])
            ->assertInvalid();
    }

    public function test_can_login()
    {
        $email = $this->faker->email;
        $user = User::create([
            'name' => $this->faker->name,
            'email' => $email,
            'password' => bcrypt('password'),
        ]);

        $this->post(route('login'), [
            'email' => $email,
            'password' => 'password',
        ])
            ->assertValid()
            ->assertRedirect();

        $this->assertAuthenticatedAs($user);
    }

    public function test_can_open_register()
    {
        $response = $this->get(route('register'));

        $response->assertOk();
    }

    public function test_register_invalid()
    {
        $password = $this->faker->password;
        $this->post(route('register'), [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail(),
            'password' => $password,
            'password_confirmation' => $password.'asda',
        ])
            ->assertInvalid('password')
            ->assertSessionHasErrors('password')
            ->assertValid([
                'name',
                'email',
                'password_confirmation',
            ]);

        $this->post(route('register'), [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => '',
        ])
            ->assertSessionHasErrors([
                'name',
                'email',
                'password',
            ]);
    }

    public function test_can_register()
    {
        $password = $this->faker->password(8);
        $response = $this->post(route('register'), [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail(),
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        $response->assertValid();
    }

    public function test_can_open_forget_password()
    {
        $response = $this->get(route('password.request'));

        $response->assertOk();
        $response->assertSee('Reset Password');
        $response->assertSee('Email');
        $response->assertSee('Send Password Reset Link');
    }

    public function test_can_open_reset_password()
    {
        $response = $this->get(route('password.reset', ['token' => 'token']));

        $response->assertOk();
        $response->assertSee('Reset Password');
        $response->assertSee('Confirm Password');
        $response->assertSee('Password');
    }
}
