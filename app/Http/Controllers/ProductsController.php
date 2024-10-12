<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['products'] = Product::all();
        return view('products.products',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['categories']=Category::arrayForSelect();
        $this->data['mode'] ='create';
        $this->data['headline']='Add New Product';

        return view('products.createproduct',$this->data) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $this->data['products'] = Product::find($id);
        return view('products.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
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
