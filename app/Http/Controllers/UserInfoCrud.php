<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoCrud extends Controller
{
    public function show()
    {
        return view('show');
    }
    public function add()
    {
        return view('add');
    }
}
