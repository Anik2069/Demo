<?php

namespace App\Http\Controllers;

use App\buyingproduct;
use App\product;
use App\seeling;
use App\stock;
use Illuminate\Http\Request;

class SeelingController extends Controller
{
    //
    public function sells(Request $request)
    {
        date_default_timezone_set("Asia/Dhaka");
   $date= date("Y_m_d");
        $name = "";
$navl = seeling::all();
$navl = count($navl);
        $invoice ="";


    $navl=$navl+1;
        $str = "12345678909876543210";
        $rand = substr(str_shuffle($str), 0, 1);
        $invoice ="MAI_".$date.$rand."000".$navl;
//dd($invoice,$date);

//dd($navl);
        $count = $request->input('counter');
        for($i=1;$i<=$count;$i++) {

            $date= date("Y_m_d");
            $b1 = new seeling();
            $date= date("Y-m-d");
            //$b1->group = $request->input('selectgroup');
$b1->seller = $request->session()->get('user');
$b1->invoice=$invoice;
$b1->date=$date;
            //  $price = "0";
            $value = product::where([
                ['productName', '=', $request->input('n'.$i)],


            ])->get();
           // dd($value);

            foreach ($value as $val) {
                $price = $val['buying'];
                $name = $val['groupName'];
                $count1 = $val['counter'];
            }
            $id = 0;
            $st = "0";
            $b1->group = $name;

            $b1->product_name = $request->input('n'.$i);
            $value1 = stock::where([
                ['productName', '=', $request->input('n'.$i)],
                ['groupName', '=', $name],//
            ])->get();
            foreach ($value1 as $val) {
                $id = $val['id'];
                $st = $val['stock'];
            }
            $b1->selling = $request->input('q'.$i);
            $b1->unit = $request->input('dp'.$i);
           // $b1->mfgdate = $request->input('date1');
          //  $b1->expiredate = $request->input('date2');
            $b1->unitprice =  $request->input('v'.$i);
            $b1->total = (double)$request->input('v'.$i)* $request->input('q'.$i);

            $b1->save();
            $st1 = 0;
            //
            /*  DB::table('users')
                  ->where('id', 1)
                  ->update(['votes' => 1]);*/
            if ($request->input('dp'.$i) == 'Pata') {
                $st1 = (double)$st - (double)$request->input('q'.$i) / $count1;
                $smp = stock::find($id);
                $smp->stock = $st1;
                $smp->save();
            } else {
                $st1 = (double)$st - (double)$request->input('q'.$i);
                $smp = stock::find($id);
                $smp->stock = $st1;
                $smp->save();
            }
        }

        return redirect('/workhistory')->with("success","Product Sell Successfully!!");

    }


}
