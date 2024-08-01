<?php

namespace App\Controllers;
use App\Models\CiudadanosModel;

/* pagina principal */
class CiudadanosController extends BaseController
{
    public function index(): string
    {
        $ciudadano = new CiudadanosModel();

        $datos['datos']=$ciudadano->findAll();

        return view('ciudadanos' , $datos);
    }

    public function agregarCiudadano(){
        $ciudadanos = new CiudadanosModel();
        $datos = [
            'dpi' => $this->request->getVar('txtId'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'tel_casa'=>$this->request->getVar('txtTelCasa'),
            'tel_movil'=>$this->request->getVar('txtTelMovil'),
            'email'=>$this->request->getVar('txtEmail'),
            'fechanac'=>$this->request->getVar('txtFecha'),
            'cod_nivel_acad'=>$this->request->getVar('txtCodAcad'),
            'cod_muni'=>$this->request->getVar('txtCodMuni'),
            'contra'=>$this->request->getVar('txtPassword'),
  
        ];
        $ciudadanos->insert($datos);
        return redirect()->route('ver_ciudadanos');
    }

    public function eliminarCiudadano($id=null){

        $ciudadanos = new CiudadanosModel();
        $ciudadanos->delete(['dpi'=>$id]);
        return redirect()->to('ver_ciudadanos');
 
     }

     public function buscarCiudadano($id=null){
        echo $id;
        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->where('dpi', $id)->first();
        return view('form_modificar_ciudadanos', $datos);
    }


    public function modificarCiudadano (){
        $datos=[
            'dpi' => $this->request->getVar('txtId'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nombre'=>$this->request->getVar('txtNombre'),
            'direccion'=>$this->request->getVar('txtDireccion'),
            'tel_casa'=>$this->request->getVar('txtTelCasa'),
            'tel_movil'=>$this->request->getVar('txtTelMovil'),
            'email'=>$this->request->getVar('txtEmail'),
            'fechanac'=>$this->request->getVar('txtFecha'),
            'cod_nivel_acad'=>$this->request->getVar('txtCodAcad'),
            'cod_muni'=>$this->request->getVar('txtCodMuni'),
            'contra'=>$this->request->getVar('txtPassword')
            
        ];

        $ciudadanos = new CiudadanosModel();
        $ciudadanos->update($datos['dpi'], $datos);
        return redirect()->route('ver_ciudadanos');
    }

}
