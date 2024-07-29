<?php

namespace App\Controllers;
use App\Models\MunicipiosModel;

/* pagina principal */
class MunicipiosController extends BaseController
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

    public function agregarMunicipio(){
        $municipios = new MunicipiosModel();
        $datos = [
            'cod_muni' => $this->request->getVar('txtId'),
            'nombre_municipio'=>$this->request->getVar('txtNombre'),
            'cod_depto'=>$this->request->getVar('txtDepartamentoId')
        ];
        $municipios->insert($datos);
        return redirect()->route('ver_municipios');
    }

    public function eliminarMunicipio($id=null){

       $municipios = new MunicipiosModel();
       $municipios->delete(['cod_muni'=>$id]);
       return redirect()->to('ver_municipios');

    }
}

