<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home2');
    }

    public function transformamos()
    {
        return view('transformamos');
    }

    public function arte()
    {
        return view('arte');
    }

    public function profesional()
    {
        return view('profesional');
    }

    public function nosotros()
    {
        return view('nosotros');
    }
    public function servicios()
    {
        return view('servicios');
    }

    public function drywall()
    {
        return view('drywall');
    }

    public function pintura()
    {
        return view('pintura');
    }
    public function lavado()
    {
        return view('lavado');
    }
    public function texturizado()
    {
        return view('texturizado');
    }
    public function duchas()
    {
        return view('duchas');
    }
    public function senalizacion()
    {
        return view('senalizacion');
    }
    public function wsp()
    {
        return view('wsp');
    }
    public function vinculacion()
    {
        return view('vinculacion');
    }
    
    public function email()
    {
        return view('email');
    }

    public function acreditacion()
    {
        return view('acreditacion');
    }
    public function credito()
    {
        return view('credito');
    }
    public function declaracion()
    {
        return view('declaracion');
    }
    public function politicas()
    {
        return view('politicas');
    }
    public function terminos()
    {
        return view('terminos');
    }
    public function contacto()
    {
        return view('contacto');
    }

    public function portafolio()
    {
        return view('portafolio');
    }
   
}
