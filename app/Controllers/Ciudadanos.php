<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;

/* pagina principal */
class Ciudadanos extends BaseController
{
    public function index(): string
    {
        $ciudadano = new CiudadanosModel();

        $datos['datos']=$ciudadano->findAll();

        return view('ciudadanos' , $datos);
    }
}
