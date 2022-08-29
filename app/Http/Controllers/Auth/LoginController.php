<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:user1')->except('logout');
        $this->middleware('guest:user2')->except('logout');
        $this->middleware('guest:user3')->except('logout');
        $this->middleware('guest:user4')->except('logout');
        $this->middleware('guest:user5')->except('logout');
        $this->middleware('guest:user6')->except('logout');

    }

}