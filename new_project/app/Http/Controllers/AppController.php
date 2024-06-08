<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use \Illuminate\View\View;
use \App\Models\Brand;
use \App\Models\Product;
use \App\Models\Category;

class AppController
{
    public function index(): View {
        return view('index');
    }
}
