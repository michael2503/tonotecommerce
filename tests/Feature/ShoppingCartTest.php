<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use App\Traits\ShoppingCartTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShoppingCartTest extends TestCase
{
    use ShoppingCartTrait;
    /**
     * A basic feature test example.
     */
    public function test_to_add_cart(): void
    {
        $response = $this->get('/addToCart', [
            'user_id'       => 1,
            'product_id'    => 2,
            'qty'           => 1
        ]);

        $this->createCart();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
