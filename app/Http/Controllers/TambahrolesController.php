<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahrolesController extends Controller
{
    public function index()
    {
        return view(view: 'tambahroles');
    }
}