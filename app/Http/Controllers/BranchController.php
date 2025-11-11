<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();
        return view ('admin.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max: 255',
            'address' => 'required',
            'phonenumber' => 'required',
            'active' => 'required|boolean',
        ]);

        $branch = new Branch();
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phonenumber = $request->phonenumber;
        $branch->active = $request->active;
        $branch->save();

        return redirect()->route ('branches.index')
        ->with('message', 'Branch created successfully')
        ->with('icon','success');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $branch = Branch:: findOrFail($id);
        return view('admin.branches.show', compact('branch'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $branch = Branch:: findOrFail($id);
        return view('admin.branches.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max: 255',
            'address' => 'required',
            'phonenumber' => 'required',
            'active' => 'required|boolean',
        ]);

        $branch = Branch:: findOrFail($id);
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->phonenumber = $request->phonenumber;
        $branch->active = $request->active;
        $branch->save();

        return redirect()->route ('branches.index')
        ->with('message', 'Branch updated successfully')
        ->with('icon','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $branch = Branch:: findOrFail($id);
        $branch->delete();

        return redirect()->route ('branches.index')
        ->with('message', 'Branch was deleted successfully')
        ->with('icon','success');
    }
}
