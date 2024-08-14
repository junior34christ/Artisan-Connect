<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Product;

class VentesController extends Controller
{
    // Affiche la liste des ventes
    public function index()
    {
        // Logique pour afficher la liste des ventes
        return view('backend.ventes.index');
    }

    // Affiche le point de vente (POS)
    public function pos()
    {
        // Logique pour afficher le POS
    }

    // Affiche le formulaire pour créer une nouvelle vente
    public function create()
    {
        $customers = Customer::all();
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('backend.ventes.addsales', compact('customers', 'suppliers', 'products'));
    }

    // Affiche la liste des retours de ventes
    public function indexReturn()
    {
        return view('backend.ventes.indexreturn');
    }

    // Affiche le formulaire pour créer un nouveau retour de vente
    public function createReturn()
    {
        // Logique pour afficher le formulaire de création de retour de vente
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('code', 'LIKE', "%$query%")
            ->get();

        return response()->json($products);
    }

    // Store a new sale
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'date' => 'required|date',
            'product_name' => 'required',
            'order_tax' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'shipping' => 'nullable|numeric',
            'status' => 'required|in:Completed,Inprogress',
        ]);

        $sale = new Sale();
        $sale->customer_id = $request->customer_id;
        $sale->supplier_id = $request->supplier_id;
        $sale->date = $request->date;
        $sale->product_name = $request->product_name;
        $sale->order_tax = $request->order_tax;
        $sale->discount = $request->discount;
        $sale->shipping = $request->shipping;
        $sale->status = $request->status;
        $sale->save();

        return redirect()->route('ventes.index')->with('success', 'Sale created successfully.');
    }
}