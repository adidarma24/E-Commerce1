<?php

namespace App\Livewire;

use App\Models\Categories;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('categories - ADISHOP')]
class CategoriesPage extends Component
{
    public function render()
    {
        $categories = Categories::where('is_active', 1)->get();
        return view('livewire.categories-page', [
            'categories' => $categories,
    ]);
    }
}
