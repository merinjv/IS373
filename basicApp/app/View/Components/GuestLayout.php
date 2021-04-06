<?php

namespace App\View\Components;

use App\Models\Page;
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
        return view('layouts.guest');
    }
}
