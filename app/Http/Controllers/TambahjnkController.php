<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahjnkController extends Controller
{
    public function index()
    {
        return view(view: 'tambahjnk');
    }
}