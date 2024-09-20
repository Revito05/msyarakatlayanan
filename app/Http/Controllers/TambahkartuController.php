<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahkartuController extends Controller
{
    public function index()
    {
        return view(view: 'tambahkartu');
    }
}