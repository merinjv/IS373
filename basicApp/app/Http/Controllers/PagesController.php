<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($id)
    {
        return view('page', [
            'page'=>Page::findorFail($id)
        ]);
    }
    public function index()
    {
        return view('pages', [
            'pages'=>Page::all()
        ]);
    }
}
