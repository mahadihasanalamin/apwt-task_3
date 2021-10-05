<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('Pages.Product.create');
    }

    public function createSubmit(Request $request)
    {

        $this->validate(
            $request,
            [
                'p_id'=>'required|min:1|max:5|regex:/^[(0-9)]+$/',
                'name'=>'required|min:5|max:30|regex:/^[A-Za-z)\s\0-9]+$/',
                'price'=>'required|regex:/^[(0-9).]+$/',
                'quantity'=>'required|regex:/^[(0-9)]+$/',
                'description'=>'required|regex:/^[A-Za-z\s\0-9]+$/'
            ]
        );

        $var = new product;
        $var->p_id = $request->p_id;
        $var->name = $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description = $request->description;
        $var->save();

        return redirect()->route('product/list');
    }

    public function list(){
        $products = Product::all();
        return view('Pages.Product.list')->with('products',$products);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $product = Product::where('id',$id)->first();
        return view('Pages.Product.edit')->with('product',$product);

    }

    public function editSubmit(Request $request){
        $this->validate(
            $request,
            [
                'p_id'=>'required|min:1|max:5|regex:/^[(0-9)]+$/',
                'name'=>'required|min:5|max:30|regex:/^[A-Za-z)\s\0-9]+$/',
                'price'=>'required|regex:/^[(0-9).]+$/',
                'quantity'=>'required|regex:/^[(0-9)]+$/',
                'description'=>'required|regex:/^[A-Za-z\s\0-9]+$/'
            ]
        );

        $var = Product::where('id',$request->id)->first();
        $var->p_id= $request->p_id;
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description=$request->description;
        $var->save();
        return redirect()->route('product/list');

    }

    public function delete(Request $request)
    {
        Product::where('id',$request->id)->delete();
        return redirect()->route('product/list');

    }
    
}
