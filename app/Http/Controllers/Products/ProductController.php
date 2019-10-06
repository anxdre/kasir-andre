<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;

use App\Products;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data["entity"] = Products::paginate(5);
        return view('products.home', $data);
    }

    public function formProduct()
    {
        return view('products.create');
    }

    public function addProduct(Request $request)
    {
        $products = new Products();
        $products->Title = $request->title;
        $products->Price = $request->price;
        $products->Stock = $request->stock;
        $products->save();
        return redirect()->route('products');
    }

    public function formEditProduct($id)
    {
        $products = Products::find($id);
        return view('products.edit', ['products' => $products]);
    }

    public function editProduct(Request $request,$id){
        $products = Products::find($id);
        $products->Title = $request->title;
        $products->Price = $request->price;
        $products->Stock = $request->stock;
        $products->save();

        return redirect()->route('products');
    }

    public function deleteProduct($id){
        $products = Products::find($id);
        $products->delete();

        return redirect()->route('products');
    }


}
