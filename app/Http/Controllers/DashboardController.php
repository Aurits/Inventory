<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sales;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\State;
use App\Models\Country;
use App\Models\Store;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all data from the table
        $products = Product::all();
        $users = User::all();
        $suppliers = Supplier::all();
        $customers = Customer::all();
        $sales = Sales::all();
        $countries = Country::all();
        $stores = Store::all();
        $purchases = Purchase::all();



        // Get the count of items
        $cproducts = $products->count();
        $cusers = $users->count();
        $csuppliers = $suppliers->count();
        $csales = $sales->count();
        $ccountries = $countries->count();
        $cstores = $stores->count();
        $cpurchases = $purchases->count();
        $ccustomers = $customers->count();

        $latestProducts = Product::latest()->take(5)->get();
        $latestUsers = User::latest()->take(5)->get();

        return view('dashboard', compact('cproducts', 'cusers','latestProducts','latestUsers','csuppliers','csales','ccountries','cstores','cpurchases','ccustomers'));
    }
}
