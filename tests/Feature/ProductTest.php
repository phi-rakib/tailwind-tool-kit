<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_products(): void
    {
        Product::factory(10)->create();

        $this->get(route('products.index'))
            ->assertOk()
            ->assertViewIs('products.index');
    }

    public function test_user_can_view_product(): void
    {
        $product = Product::factory()->create();

        $this->get(route('products.show', $product->id))
            ->assertOk()
            ->assertViewIs('products.show')
            ->assertViewHas('product', $product);
    }

    public function test_user_can_create_product(): void
    {
        $product = Product::factory()->make();

        $this->post(route('products.store', $product->toArray()))
            ->assertRedirect(route('products.index'));

        $this->assertDatabaseHas('products', $product->toArray());
    }

    public function test_user_can_see_create_product_form(): void
    {
        $this->get(route('products.create'))
            ->assertOk()
            ->assertViewIs('products.create');
    }

    public function test_user_can_see_edit_product_form(): void
    {
        $product = Product::factory()->create();

        $this->get(route('products.edit', $product->id))
            ->assertOk()
            ->assertViewIs('products.edit')
            ->assertViewHas('product', $product);
    }

    public function test_user_can_update_product(): void
    {
        $product = Product::factory()->create();

        $updatedData = [
            'name' => 'Updated Name',
            'price' => 1500,
        ];
        $this->put(route('products.update', $product->id), $updatedData)
            ->assertRedirect(route('products.index'));

        $this->assertDatabaseHas('products', [...$updatedData, 'id' => $product->id]);
    }

    public function test_user_can_delete_product(): void
    {
        $product = Product::factory()->create();

        $this->delete(route('products.destroy', $product->id))
            ->assertRedirect(route('products.index'));

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
