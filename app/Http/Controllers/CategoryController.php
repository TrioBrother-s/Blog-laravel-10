<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.posts.create-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:categories,slug',
            'name' => 'required|unique:categories,name',
        ]);

        // Создание новой категории
        $category = new Category();
        $category->slug = $request->input('slug');
        $category->name = $request->input('name');
        $category->save();
        // Редирект на страницу с созданной категорией или другую страницу по вашему выбору
        return redirect()->route('admin.posts.create-category')->with('success', 'Категория успешно создана');
        }
}
