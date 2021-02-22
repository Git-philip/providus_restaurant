<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginrController extends Controller
{
    function index()
    {
        return view('admin/login');
    }
}
