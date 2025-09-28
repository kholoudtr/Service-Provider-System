<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Servicses\Admin\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * TODO: Display a listing of categories (Web Route)
     */
    public function index()
    {
        // TODO: Implement method to show categories list page
        return view("category.index", ['categories' => collect()]);
    }

    /**
     * TODO: Show the form for creating a new category (Web Route)
     */
    public function create()
    {
        // TODO: Implement method to show create category form
        return view("category.create", ['parentCategories' => collect()]);
    }

    /**
     * TODO: Store a newly created category (Web Route)
     */
    public function store(CategoryStoreRequest $request)
    {
        // TODO: Implement method to store new category
        return redirect()->route('categories.index');
    }

    /**
     * TODO: Display the specified category (Web Route)
     */
    public function show($id)
    {
        // TODO: Implement method to show single category
        return view("category.show", ['category' => null]);
    }

    /**
     * TODO: Show the form for editing the specified category (Web Route)
     */
    public function edit($id)
    {
        // TODO: Implement method to show edit category form
        return view("category.edit", ['category' => null, 'parentCategories' => collect()]);
    }

    /**
     * TODO: Update the specified category (Web Route)
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        // TODO: Implement method to update category
        return redirect()->route('categories.index');
    }

    /**
     * TODO: Remove the specified category (Web Route)
     */
    public function destroy($id)
    {
        // TODO: Implement method to delete category
        return redirect()->route('categories.index');
    }
}
