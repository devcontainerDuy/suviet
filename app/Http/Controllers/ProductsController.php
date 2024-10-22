<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $model;
    protected $instance;
    public function __construct()
    {
        $this->model = Products::class;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->instance = $this->model::with('category', 'images')->get();
        return view('product.index', ['products' => $this->instance]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->instance = Categories::all();
        return view('product.create', ['categories' => $this->instance]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'sale' => 'required',
            'description' => 'required',
        ]);

        $this->instance = $this->model::create($request->all());
        return redirect('/admin/san-pham')->with('success', 'Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
