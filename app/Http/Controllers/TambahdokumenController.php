<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahdokumenController extends Controller
{
    public function index()
    {
        return view(view: 'tambahdokumen');
    }
}