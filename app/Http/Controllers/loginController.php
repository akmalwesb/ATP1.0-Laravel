<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    public function postLogin(Request $request)

    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);



        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')

                ->withSuccess('You have Successfully loggedin');
        }



        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }



    /**

     * Write code on Method

     *

     * @return response()

     */
}
