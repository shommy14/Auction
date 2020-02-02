<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Category;
use App\Product;
use App\User;
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
        $users = User::all();
        $products = Product::with('category','user')->get();

        return view('home')->with([
            'users' => $users,
            'products' => $products,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllProducts()
    {
        $users = User::all();
        $categories = Category::all();
        $products = Product::with('category','user')->get();

        return view('products.all_products')->with([
            'products' => $products,
            'categories' => $categories,
            'users' => $users
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
