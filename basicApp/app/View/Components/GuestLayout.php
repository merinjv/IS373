<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $posts = Post::all();
        return view('layouts.guest', compact($posts));
    }
}
