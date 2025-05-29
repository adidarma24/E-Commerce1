<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products - ADISHOP')]
class ProductsPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url]
    public $featured;

    #[Url]
    public $on_sale;

    #[Url]
    public $price_range = 100;

    #[Url]
    public $sort = 'latest';

    //add product to cart method
   public function addToCart($product_id){
    $total_count = CartManagement::addItemToCart($product_id);
    $this->dispatch('Update-cart-count', total_count: $total_count)->to(Navbar::class);
    LivewireAlert::title('Product added to the cart successfully!')
        // ->text('This is a demo of Livewire Alert.')
        ->success()
        ->toast()
        ->position('bottom-end')
        ->timer(3000)
        ->show();
}

    public function render()
    {
        $productsQuery = Product::query()->where('is_active', 1);

        if (!empty($this->selected_categories)) {
            $productsQuery->whereIn('category_id', $this->selected_categories);
        }
        if (!empty($this->selected_brands)) {
            $productsQuery->whereIn('brand_id', $this->selected_brands);
        }

        if ($this->featured) {
            $productsQuery->where('is_featured', 1);
        }

        if ($this->on_sale) {
            $productsQuery->where('on_sale', 1);
        }

        if ($this->price_range) {
            $productsQuery->where('price', '<=', $this->price_range);
        }

        if ($this->sort == 'latest') {
            $productsQuery->latest();
        }

        if ($this->sort == 'price') {
            $productsQuery->orderBy('price');
        }

        return view('livewire.products-page', [
            'products' => $productsQuery->paginate(9),
            'brands' => Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories' => Categories::where('is_active', 1)->get(['id', 'name', 'slug']),
        ]);
    }
}
