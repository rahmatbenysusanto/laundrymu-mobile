<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LainnyaController extends Controller
{
    public function index(): View
    {
        return view('lainnya.index');
    }
}
