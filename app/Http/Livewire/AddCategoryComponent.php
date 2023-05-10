<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class AddCategoryComponent extends Component
{


    public $categoryName;
    public $categoryCode;
    public $description;
    public $image;

    public function createCategory()
    {
        // Validation code
        // ...

        // Create the category
        Category::create([
            'CategoryName' => $this->categoryName,
            'CategoryCode' => $this->categoryCode,
            'description' => $this->description,
            // 'image' => $this->image, // Handle image upload and storage
        ]);

         return redirect()->back()->with('message', 'category added successfully');
    }


    public function render()
    {
        return view('livewire.add-category-component');
    }
}
