<?php

namespace Tests\Browser;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index(): void
    {
        $products = Product::factory(10)->create();

        $this->browse(function (Browser $browser) use ($products) {
            $browser->visitRoute('products.index')
                ->assertSee('Product List')
                ->assertSee($products->first()->name);
        });
    }

    public function test_show(): void
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visitRoute('products.index')
                ->clickLink('View')
                ->assertRouteIs('products.show', $product->id)
                ->assertSee($product->name);
        });
    }

    public function test_create(): void
    {
        $product = Product::factory()->make();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visitRoute('products.create')
                ->assertSee('Add New Product')
                ->type('name', $product->name)
                ->type('price', $product->price)
                ->press('Add Product')
                ->assertRouteIs('products.index')
                ->assertSee($product->name);
        });
    }

    public function test_update(): void
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->visitRoute('products.index')
                ->clickLink('Edit')
                ->assertSee('Edit Product')
                ->type('name', 'updated name')
                ->type('price', 100)
                ->press('Update Product')
                ->assertRouteIs('products.index')
                ->assertSee('updated name');
        });
    }

    public function test_destroy(): void
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visitRoute('products.index')
                ->press('Delete')
                ->assertRouteIs('products.index')
                ->assertDontSee($product->name);
        });
    }
}
