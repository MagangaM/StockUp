<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Branch;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::all();
        return view ('admin.purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        $branches = Branch::all();
        return view ('admin.purchases.create', compact('suppliers', 'products', 'branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_id'   => 'required|exists:suppliers,id',
            'date'          => 'required|date',
            'observations'  => 'nullable|string|max:255',
        ]);

        $purchase = new Purchase();
        $purchase->supplier_id   = $request->supplier_id;
        $purchase->date          = $request->date;
        $purchase->observations  = $request->observations;
        $purchase->total         = 0;       // Initialize total to 0
        $purchase->status        = 'pending'; // Initial status of the purchase
        $purchase->save();

        return redirect()
            ->route('purchases.edit', $purchase->id)
            ->with('message', 'Purchase created successfully. Now you can add products! ')
            ->with('icon', 'success');
    }

    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $purchase = Purchase:: findOrFail($id);
        return view('admin.purchases.show', compact('purchase'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $purchases = Purchase:: findOrFail($id);
        $suppliers = Supplier::all();
        $products = Product::all();
        $branches = Branch::all();
        return view ('admin.purchases.edit', compact('purchases','suppliers', 'products', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        return redirect()->route ('purchases.index')
        ->with('message', 'Purchase updated successfully')
        ->with('icon','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $purchase = Purchase:: findOrFail($id);
        $purchase->delete();

        return redirect()->route ('purchases.index')
        ->with('message', 'Purchase was deleted successfully')
        ->with('icon','success');
    }
}


