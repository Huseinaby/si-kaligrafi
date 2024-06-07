<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function noAccess()
    {
        return view('no-access');
    }
}
