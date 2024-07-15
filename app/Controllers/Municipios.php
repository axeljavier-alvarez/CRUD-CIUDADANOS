<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;

/* pagina principal */
class Municipios extends BaseController
{
    public function index(): string
    {
        // return view('municipios');

        // creando un objeto de tipo RegionesModel
        $municipio = new MunicipiosModel();

        $datos['datos']=$municipio->findAll();
        /* FindAll = select * from regiones;*/
        return view('municipios', $datos);
    }
}

