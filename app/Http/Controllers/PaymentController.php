<?php

namespace App\Http\Controllers;

use App\dsr;
use App\dwork;
use App\group;
use App\product;
use App\seeling;
use App\stock;
use App\workdetails;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //\
    public function getdata(){
        $value= product::all();
        $count=count($value);
        $value2= group::all();
        $count1=count($value2);
        $date = date('Y-m-d');
        $value1 = seeling::where([
            ['date', '=', $date]
        ])->get();
$total=0;
        foreach ($value1 as $mal) {
            $t1 = $mal['total'];
            $total = $total + $t1;
        }
        $c=0;
$value1 = stock::all();
        return view('index',compact('count','count1','total','value1','c'));
    }
}
