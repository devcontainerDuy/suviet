<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    protected $model;
    protected $instance;
    public function __construct()
    {
        $this->model = Categories::class;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->instance = $this->model::all();
        return view('category.index', ['categories' => $this->instance]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $this->instance = $this->model::create($request->all());
        return redirect('/admin/danh-muc')->with('success', 'Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->instance = $this->model::findOrFail($id);
        return view('category.edit', ['categories' => $this->instance]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->instance = $this->model::findOrFail($id);
        $this->instance->update($request->all());
        return back()->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->instance = $this->model::findOrFail($id);
        $this->instance->delete();
        return back()->with('success', 'Xóa thành công!');
    }
}
