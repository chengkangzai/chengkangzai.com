<?php

namespace Tests\Feature;

use Tests\TestCase;

class CachePublicPagesTest extends TestCase
{
    public function test_public_pages_get_public_cache_headers(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $this->assertStringContainsString('public', (string) $response->headers->get('Cache-Control'));
        $this->assertStringContainsString('s-maxage=86400', (string) $response->headers->get('Cache-Control'));
        $this->assertEmpty($response->headers->getCookies());
    }

    public function test_admin_pages_are_not_cached(): void
    {
        $response = $this->get('/admin/login');

        $this->assertStringNotContainsString('s-maxage', (string) $response->headers->get('Cache-Control'));
    }
}
