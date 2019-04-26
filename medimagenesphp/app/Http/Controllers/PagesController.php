<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio()
    {
        return view('index');
    }

    public function contactanos()
    {
        return view('contactanos');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function empresa()
    {
        return view('empresa');
    }

    public function fotos()
    {
        return view('fotos');
    }

    public function servicioResonancia()
    {
        return view('servicio_resonancia');
    }

    public function servicioTomografia()
    {
        return view('servicio_tomagrafia');
    }

    public function servicioEcografia()
    {
        return view('servicio_ecografia');
    }

    public function servicioRayosX()
    {
        return view('servicio_rayosx');
    }

    public function servicioMamografia()
    {
        return view('servicio_mamografia');
    }

    public function servicioDensitometria()
    {
        return view('servicio_desintometria');
    }
    
}
