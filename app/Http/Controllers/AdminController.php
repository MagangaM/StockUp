<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $total_branches = Branch::count();
        $total_categories = Category::count();
        $total_products = Product::count();
        $total_suppliers = Supplier::count();
        return view ('admin.index',compact('total_branches','total_categories','total_products','total_suppliers'));
    }
}
