<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(session('utype') === 'SELL')
        {
            return view('seller-index');
        }
        return view('index');
    }
}
