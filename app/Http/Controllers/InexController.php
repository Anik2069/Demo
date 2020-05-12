<?php

namespace App\Http\Controllers;

use App\buyingproduct;
use App\comment;
use App\dwork;
use App\inex;
use App\payment;
use App\product;
use App\seeling;
use App\stock;
use App\workdetails;
use Illuminate\Http\Request;

class InexController extends Controller
{
    //
    public function show($id)
    {


        $name = product::find($id);
        $name1 = buyingproduct::where([
            ['group', '=', $name['groupName']],
            ['product_name', '=', $name['productName']],
        ])->orderBy('id', 'DESC')->get();
        $name2 = seeling::where([
            ['group', '=', $name['groupName']],
            ['product_name', '=', $name['productName']],
        ])->orderBy('id', 'DESC')->get();
        $c = 0;

        return view('sheet', compact('name1', 'c','name2','name'));

    }


    public function returnlist()
    {
        //  $value = dwork::orderBy('id', 'DESC')->get();
        $value = product::all();
        $value1 = stock::all();
        $c = 0;
        return view("return_list1", compact('value', 'value1', 'c'));
    }
public function update1(Request $request){
        $id= $request->input('t3');
       $p= $request->input('t2');
        $value= product::find($id);
        $value->buying =  $p;
        $value->save();
        return redirect('sheet/'.$id);
}
    public function update2(Request $request){
        $id= $request->input('t3');
        $p= $request->input('t2');
        $value= product::find($id);
        $value->selling =  $p;
        $value->save();
        return redirect('sheet/'.$id);
    }
    public function update3(Request $request){
        $id= $request->input('t3');
        $p= $request->input('t2');
        $value= product::find($id);
        $value->buying =  $p;
        $value->save();
        return redirect('sheet/'.$id);
    }

}
