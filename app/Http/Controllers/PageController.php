<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('about', ['title' => 'About Us']);
    }

    public function products()
    {
        $products = [
            ['name' => 'Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 200],
        ];
        return view('products', ['title' => 'Products', 'products' => $products]);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contact Us']);
    }
}
