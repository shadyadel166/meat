<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view ('product.index')->with('product', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $input = $request->all();
                product::create($input);
                return redirect('product')->with('flash_message', 'product Addedd!');  }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::find($id);
        return view('product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $product = product::find($id);
                $input = $request->all();
                $product->update($input);
                return redirect('product')->with('flash_message', 'product Updated!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
        return redirect('product')->with('flash_message', 'product deleted!');     }
}
