<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserInfoCrud extends Controller
{
    public function show()
    {
        return view('show');
    }
    public function create()
    {
        return view('add');
    }
}
