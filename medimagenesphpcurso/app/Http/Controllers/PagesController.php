<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }

    public function fotos()
    {
        return view('fotos');
    }
}
