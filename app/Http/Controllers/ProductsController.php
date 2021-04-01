<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }
}
