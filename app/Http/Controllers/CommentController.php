<?php

namespace App\Http\Controllers;

use App\comment;
use App\dwork;
use App\payment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function comment(Request $request)
    {
        session_start();

        $value = dwork::find($_SESSION['new']);
        $date = $value->date;
        $dsrid = $value->dsrid;
        $route = $value->route;

        $pay = new comment();
        $pay->dsrid=$dsrid;
        $pay->route=$route;
        $pay->date=$date;
        $pay->comment=$request->input('comment');
        $pay->save();
        return redirect('/returnlist/' . $_SESSION['new']);


    }
}
