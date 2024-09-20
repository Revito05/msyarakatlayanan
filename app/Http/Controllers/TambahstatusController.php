<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahstatusController extends Controller
{
    public function index()
    {
        return view(view: 'tambahstatus');
    }
}