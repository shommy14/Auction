<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category','user')->get();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'description'=>'required',
            'starter_price'=>'required|numeric',
            'payment'=>'required|string|max:255',
            'shipment'=>'required|string|max:255',
            'sold'=>'required',
            'catId'=>'required',
            'userId'=>'required',
            /*'image'=>'file|image|max:5000',*/
        ]);
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'starter_price' => $request->starter_price,
            'payment'=> $request->payment,
            'shipment'=> $request->shipment,
            'sold' => $request->sold,
            'due_date' => Carbon::now()->addDays(10),
            'catId'=> $request->catId,
            'userId'=>$request->userId,
            /*'image' => $request->image -> store('uploads','public'),*/
            ]);


        return redirect()->route('home')->with('success','Product created, success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('home')->with('success','Product deleted, success');
    }
}
