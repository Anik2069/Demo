<?php

namespace App\Http\Controllers;

use App\group;
use App\product;
use App\stock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getdata()
    {
        $groupname = group::all();
        $products = product::orderBy('id', 'DESC')->get();
        $c = 0;
        return view("products", compact('groupname', 'products', 'c'));
    }

    public function submitdata(Request $request)
    {
        $product = new product();
        $product->groupName = $request->input('selectgroup');
        $product->productName = $request->input('name');
        $product->buying = $request->input('bprice');
        $product->selling = $request->input('sprice');
        $product->counter = $request->input('pata');
$cal =  (double)$request->input('sprice')/(double)$request->input('pata');
$cal = number_format($cal,2);
        $product->perpata = $cal;
        $product->save();
        $stock = new stock();
        $stock->groupName = $request->input('selectgroup');
        $stock->productName = $request->input('name');
        $stock->stock = "0";
        $stock->save();
        return redirect('/product')->with('success', 'Product is added successfully!');



    }

    public function deleteinfo($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('/product')->with('success', 'Product is deleted successfully!');
    }
}
