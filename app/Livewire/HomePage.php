<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Categories;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page - ADISHOP')]
class HomePage extends Component
{
    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Categories::where('is_active', 1)->get();
        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,    
        ]);
    }
}
