<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{

    /**
     * Store the guard implementation
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $guard;

    /**
     * Create a new register controller instance.
     *
     * @return void
     */
    public function __construct(Guard $guard)
    {
        $this->middleware('guest');
        $this->auth = $guard;
    }

    /**
     * Show the registration form to the user
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('auth.login');
    }

    /**
     * Process the registration creation
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function post(LoginRequest $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');

        $credentials = ['username' => $username, 'password' => $password];

        if ($this->auth->attempt($credentials)) {

        }

        return back()->withError('Användarnamnet eller lösenordet stämmer inte');
    }

}
