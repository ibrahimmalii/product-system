<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function test_can_create_product(): void
    {
        $product = [
            'name' => 'Test Product',
            'description' => 'Test Product Description',
            'price' => 9.99,
        ];

        $this->post(route('products.store'), $product)
            ->assertStatus(201)
            ->assertJson($product);
    }

    public function test_car_remove_product(): void
    {
        $product = Product::factory()->create();

        $this->delete(route('products.destroy', $product))
            ->assertStatus(200)
            ->assertJson(['message' => 'Product deleted successfully']);
    }
}
