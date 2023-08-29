<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $selectedCategory = request()->input('category');
        $categories = Category::all();
        return view('layouts.app', [
            'selectedCategory' => $selectedCategory,
            'categories' => $categories
        ]);
    }
}
