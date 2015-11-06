<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class InstallController extends Controller
{

    /**
     * Show the install page to the user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! env('APP_INSTALL')) {
            return redirect('/');
        }

        return view('install');
    }

}
