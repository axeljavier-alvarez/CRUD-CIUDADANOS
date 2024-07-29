<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\RegionesModel;

class RegionesController extends BaseController
{
    public function index(): string
    {
        // creando un objeto de tipo RegionesModel
        $region = new RegionesModel();

        $datos['datos']=$region->findAll();
        /* FindAll = select * from regiones;*/
        return view('regiones', $datos);
    }

    public function nuevaRegion()
    {
        return view('regiones_nuevos');   
    }
   
    public function agregarRegion(){
        $regiones = new RegionesModel();
        $datos=[
            'cod_region' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'descripcion' => $this->request->getVar('txtDescripcion')
        ];

        $regiones->insert($datos);
        return redirect()->route('ver_regiones');
    }

    public function eliminarRegion($id=null){
        echo $id;
        $regiones = new RegionesModel();
        $regiones->delete(['cod_region'=>$id]);
        return redirect()->to('ver_regiones');
        // return redirect()->route('ver_regiones');
    }

    public function buscarRegion($id=null){
        echo $id;
        $regiones = new RegionesModel();
        $datos['datos']=$regiones->where('cod_region', $id)->first();
        return view('form_modificar_regiones', $datos);
    }

    public function modificarRegion (){
        $datos=[
            'cod_region'=>$this->request->getVar('txtId'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'descripcion'=>$this->request->getVar('txtDescripcion')
            
        ];

        $regiones = new RegionesModel();
        $regiones->update($datos['cod_region'], $datos);
        return redirect()->route('ver_regiones');
    }
    
}