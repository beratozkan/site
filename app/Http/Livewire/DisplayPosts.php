<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DisplayPosts extends Component
{
    public $post;
    public $category_name;
    public function render()
    {
        return view('livewire.display-posts');
    }
}
