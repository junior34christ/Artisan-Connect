<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    /** Index page category list */
    public function index()
    {
        $user = Auth::user();
        $categories = Category::where('user_id', $user->id)->get(); // Récupère uniquement les catégories de l'utilisateur connecté
        return view('backend.category.indexcategory', compact('categories'));
    }

    // public function gridcategory()
    // {
    //     $categories = Category::all();
    //     return view('backend.category.gridcategory', compact('categories'));
    // }

    /** Category add page */
    public function create()
    {
        return view('backend.category.createcategory');
    }

    /** Category save record */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string',
            'category_code' => 'required|string|unique:categories,code',
            'category_description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('photo') ? $request->file('photo')->store('images', 'public') : null;

        DB::beginTransaction();
        try {
            $category = Category::create([
                'name' => $request->category_name,
                'code' => $request->category_code,
                'description' => $request->category_description,
                'image' => $imagePath,
                'user_id' => Auth::id(), // Associer la catégorie à l'utilisateur connecté
            ]);

            Toastr::success('Category created successfully :)', 'Success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Failed to create category :(', 'Error');
        }

        return redirect()->route('category.indexcategory');
    }

    /** Category profile page */
    public function show(Category $category)
    {
        return view('backend.category.showcategory', compact('category'));
    }

    /** View for edit category */
    public function edit(Category $category)
    {
        return view('backend.category.editcategory', compact('category'));
    }

    /** Update record */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string',
            'code' => 'required|string|unique:categories,code,' . $category->id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                if ($category->image && Storage::disk('public')->exists($category->image)) {
                    Storage::disk('public')->delete($category->image);
                }
                $imagePath = $request->file('image')->store('images', 'public');
                $category->image = $imagePath;
            }

            $category->update([
                'name' => $request->name,
                'code' => $request->code,
                'description' => $request->description,
                'image' => $category->image,
            ]);

            Toastr::success('Category updated successfully :)', 'Success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Failed to update category :(', 'Error');
        }

        return redirect()->route('category.indexcategory');
    }

    /** Category delete */
    public function destroy(Category $category)
    {
        DB::beginTransaction();
        try {
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            $category->delete();

            Toastr::success('Category deleted successfully :)', 'Success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Failed to delete category :(', 'Error');
        }

        return redirect()->route('category.indexcategory');
    }
}