<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahpekerjaanController extends Controller
{
    public function index()
    {
        return view(view: 'tambahpekerjaan');
    }
}