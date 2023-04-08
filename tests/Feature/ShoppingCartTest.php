<?php

namespace Tests\Feature;

use App\Models\ShoppingCart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShoppingCartTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_to_add_cart(): void
    {
        // $cart = ShoppingCart::factory()->create();

        // $response = $this->get('/cart/add/1', [
        //     'user_id'       => 1,
        //     'product_id'    => 2,
        //     'qty'           => 2
        // ]);

        // $cart->assertOk();
    }
}
