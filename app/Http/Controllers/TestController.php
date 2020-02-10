<?php

namespace App\Http\Controllers;

use stdClass;

class TestController extends Controller
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

    public function leximethod()
    {
        $username = "Lexi";
        $password = "1234";

        $myData = new stdClass();
        $personalData = new stdClass();

        $myData->personalData = $personalData;
        $myData->personalData->username = $username;
        $myData->personalData->password = $password;

        $myData->users =  ["Lexi", "Mitchell", "Abby"];



        return view('test')->with(compact('myData'));
    }

    //
}
