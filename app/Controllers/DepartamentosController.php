<?php

namespace App\Controllers;
use App\Models\DepartamentosModel;

/* pagina principal */
class DepartamentosController extends BaseController
{
    public function index(): string
    {
        $depto = new DepartamentosModel();

        $datos['datos']=$depto->findAll();

        return view('departamentos', $datos);
    }

    public function agregarDepartamento(){
        $departamentos = new DepartamentosModel();
        $datos = [
            'cod_depto' => $this->request->getVar('txtId'),
            'nombre_depto'=>$this->request->getVar('txtNombre'),
            'cod_region'=>$this->request->getVar('txtCodRegion')
        ];
        $departamentos->insert($datos);
        return redirect()->route('ver_departamentos');
    }

    public function eliminarDepartamento($id=null){

        $departamentos = new DepartamentosModel();
        $departamentos->delete(['cod_depto'=>$id]);
        return redirect()->to('ver_departamentos');
 
     }

     public function buscarDepartamento($id=null){
        echo $id;
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->where('cod_depto', $id)->first();
        return view('form_modificar_departamentos', $datos);
    }


    public function modificarDepartamento (){
        $datos=[
            'cod_depto' => $this->request->getVar('txtId'),
            'nombre_depto'=>$this->request->getVar('txtNombre'),
            'cod_region'=>$this->request->getVar('txtCodRegion')
            
        ];

        $departamentos = new DepartamentosModel();
        $departamentos->update($datos['cod_depto'], $datos);
        return redirect()->route('ver_departamentos');
    }

}
