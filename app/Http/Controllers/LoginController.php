<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller {

    public function validateLogin(Request $request) {

        $data = $request->all('mobileNumber', 'password', 'rememberMe');

        if (Input::has('rememberMe')) {
            $remember = true;
        } else {
            $remember = false;
        }

//        print_r($data);
//        die();

        if (Auth::attempt(array('mobile_number' => $request->mobileNumber, 'password' => $request->password), $remember)) {
            return redirect('/dashboard');
            ;
        } else {
            return back()->withInput();
        }
    }

    public function logout(Request $request) {
//        print_r($request->session()->all());

        Auth::logout();
        echo "****************************";
//        print_r($request->session()->all());
//        die();
        return redirect('/');
    }
    
    public function test(Request $request) {

        return view("test");
    }

}
