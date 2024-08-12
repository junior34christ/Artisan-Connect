<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = Product::with('category')
            ->where('user_id', $user->id)
            ->get(); // Récupère uniquement les produits de l'utilisateur connecté et charge la relation 'category'
        $categories = Category::where('user_id', $user->id)->get();
        $prices = Product::where('user_id', $user->id)->distinct()->pluck('price');
        return view('backend.products.indexproduct', compact('products', 'categories', 'prices'));
    }

    // public function gridProducts()
    // {
    //     $products = Product::with('category')->get();
    //     return view('backend.products.gridProducts', compact('products'));
    // }

    public function create()
    {
        $user = Auth::user();
        $categories = Category::where('user_id', $user->id)->get();
        return view('backend.products.createproduct', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'category_id'   => 'required|exists:categories,id',
            'sku'           => 'nullable|unique:products',
            'quantity'      => 'required|integer',
            'price'         => 'required|numeric',
            'status'        => 'required|in:0,1',
            'description'   => 'nullable|string',
            'image'         => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        DB::beginTransaction();
        try {
            $product = Product::create([
                'name'          => $request->name,
                'category_id'   => $request->category_id,
                'brand'         => $request->brand,
                'sku'           => $request->sku,
                'quantity'      => $request->quantity,
                'description'   => $request->description,
                'price'         => $request->price,
                'status'        => $request->status,
                'image'         => $imagePath,
                'user_id' => Auth::id(), // Associer la catégorie à l'utilisateur connecté
            ]);

            Toastr::success('Product added successfully :)', 'Success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Failed to add product :(', 'Error');
            return back()->withInput();
        }

        return redirect()->route('products.indexproduct');
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('backend.products.showproduct', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $product->load('images'); // Charger les images associées
        return view('backend.products.editproduct', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'sku' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $product->name = $request->input('name');
            $product->category_id = $request->input('category_id');
            $product->sku = $request->input('sku');
            $product->quantity = $request->input('quantity');
            $product->price = $request->input('price');
            $product->status = $request->input('status');
            $product->description = $request->input('description');

            if ($request->hasFile('image')) {
                if ($product->image && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image);
                }
                $path = $request->file('image')->store('products', 'public');
                $product->image = $path;
            }

            $product->save();

            DB::commit();
            Toastr::success('Product updated successfully :)', 'Success');
        } catch (\Exception $e) {
            DB::rollback();
            Toastr::error('Failed to update product :(', 'Error');
            return back()->withInput()->withErrors($e->getMessage());
        }

        return redirect()->route('products.indexproduct')->with('success', 'Product updated successfully :)');
    }

    public function destroy(Product $product)
    {
        DB::beginTransaction();
        try {
            // Vérifier si l'image existe et la supprimer
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Supprimer le produit
            $product->delete();

            // Afficher un message de succès
            Toastr::success('Product deleted successfully :)', 'Success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // Afficher un message d'erreur
            Toastr::error('Failed to delete product :(', 'Error');
            // Redirection en cas d'erreur
            return redirect()->route('products.indexproduct')->with('error', 'Failed to delete product :(');
        }

        // Redirection en cas de succès
        return redirect()->route('products.indexproduct')->with('success', 'Product deleted successfully :)');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('code', 'LIKE', "%$query%")
            ->get();

        return response()->json($products);
    }

    public function showFilterForm()
    {
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->get();
        $categories = Category::where('user_id', $user->id)->get();
        $prices = Product::where('user_id', $user->id)
                ->distinct()
                ->pluck('price');

        return view('your-view-name', compact('products', 'categories', 'prices'));
    }
}