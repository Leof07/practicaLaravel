<?php

namespace App\Http\Controllers;

use App\Models\Proyecto as ModelsProyecto;
use Illuminate\Http\Request;

class Proyecto extends Controller
{
    public function index ()
    {
        $listaProyectos=ModelsProyecto::all();
        return view('listProyectos', compact('listaProyectos'));
    }
}
