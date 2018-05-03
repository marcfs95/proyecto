<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    //no importa ja que esta dins rutes protegides per middleware a wep.php
    public function __construct()
    {
        //se agrega el middleware para solo poder acceder a los metodos si estamos autenticados
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //si se esta logeado devuelve la vista
        return view('admin.project');
        // return "hola";
    }
}
