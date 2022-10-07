<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function addCategory() {
        return view('Category.add-category');
    }
    public function createCategory(Request $request) {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return back()->with('category_created', 'Category has been Created Successfully');
    }
    public function getCategories() {
        $category = Category::orderBy('id', 'ASC')->get();
        return view('Category.list-category', compact('category'));
    }
    public function delete($id) {
        Category::where('id', $id)->delete();
        return back()->with('category_deleted', 'Category has been Deleted Successfully');
    }
    public function edit($id) {
        $category = Category::find($id);
        return view('Category.edit-category', compact('category'));
    }
    public function Update(Request $request) {
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect('list-category');
    }
}
