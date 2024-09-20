<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahperkawinanController extends Controller
{
    public function index()
    {
        return view(view: 'tambahperkawinan');
    }
}