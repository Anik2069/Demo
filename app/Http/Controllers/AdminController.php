<?php

namespace App\Http\Controllers;

use App\admin;
use App\buyingproduct;
use App\product;
use App\seeling;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getdata()
    {
        session_start();

        if ($_SESSION['ee'] == null) {
            return redirect('/login');
        } else {
            return view('c_p');
        }

    }

    public function login()
    {
        return view('auth');
    }

    public function login1(Request $request)
    {
        session_start();
        $email1 = $request->get('email');
        $pass = $request->get('password');
        $c = 0;
        $details = admin::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                /*$request->session()->put('rule', $value['userroles']);*/
                $_SESSION['ee'] = $email1;
                $_SESSION['id'] = $value['id'];

                return redirect("/");
                $c = 1;
            }
        }
        if ($c == 0) {
            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/login");


        }

    }
    public function login2(Request $request)
    {
        session_start();
        $email1 = "admin@gmail.com";
        $pass ="1234";
        $c = 0;
        $details = admin::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                /*$request->session()->put('rule', $value['userroles']);*/
                $_SESSION['ee'] = $email1;
                $_SESSION['id'] = $value['id'];

                return redirect("/");
                $c = 1;
            }
        }
        if ($c == 0) {
            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/login");


        }

    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        session_start();
        $_SESSION['ee'] = 0;
        $_SESSION['id'] = 0;
        session_destroy();

        return redirect("/login");
    }

    public function submitdata(Request $request)
    {
        session_start();
        $value = admin::find($_SESSION['id']);
        $pass = $request->input('password');
        $pass1 = $request->input('password1');

        $pass2 = $request->input('password2');

        if ($pass == $value['password']) {
            if ($pass1 == $pass2) {
                $value->password = $request->input('password1');
                $value->save();
                return redirect('cp')->with('success', 'Password is changed successfully!');
            } else {
                return redirect('cp')->with('error', 'Password are not matched!');

            }
        } else {
            return redirect('cp')->with('error', 'Password are not matched!');

        }
    }

    public function account()
    {
        $total = 0;
       // $total = 2;
        $total1 = 0;
        $total2 = 0;
        $value1=0;   $value2=0;   $value=0;
        return view('hisab', compact('value1', 'value2', 'total', 'value', 'total1', 'total2'));
    }

    public function showreport(Request $request)
    {
        try{
            $d1 = $request->input('d1');
            $d2 = $request->input('d2');
            $value = product::all();
            $value1 = buyingproduct::where([
                ['date', '>=', $d1],
                ['date', '<=', $d2]
            ])->get();
            $value2 = seeling::where([
                ['date', '>=', $d1],
                ['date', '<=', $d2]
            ])->get();
            // dd($value1,$value2);
            $total = 2;
            $total1 = 0;
            $total2 = 0;
            return view('hisab', compact('value1', 'value2', 'total', 'value', 'total1', 'total2'));

        }catch (\Exception $e){
            return redirect('/');
    }
            }
}
