<?php

namespace App\Http\Controllers;

use App\buyingproduct;
use App\dsr;
use App\dwork;
use App\group;
use App\product;
use App\seeling;
use App\stock;
use App\workdetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DworkController extends Controller
{
    //
    public function getdata(){
        $name=dsr::all();
        return view('work',compact('name'));
    }

    public function submitdata(Request $request){
        session_start();

        $date= $request->input('date');
        $name = $request ->input('selectdsr');



        $_SESSION['date']=$request->input("date");
        $_SESSION['name']=$request->input("selectdsr");
        $_SESSION['rute']=$request->input("rute");
        $value= dwork::where([
            ['date','=',$date],
            ['name','=',$name],
            ['route','=',$_SESSION['rute']]
        ])->get();
        $count= count($value);
        if($count==0){
            $name= new dwork();
            $name->date=$request->input("date");
            $name->name=$request->input("selectdsr");
            $name->route=$request->input("rute");

            $name1= dsr::where('name','=', $_SESSION['name'])->get();
            foreach ($name1 as $item) {
                $_SESSION['id']=$item['id'];
                $_SESSION['phone']=$item['phone'];
            }
            $name->phone= $_SESSION['phone'];
            $name->dsrid= $_SESSION['id'];

            $name->save();


        }





        $name= dsr::where('name','=', $_SESSION['name'])->get();
        foreach ($name as $item) {
            $_SESSION['id']=$item['id'];
            $_SESSION['phone']=$item['phone'];
        }






        return redirect("/workhistory");
    }

    public function workhistory(Request $request){
        session_start();

        $name=group::all();
        $name1 = product::all();
        date_default_timezone_set("Asia/Dhaka");
        $date=date("Y-m-d");
        $id=   $request->session()->get('user');
       // $route =$_SESSION['rute'];
        $value= workdetails::where([
            ['date','=',$date],

        ])->get();
        $c=0;

        return view('q_sell1',compact('name','value','c','id','date','name1'));

    }
    public function workhistory1(Request $request)
    {
        session_start();

        $name = group::all();
        date_default_timezone_set("Asia/Dhaka");
        $date = date("Y-m-d");
        $id = $request->session()->get('user');
        // $route =$_SESSION['rute'];
        $value = buyingproduct::where([
            ['date', '=', $date],

        ])->get();
        $c = 0;

        return view('d_work2', compact('name', 'value', 'c', 'id', 'date'));
    }


        public function get(){
            $group = $_GET['group'];
            $data=" <option selected >Choose...</option>";

            $wordlist = product::where('groupName', '=', $group)->get();
            foreach ($wordlist as $word){
                $data.="<option value=".$word['id']." >".$word['productName']."</option>";

            }
            echo $data;

        }






public function deleterecord($id){
        $value= product::find($id);
        $n=$value['productName'];
        $d= $value['groupName'];


         $value->delete();

         $vv= buyingproduct::where(
             [
                 ['product_name','=',$n],
                 ['group','=',$d],

             ]
         )->get();
        foreach ($vv as $v){
            $v2= buyingproduct::find($v['id']);
            $v2->delete();
        }
    $vv= seeling::where(
        [
            ['product_name','=',$n],
            ['group','=',$d],

        ]
    )->get();
    foreach ($vv as $v){
        $v2= seeling::find($v['id']);
        $v2->delete();
    }
    $val = stock::where([
        ['productName', "=", $n],
        ['groupName', "=", $d]
    ])->get();
    $ss = 0;
    foreach ($val as $v) {
        $ss = $v['id'];
    }


    //$value->save();
    $nn = stock::find($ss);
    $nn->delete();
         return redirect('/all')->with('success',"Record is Deleted");

}

}
