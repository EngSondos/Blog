<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function create() {
        return view('Category.add-category');
    }
    public function store(StoreCategoryRequest $request) {
        $data = $request->except('_token');
   return $this->redirectTo(Category::create($data));
    }
    public function list() {
        $category = Category::orderBy('id', 'ASC')->get();
        return view('Category.list-category', compact('category'));
    }
    public function delete(Category $category) {
        Category::where('id', $category->id)->delete();
        return back()->with('category_deleted', 'Category has been Deleted Successfully');
    }
    public function edit(Category $category) {
        $category = Category::find($category->id);
        return view('Category.edit-category', compact('category'));
    }
    public function Update(UpdateCategoryRequest $request , Category $category) {
        $data=$request->except('_token');
      return $this->redirectTo(Category::where("id", $category->id)->update($data));
    }
}
