<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{

    public function index()
    {
        $brand = Brand::orderBy('id', 'desc')->get();
        return view('brand.index', compact('brand'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_brand' => 'required',
        ]);

        $brand = new brand();
        $brand->name_brand = $request->name_brand;
        $brand->save();

        return redirect()->route('brand.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.show', compact('brand'));

    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_brand' => 'required|max:255',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->name_brand = $request->name_brand;
        $brand->save();

        return redirect()->route('brand.index')->with('success', 'data berhasil ditambahkan');

    }

    public function destroy($id)
    {
        $brand = Brand::findOrfail($id);
        $brand->delete();

        return redirect()->route('brand.index')->with('success', 'Data Berhasil Dihapus');

    }
}
