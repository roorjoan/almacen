<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $msg = 'All products';

        $products = Product::all();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function allActives()
    {
        $msg = 'All products actives';

        $products = Product::where('active', '=', 1)->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function upTo20()
    {
        $msg = 'Price up to $20';

        $products = Product::where('price', '>=', 20)->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function likeAceite()
    {
        $msg = 'Like "Aceite"';

        $products = Product::where('description', 'LIKE', '%aceite%')->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function CheepAndActive()
    {
        $msg = 'Price < 20 AND active';

        $products = Product::where([
            ['price', '<=', 20],
            ['active', '=', 1]
        ])->get(); //AND

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function voidProducts()
    {
        $msg = 'Products none';

        $products = Product::where('existence', '=', 0)
            ->orWhere('active', '=', 0)->get(); //OR

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function between10And20()
    {
        $msg = 'Price BETWEEN 10 and 20';

        //we can also use 'whereNotBetween'
        //'whereIn' it can search a list of values(array)
        //'whereNotIn'
        $products = Product::whereBetween('price', [10, 20])->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function olderThan()
    {
        $msg = 'Older than 2022-08-02';

        //whereDay('created_at', '>=', '1') day 1
        //whereMonth('created_at', '>=', '01') January
        $products = Product::whereDate('created_at', '>=', '2022-08-02')->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    public function updatedProducts()
    {
        $msg = 'Updated products';

        $products = Product::whereColumn('updated_at', '>', 'created_at')->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }

    /*public function cheeperFirst()
    {
        $msg = 'Cheeper first';

        $products = Product::where('active', '=', 1)
            ->orderByDesc('price')
            ->get();

        $total = $products->count();
        return view('products', compact('msg', 'products', 'total'));
    }*/
}
