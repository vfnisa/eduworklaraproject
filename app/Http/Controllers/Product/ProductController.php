<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showProduct()
    {
        
        $name = 'Viona';
        $age = 20;
        
        $products = [
            [
                'id' => 1,
                'name' => 'Product 1',
                'price' => 100,
                'category' => 'Category 1',
            ],
            [
                'id' => 2,
                'name' => 'Product 2',
                'price' => 200,
                'category'=> 'Category 2',
            ],
            [
                'id'=> 3,
                'name' => 'Product 3',
                'price' => 300,
                'category'=> 'Category 3',
            ],
        ];
   
        return view('product.index', ["products" => $products]);
    }
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    }

