<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index(): string
    {
        // creando un objeto de tipo RegionesModel
        $region = new RegionesModel();

        $datos['datos']=$region->findAll();
        /* FindAll = select * from regiones;*/
        return view('regiones', $datos);
    }
}