<?php

namespace App\Controllers;
use App\Models\NivelesAcademicosModel;

/* pagina principal */
class NivelesAcademicos extends BaseController
{
    public function index(): string
    {

        $nivelacad = new NivelesAcademicosModel();

        $datos['datos']=$nivelacad->findAll();

        return view('niveles_academicos', $datos);
    }


}
