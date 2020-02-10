<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function signup(Request $request)
    {
        $db = new \Delight\Db\PdoDsn('mysql:dbname=test;host=localhost;charset=utf8mb4', 'root', 'root');

        $auth = new \Delight\Auth\Auth($db);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        echo "".$username." ".$email." ".$password;

//        $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token) {
//            echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
//        });

    }
}

//
