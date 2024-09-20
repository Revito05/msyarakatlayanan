<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahdesaController extends Controller
{
    public function index()
    {
        return view(view: 'tambahdesa');
    }
}