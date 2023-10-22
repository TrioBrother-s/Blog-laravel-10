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
            'name' => 'required|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
        ]);

        Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);
        // Редирект на страницу с созданной категорией или другую страницу по вашему выбору
        return view('admin.posts.create');
    }
}
