<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $categories = Category::all();
        $products = Product::with('category','user')->get();

        return view('welcome')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with('category','user')->get();
        $bids = Bid::where

        return view('home')->with([
            'products' => $products,
            'bids' => $bids
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllProducts()
    {
        $categories = Category::all();
        $products = Product::with('category','user')->get();

        return view('products.all_products')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryProductsReg($id)
    {
        $products = Product::where('catId',$id)->get();
        $category = Category::find($id);
        return view('categories',compact(['products', 'category']));
    }

}
