<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view ('admin.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'company' => 'required|string|max: 255',
            'address' => 'required|string|max: 255',
            'name' => 'required|string|max: 255',
            'phonenumber' => 'required|string|max: 50',
            'email' => 'required|email|unique:suppliers,email',
            
        ]);

        $supplier = new Supplier();
        $supplier->company = $request->company;
        $supplier->address = $request->address;
        $supplier->name = $request->name;
        $supplier->phonenumber = $request->phonenumber;
        $supplier->email = $request->email;
        $supplier->save();

        return redirect()->route ('suppliers.index')
        ->with('message', 'Supplier has been added successfully!')
        ->with('icon','success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required|string|max: 255',
            'address' => 'required|string|max: 255',
            'name' => 'required|string|max: 255',
            'phonenumber' => 'required|string|max: 50',
            'email' => 'required|unique:suppliers,email'.$id,
            
        ]);

        $supplier = Supplier:: findOrFail($id);

        
        $supplier->company = $request->company;
        $supplier->address = $request->address;
        $supplier->name = $request->name;
        $supplier->phonenumber = $request->phonenumber;
        $supplier->email = $request->email;
        $supplier->save();

        return redirect()->route ('suppliers.index')
        ->with('message', 'Supplier details have been updated successfully!')
        ->with('icon','success');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
