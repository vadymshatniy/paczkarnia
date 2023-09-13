<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        return view('main');
    }
    public function admin_login()
    {
        return view('admin_login');
    }
    public function admin_index()
    {
        return view('admin_index');
    }
    public function inplace()
    {
        return view('inplace');
    }
}
