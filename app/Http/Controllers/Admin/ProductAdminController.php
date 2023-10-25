<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->is_active = $request->has('is_active');
        $product->save();
        return redirect()->route('admin.products.edit', $product)->with('success', 'It\'s OK');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $file = $request->file('image');
        $product->fill($request->all());
        $product->is_active = $request->has('is_active');
        $product->image = Storage::putFile('images', $file);
        $product->save();
        return redirect()->route('admin.products.edit', $product)->with('success', 'It\'s OK');
        // $path = Storage::disk('public')->putFile('images', $file); //сохранить файл
        // $name = $file->getClientOriginalName();
        // $extension = $file->getClientOriginalExtension();
        // $name2 = $file->hashName();
        // $extension2 = $file->extension();
        // $file = Storage::get('images/03BbX9GvXC8RrU9Wf5pwE6S2CMLSPPXjQn8GKjlz.jpg');  // получить код файла
        // $is_file = Storage::exists('images/03BbX9GvXC8RrU9Wf5pwE6S2CMLSPPXjQn8GKjlz.jpg');  // проверяет есть ли файл
        // $is_not_file = Storage::missing('images/03BbX9GvXC8RrU9Wf5pwE6S2CMLSPPXjQn8GKjlz.jpg');  // проверяет отсутствие файла
        // $url = Storage::url('images/03BbX9GvXC8RrU9Wf5pwE6S2CMLSPPXjQn8GKjlz.jpg');   //локальний адрес
        // $path = Storage::path('images/03BbX9GvXC8RrU9Wf5pwE6S2CMLSPPXjQn8GKjlz.jpg');  // действительный файловый адрес в проекте
        // Storage::copy('images/03BbX9GvXC8RrU9Wf5pwE6S2CMLSPPXjQn8GKjlz.jpg', 'images/12345.jpg');  // копирование файла
        // Storage::move('images/12345.jpg', 'images/aaa789.jpg');  // перемещение файла
        // Storage::delete('images/aaa789.jpg'); // удаление файла или массива файлов
        // $files = Storage::files('images');  // показывает файлы в текущей папке
        // $files = Storage::allFiles('images');  // показывает файлы в дереве
        // $directory = Storage::makeDirectory('old_images');   // создание папки
        // $directory = Storage::directories('images'); // показывает список папок
        // $directory = Storage::allDirectories('images'); // показывает дерево папок
        // $directory = Storage::deleteDirectory('images/new_images/old_images/old_old_images'); // удаляет папку со всем содержимым


        dd($directory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
