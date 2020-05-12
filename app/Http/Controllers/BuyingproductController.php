<?php

namespace App\Http\Controllers;

use App\buyingproduct;
use App\group;
use App\product;
use App\seeling;
use App\stock;
use App\workdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyingproductController extends Controller
{
    //

    public function submitdata(Request $request)
    {
        $name = "";
        $count = "";
        date_default_timezone_set("Asia/Dhaka");
        $date = date("Y-m-d");
        $b1 = new buyingproduct();
        $b1->group = $request->input('selectgroup');
        $b1->date = $date;
        $price = "0";
        $value = product::where([
            ['groupName', '=', $request->input('selectgroup')],
            ['id', '=', $request->input('productname')],

        ])->get();
        foreach ($value as $val) {
            $price = $val['buying'];
            $name = $val['productName'];
            $count = $val['counter'];
        }
        $id = 0;
        $st = "0";
        $b1->product_name = $name;
        $value1 = stock::where([
            ['groupName', '=', $request->input('selectgroup')],
            ['productName', '=', $name],
        ])->get();
        foreach ($value1 as $val) {
            $id = $val['id'];
            $st = $val['stock'];
        }
        $b1->buyingamount = $request->input('quantity');
        $b1->unit = $request->input('unit');
        $b1->mfgdate = $request->input('date1');
        $b1->expiredate = $request->input('date2');
        if ($request->input('unit') == "Pata") {
            $price = $price / $count;
            $price = number_format($price, 1);
        }
        $b1->buying = $price;
        $b1->save();
        $st1 = 0;
        //
        /*  DB::table('users')
              ->where('id', 1)
              ->update(['votes' => 1]);*/
        if ($request->input('unit') == 'Pata') {
            $st1 = (double)$st + (double)$request->input('quantity') / $count;
            $smp = stock::find($id);
            $smp->stock = $st1;
            $smp->save();
        } else {
            $st1 = (double)$st + (double)$request->input('quantity');
            $smp = stock::find($id);
            $smp->stock = $st1;
            $smp->save();
        }


        return redirect('/workhistory_2');

    }

    public function listof()
    {
        $value = buyingproduct::orderBy('id', 'DESC')->get();
        $c = 0;
        return view('buying', compact('value', 'c'));

    }

    public function deleterecord($id)
    {
        $value = buyingproduct::find($id);

        $val = stock::where([
            ['productName', "=", $value['product_name']],
            ['groupName', "=", $value['group']]
        ])->get();
        $ss = 0;
        foreach ($val as $v) {
            $ss = $v['id'];
        }


        $val = product::where([
            ['productName', "=", $value['product_name']],
            ['groupName', "=", $value['group']]
        ])->get();
        $ss1 = 0;
        foreach ($val as $v) {
            $ss1 = $v['counter'];
        }



        //$value->save();
        $nn = stock::find($ss);
        if($value['unit']=="Pata"){
            $nn->stock =abs($nn['stock']) - $value['buyingamount']/$ss1;

        }
        else{
            $nn->stock =abs($nn['stock']) - $value['buyingamount'];
        }
        $nn->save();
        $value->delete();
        //$value->save();
        return redirect('/buyingrecord')->with('success', "Delete Successfully!!!");
    }

    public function listof1()
    {
        $value = seeling::orderBy('id', 'DESC')->get();
        $c = 0;

        return view('selling', compact('value', 'c'));

    }

    public function deleterecord1($id)
    {
        $value = seeling::find($id);
        $val = stock::where([
            ['productName', "=", $value['product_name']],
            ['groupName', "=", $value['group']]
        ])->get();
        $ss = 0;
        foreach ($val as $v) {
            $ss = $v['id'];
        }


        $val = product::where([
            ['productName', "=", $value['product_name']],
            ['groupName', "=", $value['group']]
        ])->get();
        $ss1 = 0;
        foreach ($val as $v) {
            $ss1 = $v['counter'];
        }



        //$value->save();
        $nn = stock::find($ss);
        if($value['unit']=="Pata"){
            $nn->stock = abs($nn['stock']) - $value['selling']/$ss1;

        }
        else{
            $nn->stock = abs($nn['stock']) - $value['selling'];
        }
        $nn->save();

        $value->delete();
        return redirect('/sellingrecord')->with('success', "Delete Successfully!!!");
    }
}
